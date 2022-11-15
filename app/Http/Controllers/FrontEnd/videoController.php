<?php
namespace App\Http\Controllers\FrontEnd;


use App\Models\video;
use App\Models\CategoryVideo;
use Illuminate\Support\Facades\file;

use App\Consts;
use App\Http\Services\ContentService;
use App\Models\CmsNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class videoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $video=video::all();
        $keyword = "";
    
            if ($request->input('keyword')) {
                $keyword = $request->input('keyword');
            }
            $video = video::where('name', 'LIKE', "%{$keyword}%")->get();

        return view('admin.pages.video.index',compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function create(Request $request)
    {
        $request->validate([
            'title' => 'required',

        ]);
        if($request->hasFile('file')){
            $file=$request->file('file');
            $fileName=$file->getClientOriginalName();
            $reName=time();
            $file->move('public/upload/',$reName.$fileName);
            $path='public/upload/'.$reName.$fileName;       
            
           
        }
    video::create([     
        'name' => $request->input('title'),
        'order'=>$request->input('order'),
        'id_category'=>$request->input('category'),
        'source'=>$path,
    ]);
        return redirect('admin/video')->with('status','thêm mới thành công');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
     $category = CategoryVideo::all();
    


    return view('admin.pages.video.create', compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   function edit($id)
    {
        //
        $category = CategoryVideo::all();
       $video = video::find($id);

        return view('admin.pages.video.edit',compact('category','video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        video::where('id', $id)->update([     
            'name' => $request->input('title'),
            'order'=>$request->input('order'),
            'id_category'=>$request->input('category'),
            
        ]);
        if ($request->hasFile('file')) { // kiem tra file
            $file = $request->file('file'); //lấy 
            $rename = time();
            $fileName = $file->getClientOriginalName();
            $video = video::find($id);
            $a = $video->id;

            ///Lấy file cũ và xóa
            $product_images_old = $video->source;

            if (File::exists($product_images_old)) {

                File::delete($product_images_old);
            }
            $file->move('public/upload/', $rename . $fileName); // luu file
            $path = 'public/upload/' . $rename . $fileName; /// dduongf dẫn lưu file
            video::where('id', $id)->update([     
               
                'source'=>$path,
            ]);

}
return redirect('admin/video')->with('status','Cập nhập thành công');

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        $video=video::find($id);
     
        $video->forcedelete();
        return redirect('admin/video')->with('status','Xóa thành công');

    }

}

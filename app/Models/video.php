<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    //
    protected $table ='video';
    protected $fillable = ['name','source','order','status','id_category'];
}

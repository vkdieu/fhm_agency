
<footer
id="footer"
class="dark"
data-scrollto-settings='{"offset":140,"speed":1250,"easing":"easeOutQuad"}'
>
<!-- Copyrights
============================================= -->
<div id="copyrights">
  <div class="container">
    <div class="row col-mb-30">
      <div class="col-md-6 text-center text-md-start">
        Copyrights © 2022 All Rights Reserved by FHM Agency.<br />
        <div class="copyright-links">
          <a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
        </div>
      </div>

      <div class="col-md-6 text-center text-md-end">
        <div
          class="d-flex justify-content-center justify-content-md-end"
        >
          <a
            href="{{ $web_information->social->facebook }}"
            class="social-icon si-small si-borderless si-facebook"
          >
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
          </a>

          <a
            href="{{ $web_information->social->twitter }}"
            class="social-icon si-small si-borderless si-twitter"
          >
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
          </a>

     

       

         


      

        </div>

        <div class="clear"></div>

        <i class="icon-envelope2"></i>  @isset($web_information->information->email)

        {{ $web_information->information->email }}
    @endisset
        <span class="middot">·</span>
        <i class="icon-headphones"></i> 
         @isset($web_information->information->phone)
        {{ $web_information->information->phone }}
    @endisset
        <span class="middot">·</span>
        <i class="icon-skype2"></i>  @isset($web_information->information->skype)
        {{ $web_information->information->skype }}
    @endisset
      </div>
    </div>
  </div>
</div>
<!-- #copyrights end -->
</footer>

@extends('pages.home')

@section('body')
<div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider">
              <div class="single_iteam"><img src="{{asset('assets')}}/images/550x330x1.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
              <div class="single_iteam"><img src="{{asset('assets')}}/images/550x330x2.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
              <div class="single_iteam"><img src="{{asset('assets')}}/images/550x330x3.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
              <div class="single_iteam"><img src="{{asset('assets')}}/images/550x330x4.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
            </div>
          </div>
</div>
<div class="col-lg-6 col-md-6 col-sm6">
          <div class="content_top_right">
            <ul class="featured_nav wow fadeInDown">
              <li><img src="{{asset('assets')}}/images/300x215x1.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
              <li><img src="{{asset('assets')}}/images/300x215x2.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
              <li><img src="{{asset('assets')}}/images/300x215x3.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
              <li><img src="{{asset('assets')}}/images/300x215x4.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
            </ul>
          </div>
</div>

<div class="content_middle">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="content_middle_leftbar">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">category1</a> </h2>
            <ul class="catg1_nav">
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="{{asset('assets')}}/images/292x150x1.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="{{asset('assets')}}/images/292x150x2.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="content_middle_middle">
          <div class="slick_slider2">
            <div class="single_featured_slide"> <a href="pages/single.html"><img src="{{asset('assets')}}/images/567x330x1.jpg" alt=""></a>
              <h2><a href="pages/single.html">Praesent vitae quam vitae arcu posuer 1</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
            <div class="single_featured_slide"> <a href="pages/single.html"><img src="{{asset('assets')}}/images/567x330x2.jpg" alt=""></a>
              <h2><a href="#">Praesent vitae quam vitae arcu posuer 2</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
            <div class="single_featured_slide"> <a href="pages/single.html"><img src="{{asset('assets')}}/images/567x330x3.jpg" alt=""></a>
              <h2><a href="#">Praesent vitae quam vitae arcu posuer 3</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="content_middle_rightbar">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">category2</a> </h2>
            <ul class="catg1_nav">
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="{{asset('assets')}}/images/292x150x1.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="{{asset('assets')}}/images/292x150x2.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
@endsection
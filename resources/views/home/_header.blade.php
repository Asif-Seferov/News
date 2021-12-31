<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href=" {{route('home')}} ">Home</a></li>
              <li><a href=" {{route('about')}} ">About</a></li>
              <li><a href=" {{route('blogs')}} ">Blogs</a></li>
              <li><a href=" {{route('contact')}} ">Contact</a></li>
              <li><a href=" {{route('user.register')}} ">Register</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <form action="#" class="search_form">
              <input type="text" placeholder="Text to Search">
              <input type="submit" value="">
            </form>
          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="index.html">mag<strong>Express</strong> <span>A Pro Magazine Template</span></a></div>
          <div class="header_bottom_right"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href=" {{route('home')}} ">Home</a></li>
            <li><a href=" {{route('about')}} ">About</a></li>
            <li><a href=" {{route('blogs')}} ">Blogs</a></li>
            <li><a href=" {{route('contact')}} ">Contact</a></li>
            <li><a href=" {{route('user.register')}} ">Register</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
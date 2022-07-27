<!DOCTYPE html>
@foreach ($konfigurasi as $konfigurasi)
<html style="font-size: 16px;" lang="en"><head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="{{ $konfigurasi->metadata }}">
    <meta name="description" content="">
    <title>{{ $konfigurasi->title }}</title>
    <link rel="stylesheet" href="../../assets/user/nicepage.css" media="screen">
    <link rel="stylesheet" href="../../assets/user/Home.css" media="screen">
    <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <script class="u-script" type="text/javascript" src="../../assets/user/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../assets/user/nicepage.js" defer=""></script>
    <link rel="shortcut icon" href="{{ asset('storage/' . $konfigurasi->favicon) }}"/>
    <meta name="generator" content="Nicepage 4.13.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
  <link rel="stylesheet" href="../../../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../../assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../../../assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../../../assets/vendors/simple-line-icons/css/simple-line-icons.css">
   {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  --}}
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->

  <!-- endinject -->

    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#3ea9f0">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-overlap u-overlap-transparent u-xl-mode"><header class="u-clearfix u-header u-sticky u-sticky-0e91 u-header" id="sec-fe8b"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="" class="u-image u-logo u-image-1">
          <img src="{{ asset('storage/' . $konfigurasi->favicon) }}" class="u-logo-image u-logo-image-1" data-image-width="80" data-image-height="40">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-grey-90 u-text-hover-grey-90" href="/" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/about" style="padding: 10px 0px;">About Us</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/services" style="padding: 10px 0px;">Service</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/galleries" style="padding: 10px 0px;">Gallery</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/testimonials" style="padding: 10px 0px;">Testimonial</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/blogs" style="padding: 10px 0px;">Blog</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="/formcontactususer" style="padding: 10px 0px;">Contact Us</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/about">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/services">Service</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/galleries">Gallery</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/tstimonials">Testimonial</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/blogs">Blog</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/formcontactususer">Contact Us</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>

<main>
        <div class="container">
          @yield('content')
        </div>
</main>

      <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #ffffff !important
}</style>
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-8ae1"><div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-align-center-sm u-align-center-xs u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1"><!--position-->
                <div data-position="" class="u-position u-position-1"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-block-header u-text"><!--block_header_content--> JM Solution <!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--> JM Solution merupakan Agensi profesional yang bergerak dibidang Jasa IT. <!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position-->
              </div>
            </div>
            <div class="u-align-center-sm u-align-right-md u-container-style u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <a href="https://nicepage.com" class="u-image u-logo u-image-1"  width="150" height="150">
                  <img src="{{ asset('storage/' . $konfigurasi->favicon) }}" class="u-logo-image u-logo-image-1">
                </a>
              </div>
            </div>
            <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
              <div class="u-container-layout u-valign-top u-container-layout-3">
                <h4 class="u-text u-text-3">Akses Cepat</h4>
                <ul class="u-custom-list u-spacing-5 u-text u-text-default u-text-4">
                  <li>
                    <div class="u-list-icon">
                      <div>►</div>
                    </div><a class="nav-link" href="/" style="color: white">Home</a>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div>►</div>
                    </div><a class="nav-link" href="/about" style="color: white">About Us</a>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div>►</div>
                    </div><a class="nav-link" href="/services" style="color: white">Service</a>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div>►</div>
                    </div><a class="nav-link" href="/galleries" style="color: white">Gallery</a>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div>►</div>
                    </div><a class="nav-link" href="/testimonials" style="color: white">Testimonial</a>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div>►</div>
                    </div><a class="nav-link" href="/blogs" style="color: white">Blog</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div></footer>

      
      <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px; padding: 15px;" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
    <a href="https://wa.me/{{ $konfigurasi->floatingimg }}" style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; right: 20px; bottom: 100px; padding: 24px;" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-4-base" data-href="#">
    <i class="menu-icon mdi mdi mdi-whatsapp" style=""></i>
        
</a>
  
</body></html>

@endforeach
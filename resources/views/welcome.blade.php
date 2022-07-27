@extends('layouts.navbar.index')
@section('content')
<section id="carousel_5ab9" class="u-carousel u-slide u-block-fcf1-1" data-u-ride="carousel" data-interval="5000">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-fcf1-2">
        <li data-u-target="#carousel_5ab9" data-u-slide-to="0" class="u-active u-grey-30"></li>
        <li data-u-target="#carousel_5ab9" class="u-grey-30" data-u-slide-to="1"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">

        <div class="skrollable skrollable-between u-active u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-1" src="" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('storage/' . $slider[0]->gambar) }}')">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-1">{{ $slider[0]->judul}}</h1>
            <p class="u-large-text u-text u-text-variant u-text-2"><?php echo $slider[0]->deskripsi ?></p>
          </div>
        </div>
        @foreach( $slider as $slider)
        <div class="skrollable skrollable-between u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src="" data-image-width="1280" data-image-height="853" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('storage/' . $slider->gambar) }}')">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-1">{{ $slider->judul}}</h1>
            <p class="u-large-text u-text u-text-variant u-text-2"><?php echo $slider->deskripsi ?></p>
          </div>
        </div>
        @endforeach
      </div>

      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-body-alt-color u-block-fcf1-3" href="#carousel_5ab9" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-body-alt-color u-block-fcf1-4" href="#carousel_5ab9" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>

    <section class="u-align-left u-clearfix u-grey-5 u-section-2" id="carousel_745a">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <h3 class="u-custom-font u-font-montserrat u-text u-text-1"> Tentang Perusahaan</h3>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
              @foreach ($aboutus as $aboutus)
                <div class="u-container-layout u-valign-bottom u-container-layout-1">
                  <h6 class="u-text u-text-2">{{ $aboutus->informasi}}</h6>
                  <p class="u-custom-font u-font-montserrat u-text u-text-3"><?php echo $aboutus->profil_detail ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img class="u-image u-image-default u-image-1" src="../../assets/user/images/gedung.jpeg" alt="" data-image-width="720" data-image-height="1080">
      </div>
      @endforeach
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-8" id="sec-a258">
      @foreach ($kmk as $kmk)
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-default u-text-2">Kenapa Memilih Kami</h1>
        <p class="u-text u-text-3"><?php echo $kmk->deskripsi ?></p>
      </div>
      @endforeach
    </section>
    <section class="u-align-left u-clearfix u-grey-5 u-section-3" id="carousel_2d42">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">Service</h2>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-34 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                @foreach ($service as $service)
                  <h3 class="u-custom-font u-font-montserrat u-text u-text-2">{{ $service->katalog}}<br>
                  </h3>
                  @endforeach
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-26 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-image u-image-circle u-image-1" alt="" data-image-width="1280" data-image-height="853"></div>
                  <p class="u-text u-text-black u-text-3">Service yang tersedia akan membuat anda merasa terpuaskan dengan hasil. Apapun permintaan anda akan kami maksimalkan dengan baik, sehingga anda akan terpuaskan dengan layanan kami</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-gradient u-section-4" id="carousel_fea3">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-montserrat u-text u-text-1">Gallery</h1><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
        <div class="u-blog u-expanded-width u-blog-1">
          <div class="u-repeater u-repeater-1"><!--blog_post-->
          @foreach ($gallery as $gallery)
            <div class="u-align-center u-blog-post u-container-style u-repeater-item u-video-cover u-white u-repeater-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <a class="u-post-header-link" href="index.html"><!--blog_post_image-->
                  <img alt="" class="u-blog-control u-image u-image-default u-image-1" src="{{ asset('storage/' . $gallery->foto) }}"><!--/blog_post_image-->
                </a><!--blog_post_metadata-->
                <h4 class="u-blog-control u-text u-text-2">
                  <a class="u-post-header-link" href="blog/post-5.html"><!--blog_post_header_content-->{{ $gallery->judul}}<!--/blog_post_header_content--></a>
                </h4><!--/blog_post_header-->
                <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-1"><!--blog_post_metadata_date-->
                  <span class="u-meta-date u-meta-icon"><!--blog_post_metadata_date_content--><?php echo $gallery->deskripsi ?><!--/blog_post_metadata_date_content--></span><!--/blog_post_metadata_date--><!--blog_post_metadata_comments-->
                </div><!--/blog_post_metadata--><!--blog_post_header-->
              </div>
            </div><!--/blog_post--><!--blog_post-->
            @endforeach
          </div>
        </div><!--/blog-->
      </div>
    </section>
    
    <section class="u-align-center u-clearfix u-white u-section-9" id="sec-7f9c">
    <h1 class="u-custom-font u-font-montserrat u-text ">Testimonial</h1>
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div id="carousel-5989" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-5989" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <div alt="" class="u-image u-image-circle u-image-1" data-image-width="1280" data-image-height="716" style="background-image: url('{{ asset('storage/' . $testimonial[0]->gambar) }}')"></div>
                <p class="u-large-text u-text u-text-variant u-text-1"><?php echo $testimonial[0]->isi_testimoni ?></p>
                <h4 class="u-text u-text-default u-text-2">{{ $testimonial[0]->nama}}<br>
                </h4>
                <h6 class="u-text u-text-default u-text-3">{{ $testimonial[0]->instansi}}</h6>
              </div>
            </div>
            @foreach($testimonial as $testimonial)
            <div class="u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                <div alt="" class="u-image u-image-circle u-image-2" data-image-width="1280" data-image-height="716" style="background-image: url('{{ asset('storage/' . $testimonial->gambar) }}')"></div>
                <p class="u-large-text u-text u-text-variant u-text-4"><?php echo $testimonial->isi_testimoni ?></p>
                <h4 class="u-text u-text-default u-text-5"> {{ $testimonial->nama}}<br>
                </h4>
                <h6 class="u-text u-text-default u-text-6">{{ $testimonial->instansi}}</h6>
              </div>
            </div>
            @endforeach
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-hidden-xs u-icon-circle u-spacing-10 u-carousel-control-1" href="#carousel-5989" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-hidden-xs u-icon-circle u-spacing-10 u-carousel-control-2" href="#carousel-5989" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
      <style data-mode="XXL">@media (max-width: 0px) {
   .u-section-9 {
    background-image: none;
  }
  .u-section-9 .u-sheet-1 {
    min-height: 579px;
  }
  .u-section-9 .u-slider-1 {
    min-height: 480px;
    width: 763px;
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-9 .u-carousel-indicators-1 {
    position: absolute;
    bottom: 10px;
    width: auto;
    height: auto;
  }
  .u-section-9 .u-container-layout-1 {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 80px;
    padding-right: 80px;
  }
  .u-section-9 .u-image-1 {
    width: 83px;
    height: 83px;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
    background-position: 50% 50%;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-9 .u-text-1 {
    margin-top: 20px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
    font-size: 1.25rem;
  }
  .u-section-9 .u-text-2 {
    font-weight: 700;
    margin-top: 35px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-9 .u-text-3 {
    font-size: 1rem;
    font-weight: 400;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-9 .u-container-layout-2 {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 80px;
    padding-right: 80px;
  }
  .u-section-9 .u-image-2 {
    width: 83px;
    height: 83px;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
    background-position: 50% 50%;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-9 .u-text-4 {
    margin-top: 20px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
    font-size: 1.25rem;
  }
  .u-section-9 .u-text-5 {
    font-weight: 700;
    margin-top: 35px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-9 .u-text-6 {
    font-size: 1rem;
    font-weight: 400;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-9 .u-carousel-control-1 {
    width: 43px;
    height: 43px;
    background-image: none;
  }
  .u-section-9 .u-carousel-control-2 {
    width: 43px;
    height: 43px;
    background-image: none;
    left: auto;
    position: absolute;
    right: 0;
  }
}</style>
    </section>
    
    <section class="u-clearfix u-grey-light-2 u-typography-custom-page-typography-12--Map u-section-6" id="sec-568b">
      <div class="u-expanded u-grey-light-2 u-map">
        <div class="embed-responsive">
          <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=graha%20nurul%20menteng&amp;z=18&amp;t=m" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWFkZHJlc3MlMjIlMkMlMjJhZGRyZXNzJTIyJTNBJTIyZ3JhaGElMjBudXJ1bCUyMG1lbnRlbmclMjIlMkMlMjJ6b29tJTIyJTNBMTglMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCUyQyUyMmVtYmVkJTIyJTNBJTIyJTIyJTdE"></iframe>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-4" id="carousel_e0fa" syle="">
      <div class="u-clearfix u-sheet u-sheet-1"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
      <h1 class="u-custom-font u-font-montserrat u-text u-text-1">Blog</h1>
        <div class="u-blog u-expanded-width u-blog-1">
          <div class="u-repeater u-repeater-1"><!--blog_post-->
          @foreach ($blog as $blog)
            <div class="u-blog-post u-container-style u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom-xs u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                <a class="u-post-header-link" href="{{ route('blogs.show', $blog->id) }}" style="color: black; text-decoration: none;"><!--blog_post_image-->
                <img src="{{ asset('storage/' . $blog->foto) }}" alt="No Image" class="u-blog-control u-image u-image-default u-image-1 u-repeater-item-1"><!--/blog_post_image-->
                <!--blog_post_header-->
                <h4 class="u-blog-control u-text u-text-2">
                  <div class="u-post-header-link" href="blog/post-5.html"><!--blog_post_header_content-->{{ $blog->judul}}<!--/blog_post_header_content--></div>
                </h4><!--/blog_post_header--><!--blog_post_content-->
                <div class="u-blog-control u-post-content u-text u-text-2 u-text-grey-30"><!--blog_post_content_content-->Dibuat: {{ $blog->created_at}}<!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_readmore-->
                <div class="u-blog-control u-post-content u-text u-text-2 "><!--blog_post_content_content-->Kategori: {{ $blog->kategori}}<!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_readmore-->                </a>
              </div>
            </div><!--/blog_post--><!--blog_post-->
          @endforeach
          </div>
        </div><!--/blog-->
      </div>
    </section>
    <a href='https://www.stat-counter.org/'>https://www.stat-counter.org/</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=1bffe27f451749afd6d9b4244cd14ee32f1a1539'></script>
<div hidden><script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/955600/t/2"></script></div>

    @endsection
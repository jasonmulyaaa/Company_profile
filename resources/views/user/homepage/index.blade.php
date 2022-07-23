@extends('layouts.navbar.index')
@section('content')
    <section id="carousel_5ab9" class="u-carousel u-slide u-block-fcf1-1" data-u-ride="carousel" data-interval="5000">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-fcf1-2">
        <li data-u-target="#carousel_5ab9" data-u-slide-to="0" class="u-active u-grey-30"></li>
        <li data-u-target="#carousel_5ab9" class="u-grey-30" data-u-slide-to="1"></li>
      </ol>
      @foreach ($slider as $slider)
      <div class="u-carousel-inner" role="listbox">
        
        <img class="skrollable skrollable-between u-active u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-1" src="{{ asset('storage/' . $slider->gambar) }}" alt="No Image">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-1">{{ $slider->judul}}</h1>
            <p class="u-large-text u-text u-text-variant u-text-2"><?php echo $slider->deskripsi ?></p>
          </div>
        </div>
      </div>
      @endforeach
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
        <img class="u-image u-image-default u-image-1" src="../../assets/user/images/pexels-humphrey-muleba-2058659.jpg" alt="" data-image-width="720" data-image-height="1080">
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
                  <h3 class="u-custom-font u-font-montserrat u-text u-text-2">Premium Design<br>Amazing Photo<br>Creative Ideas<br>Unique Strategy<br>Creative Branding
                  </h3>
                  <a href="https://nicepage.online" class="u-border-active-black u-border-hover-black u-border-none u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-hover-palette-1-light-2 u-palette-1-base u-radius-50 u-text-active-white u-text-hover-white u-text-white u-btn-1">learn more</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-26 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-image u-image-circle u-image-1" alt="" data-image-width="1280" data-image-height="853"></div>
                  <p class="u-text u-text-black u-text-3">Dignissim suspendisse in est ante in nibh mauris. Varius quam quisque id diam vel quam elementum pulvinar etiam. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Nunc mattis enim ut tellus elementum sagittis vitae et leo.</p>
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
                <a class="u-post-header-link" href="blog/post-5.html"><!--blog_post_image-->
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
    <section class="u-align-left u-clearfix u-section-5" id="carousel_2910">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h1 class="u-custom-font u-font-montserrat u-text u-text-1">Testimonial</h1>
        <div class="u-clearfix u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-60">
                <div class="u-layout-col">
                @foreach ($testimonial as $testimonial)
                  <div class="u-size-20">
                    <div class="u-layout-row">
                      <img src="{{ asset('storage/' . $testimonial->gambar) }}" alt="No Image" class="u-align-left u-container-style u-image u-layout-cell u-size-13 u-image-1" data-image-width="720" data-image-height="1080">
                        <div class="u-container-layout u-container-layout-1"></div>
                      </div>
                      <div class="u-container-style u-layout-cell u-shape-rectangle u-size-47 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                          <p class="u-custom-font u-heading-font u-text u-text-grey-40 u-text-1"><?php echo $testimonial->isi_testimoni ?> ~{{ $testimonial->nama }}</p>
                          <h6 class="u-custom-font u-font-montserrat u-text u-text-2">{{ $testimonial->instansi}}</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-light-2 u-typography-custom-page-typography-12--Map u-section-6" id="sec-568b">
      <div class="u-expanded u-grey-light-2 u-map">
        <div class="embed-responsive">
          <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=Duta%20Pakuan%20Jl.Danau%20Kerinci%20Blok%20E1%20no.15&amp;z=18&amp;t=m" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWFkZHJlc3MlMjIlMkMlMjJhZGRyZXNzJTIyJTNBJTIyRHV0YSUyMFBha3VhbiUyMEpsLkRhbmF1JTIwS2VyaW5jaSUyMEJsb2slMjBFMSUyMG5vLjE1JTIyJTJDJTIyem9vbSUyMiUzQTE4JTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlN0Q="></iframe>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-7" id="carousel_e0fa">
      <div class="u-clearfix u-sheet u-sheet-1"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
        <div class="u-blog u-blog-1">
          <div class="u-repeater u-repeater-1"><!--blog_post-->
          @foreach ($blog as $blog)
            <div class="u-blog-post u-container-style u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom-xs u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                <a class="u-post-header-link" href="blog/post-5.html"><!--blog_post_image-->
                <img src="{{ asset('storage/' . $blog->foto) }}" alt="No Image" class="u-blog-control u-image u-image-default u-image-1"><!--/blog_post_image-->
                </a><!--blog_post_header-->
                <h2 class="u-blog-control u-text u-text-1">
                  <a class="u-post-header-link" href="blog/post-5.html"><!--blog_post_header_content-->{{ $blog->judul}}<!--/blog_post_header_content--></a>
                </h2><!--/blog_post_header--><!--blog_post_content-->
                <div class="u-blog-control u-post-content u-text u-text-2"><!--blog_post_content_content--><?php echo $blog->deskripsi ?><!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_readmore-->
                <a href="blog/post-5.html" class="u-blog-control u-border-2 u-border-grey-dark-1 u-btn u-btn-rectangle u-button-style u-none u-btn-1"><!--blog_post_readmore_content--><!--options_json--><!--{"content":"","defaultValue":"Read More"}--><!--/options_json-->Read More<!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
              </div>
            </div><!--/blog_post--><!--blog_post-->
          @endforeach
          
          </div>
        </div><!--/blog-->
      </div>
    </section>
    @endsection
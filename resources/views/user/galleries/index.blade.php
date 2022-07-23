@extends('layouts.navbar.index')
@section('content')
<br>
<br>
<br>
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

@endsection
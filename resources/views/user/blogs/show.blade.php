@extends('layouts.navbar.index')
@section('content')
<head>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62d90257d4aca80019005e40&product=inline-share-buttons' async='async'></script>
</head>
<section class="u-align-center u-clearfix u-section-10" id="sec-75af">
    <br>
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--post_details--><!--post_details_options_json--><!--{"source":""}--><!--/post_details_options_json--><!--blog_post-->
        <div class="u-container-style u-expanded-width u-post-details u-post-details-1">
          <div class="u-container-layout u-valign-top u-container-layout-1"><!--blog_post_image-->
          <h2 class="u-align-center u-blog-control u-text u-text-1">
              <a class="u-post-header-link"><!--blog_post_header_content-->{{ $blog->judul}}<!--/blog_post_header_content--></a>
            </h2><!--/blog_post_header--><!--blog_post_content-->
            <br>
            <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="{{ asset('storage/' . $blog->foto) }}"><!--/blog_post_image--><!--blog_post_metadata-->
            <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-1"><!--blog_post_metadata_date-->
              <span class="u-meta-date u-meta-icon"><!--blog_post_metadata_date_content-->Dibuat: {{ $blog->created_at}}<!--/blog_post_metadata_date_content--></span><!--/blog_post_metadata_date--><!--blog_post_metadata_category-->
              <span class="u-meta-category u-meta-icon"><!--blog_post_metadata_category_content-->Kategori: {{ $blog->kategori}}<!--/blog_post_metadata_category_content--></span><!--/blog_post_metadata_category--><!--blog_post_metadata_comments-->
            </div><!--/blog_post_metadata--><!--blog_post_header-->
            <br>
            <div class="sharethis-inline-share-buttons"></div>
            <br>
            <div class="u-align-justify u-blog-control u-post-content u-text u-text-2"><!--blog_post_content_content--><?php echo $blog->deskripsi ?><!--/blog_post_content_content--></div><!--/blog_post_content-->
          </div>
        </div><!--/blog_post--><!--/post_details-->
      </div>
    </section>
@endsection
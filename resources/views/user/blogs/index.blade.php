@extends('layouts.navbar.index')
@section('content')
<br>
<br>
<section class="u-align-center u-clearfix u-section-4" id="carousel_e0fa" syle="">
      <div class="u-clearfix u-sheet u-sheet-1"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
      <h1 class="u-custom-font u-font-montserrat u-text u-text-1">Blog Terbaru</h1>
        <div class="u-blog u-expanded-width u-blog-1">
          <div class="col-md-4">
            <form action="{{ url()->current() }}" autocomplete="off" method="get">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <button class="btn btn-dark" type="submit"><i class="mdi mdi-magnify"></i></button>
                </div>
            </form>
           </div>
           @forelse ($blogss as $blog)
               
           @empty

           <br>
           <p class="text-center">Maaf, Hasil tidak ditemukan</p>
               
           @endforelse
          <div class="u-repeater u-repeater-1"><!--blog_post-->
          @foreach ($blogss as $blog)
            <div class="u-blog-post u-container-style u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom-xs u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                <a class="u-post-header-link" href="{{ route('blogs.show', $blog->id) }}" style="color: black; text-decoration: none;"><!--blog_post_image-->
                <img src="{{ asset('storage/' . $blog->foto) }}" alt="No Image" class="u-blog-control u-image u-image-default u-image-1 u-repeater-item-1"><!--/blog_post_image-->
                <!--blog_post_header-->
                <h4 class="u-blog-control u-text u-text-2">
                  <div class="u-post-header-link"><!--blog_post_header_content-->{{ $blog->judul}}<!--/blog_post_header_content--></div>
                </h4><!--/blog_post_header--><!--blog_post_content-->
                <div class="u-blog-control u-post-content u-text u-text-2 u-text-grey-30"><!--blog_post_content_content-->Dibuat: {{ $blog->created_at}}<!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_readmore-->
                <div class="u-blog-control u-post-content u-text u-text-2 "><!--blog_post_content_content-->Kategori: {{ $blog->kategori}}<!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_readmore-->
              </a>
              </div>
            </div><!--/blog_post--><!--blog_post-->
          @endforeach
          
          </div>
          {!! $blogss->links() !!}
        </div><!--/blog-->
      </div>

    </section>
    @endsection
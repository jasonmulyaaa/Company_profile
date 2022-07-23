@extends('layouts.navbar.index')
@section('content')
<br>
<br>
<br>
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
@endsection
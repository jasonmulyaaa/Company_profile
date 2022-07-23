@extends('layouts.navbar.index')
@section('content')
<br>
<br>
<section class="u-align-left u-clearfix  u-section-3" id="carousel_2d42">
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
                  <p class="u-text u-text-black u-text-3">Service yang tersedia akan membuat anda merasa terpuaskan dengan hasil. Apapun permintaan anda akan kami maksimalkan dengan baik.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
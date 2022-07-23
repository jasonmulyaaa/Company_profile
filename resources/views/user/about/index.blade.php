@extends('layouts.navbar.index')
@section('content')
<section class="u-align-left u-clearfix  u-section-2" id="carousel_745a">
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

@endsection
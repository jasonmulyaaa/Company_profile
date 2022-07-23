@extends('layouts.navbar.index')
@section('content')
<section class="u-clearfix u-section-1" id="carousel_a04e">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-40 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <h2 class="u-align-left u-custom-font u-font-montserrat u-text u-text-1">Contact Us</h2>
                  @foreach ($contactus as $contactus)
                  <p class="u-text u-text-2">Hubungi kami apabila anda tertarik dan ingin menjalankan komunikasi dengan kami.<br>
                    <br>Email: {{ $contactus->email}}
                    <br>Website: {{ $contactus->website}}
                  </p>
                  <div class="u-border-2 u-border-grey-25 u-line u-line-horizontal u-line-1"></div>
                  <div class="u-expanded-width u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                      <div class="u-align-left u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-1"><img src="../../assets/user/images/3179068.png" alt=""></span>
                          <h6 class="u-text u-text-3">Lokasi Kantor</h6>
                          <p class="u-text u-text-4">{{ $contactus->alamat}}</p>
                        </div>
                      </div>
                      <div class="u-align-left u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-2"><img src="../../assets/user/images/ce131fa2-9b26-4c33-a9f7-aff3357242a7.png" alt=""></span>
                          <h6 class="u-text u-text-5"> Phone (Landline)</h6>
                          <p class="u-text u-text-6">+{{ $contactus->no_telp}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-4">
                  <div class="u-align-center u-container-style u-expanded-width u-grey-5 u-group u-radius-30 u-shape-round u-group-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-5">
                      <h4 class="u-custom-font u-font-montserrat u-text u-text-7">Hubungi Kami</h4>
                      <div class="u-form u-form-1">
                      @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Sepertinya ada yang salah. Mohon dicek kembali!<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
                        <form action="{{ route('formcontactususer.store') }}" method="POST" class="u-clearfix u-form-spacing-15 u-inner-form"  style="padding: 0px;" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="u-form-group u-form-name">
                            <label for="name-4c18" class="u-label">Nama</label>
                            <input type="text" placeholder="Enter your Name" id="name-4c18" name="nama" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-10 u-white" >
                          </div>
                          <br>
                          <div class="u-form-email u-form-group">
                            <label for="email-4c18" class="u-label">Subjek</label>
                            <input type="text" placeholder="Enter a valid email address" id="email-4c18" name="subjek" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-10 u-white">
                          </div>
                          <br>
                          <div class="u-form-group u-form-message">
                            <label for="message-4c18" class="u-label">Keterangan</label>
                            <textarea placeholder="Enter your message" rows="4" cols="50" id="message-4c18" name="keterangan" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-10 u-white"></textarea>
                          </div>
                          <br>
                          <div class="u-form-group u-form-name">
                          {!! NoCaptcha::renderJs() !!}
                          {!! NoCaptcha::display() !!}
                          </div>

                            <button type="submit" class="u-active-palette-4-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1">Submit Pesan Anda</button>



                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-light-2 u-typography-custom-page-typography-12--Map u-section-6" id="sec-568b">
      <div class="u-expanded u-grey-light-2 u-map">
        <div class="embed-responsive">
          <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=graha%20nurul%20menteng&amp;z=18&amp;t=m" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWFkZHJlc3MlMjIlMkMlMjJhZGRyZXNzJTIyJTNBJTIyZ3JhaGElMjBudXJ1bCUyMG1lbnRlbmclMjIlMkMlMjJ6b29tJTIyJTNBMTglMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCUyQyUyMmVtYmVkJTIyJTNBJTIyJTIyJTdE"></iframe>
        </div>
      </div>
    </section>

@endsection
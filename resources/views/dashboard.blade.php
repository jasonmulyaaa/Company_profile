@extends('layouts.master')
@section('content')


          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Halaman Slider</p>
                            <h3 class="rate-percentage">3</h3>
                            
                          </div>
                          <div>
                            <p class="statistics-title">Halaman Blog</p>
                            <h3 class="rate-percentage">6</h3>
                                
                          </div>
                          <div>
                            <p class="statistics-title">Service</p>
                            <h3 class="rate-percentage">4</h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Gallery</p>
                            <h3 class="rate-percentage">3</h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Testimonial</p>
                            <h3 class="rate-percentage">3</h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Total Visitor</p>
                            <h3 class="rate-percentage">50</h3>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <a href='https://www.stat-counter.org/'>https://www.stat-counter.org/</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=1bffe27f451749afd6d9b4244cd14ee32f1a1539'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/955600/t/2"></script>
</div>
</div>

@endsection
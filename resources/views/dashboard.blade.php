@extends('layouts.master')
@section('content')
  <div class="content-wrapper" style="background-color: white;">
    <div class="row">
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Visitors</h4>
      <div class="media">
        <i class="mdi mdi-account-multiple icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $totalvisit }} Visitors</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Sliders</h4>
      <div class="media">
        <i class="mdi mdi-compare icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $slider }} Sliders</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Services</h4>
      <div class="media">
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $service }} Services</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Galleries</h4>
      <div class="media">
        <i class="mdi mdi-image-multiple icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $gallery }} Galleries</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Testimonials</h4>
      <div class="media">
        <i class="mdi mdi-thumb-up icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $testimonial }} Testimonials</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Blogs</h4>
      <div class="media">
        <i class="mdi mdi-library-books icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $blog }} Blogs</h5>
        </div>
      </div>
    </div>
  </div>
</div>

          
</div>
</div>

@endsection
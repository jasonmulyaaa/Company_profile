@extends('layouts.master')
@section('content')

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route('contactus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content-wrapper bg-white">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Contact Us</h4>
                  <p class="card-description">
                    Isi Form Contact Us
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Alamat</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">No Telepon</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="No Telepen" name="no_telp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Email</label>
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Email@gmail.com" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Website</label>
                      <input class="form-control" id="exampleTextarea1" rows="4" name="website"></input>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a class="btn btn-light" href="{{ route('contactus.index') }}">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
</form>

            <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Halaman ini bersifat rahasia dan hanya boleh diakses oleh pihak yang berwajib</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. PT. PT PTan</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

@endsection
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
<form action="{{ route('konfigurasi.update', $konfigurasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="content-wrapper bg-white">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Konfigurasi</h4>
                  <p class="card-description">
                    Isi Form Konfigurasi
                  </p>
                  <form class="forms-sample">
                  <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title" value="{{ $konfigurasi->title}}">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Favicon</strong>
                                <img class="img-preview img-fluid mb-3 col-sm-5" >
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('image') is-invalid @enderror name="favicon" id="image" onchange="previewImage()" value="{{ $konfigurasi->favicon}}">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                      <label for="exampleInputName1">Metadata</label>
                      <input type="hidden" class="form-control" id="x" placeholder="Metadata" name="metadata" value="{{ $konfigurasi->metadata}}">
                      <trix-editor input="x"></trix-editor>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Floating Image (No Telepon)</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="No Telepon" name="floatingimg" value="{{ $konfigurasi->floatingimg}}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a class="btn btn-light" href="{{ route('konfigurasi.index') }}">Cancel</a>
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
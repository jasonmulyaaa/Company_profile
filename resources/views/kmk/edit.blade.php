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
<form action="{{ route('kmk.update', $kmk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="content-wrapper bg-white">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Kenapa Memilih Kami</h4>
                  <p class="card-description">
                    Edit Form Kenapa Memilih Kami
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="x">Deskripsi</label>
                      <input class="form-control" id="x" type="hidden" rows="4" name="deskripsi" value="{{ $kmk->deskripsi }}"></input>
                      <trix-editor input="x"></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a class="btn btn-light" href="{{ route('kmk.index') }}">Cancel</a>
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
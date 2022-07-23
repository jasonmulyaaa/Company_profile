@extends('layouts.master')
@section('content')
 <!-- partial -->

          <div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Blog Table</h4>
                  <div class="table-responsive">
                    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
                    <table class="table table-striped">
                      <div class="col-md-4">
                        <form action="{{ url()->current() }}" autocomplete="off" method="get">
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <button class=" btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </form>
                       </div>
                      <thead>
                        <tr>
                        <th>
                          <input type="checkbox" id="chkCheckAll" />
                        </th>
                          <th>
                            Kategori
                          </th>
                          <th>
                            Judul
                          </th>
                          <th>
                            Foto
                          </th>
                          <th>
                            Deskripsi
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($blogs as $blog)
                        <tr>
                        <td>
                          <input type="checkbox" name="ids" class="checkBoxClass" value="{{ $blog->id }}" />
                        </td>
                          <td class="py-1">
                          {{ $blog->kategori}}
                          </td>
                          <td class=" text-wrap">
                          {{ $blog->judul}}
                          </td>
                          <td>
                          <div style="width: 200px;">
                            <img src="{{ asset('storage/' . $blog->foto) }}" alt="No Image" class="img-fluid mt-3">
                        </div>
                          </td>
                          <td class=" text-wrap">
                          <?= substr($blog->deskripsi, 0, 50) ?>
                          </td>
                          <td>
                          <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">

                          <a class="btn rounded-pill btn-warning" href="{{ route('blog.edit', $blog->id) }}">Edit</a>
                          @csrf
                          @method('DELETE')

                          <button type="submit" class="btn rounded-pill btn-danger">Delete</button>
                        </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    
                    {!! $blogs->links() !!}
                  </div>
                </div>
              </div>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blog.create') }}"> +</a>
                <a href="#" class="btn btn-danger" id="deleteAllSelectedBlog" onclick="location.reload()">Delete Selected</a>
            </div>

                
                  
           
            

          
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
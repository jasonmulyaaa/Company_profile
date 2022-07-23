@extends('layouts.master')
@section('content')
 <!-- partial -->

          <div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Contact Us Table</h4>
                  <div class="table-responsive">
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
                            Nama
                          </th>
                          <th>
                            Subjek
                          </th>
                          <th>
                            Keterangan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($formcontactuss as $formcontactus)
                        <tr>
                          <td>
                          {{ $formcontactus->nama}}
                          </td>
                          <td>
                          {{ $formcontactus->subjek}}
                          </td>
                          <td>
                          {{ $formcontactus->keterangan}}
                          </td>
                          <td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {!! $formcontactuss->links() !!}
                  </div>
                </div>
              </div>
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
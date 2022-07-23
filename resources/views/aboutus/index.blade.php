@extends('layouts.master')
@section('content')
 <!-- partial -->

          <div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">About Us Table</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Informasi
                          </th>
                          <th>
                            Profil Detailnya
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($aboutuss as $aboutus)
                        <tr>
                          <td class="py-1">
                          {{ $aboutus->informasi}}
                          </td>
                          <td class=" text-wrap">
                          <?php echo $aboutus->profil_detail ?>
                          </td>
                          <td>
                          <a class="btn rounded-pill btn-warning" href="{{ route('aboutus.edit', $aboutus->id) }}">Edit</a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {!! $aboutuss->links() !!}
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
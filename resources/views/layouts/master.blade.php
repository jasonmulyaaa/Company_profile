<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../assets/dist/trix.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../assets/images" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('assets/user/datatable.css')}}">


  
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <h3>Admin</h3>
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <h3>Admin</h3>
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text"><span class="text-black fw-bold">Selamat Pagi<span></h1>
            <h3 class="welcome-sub-text">Your performance  </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="../../assets/images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../../assets/images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Admin</p>
              </div>
              <form action="/logout" method="post">
                @csrf
                <button class="btn btn-link"><i class="dropdown-item-icon mdi mdi-import text-primary me-2"></i>Sign Out</button>
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="assets/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="assets/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="assets/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="assets/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="assets/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="assets/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar  p-3 mb-5 bg-body rounded" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Menu</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi mdi-animation"></i>
              <span class="menu-title">Menu</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('slider.index') }}">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('aboutus.index') }}">About Us</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('service.index') }}">Service</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('gallery.index') }}">Gallery</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('testimonial.index') }}">Testimonial</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('contactus.index') }}">Contact Us</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Kategori</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('kategorigallery.index') }}">
              <i class="menu-icon mdi mdi mdi mdi-book"></i>
              <span class="menu-title">Kategori Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('kategoriblog.index') }}">
              <i class="menu-icon mdi mdi mdi mdi-book"></i>
              <span class="menu-title">Kategori Blog</span>
            </a>
          </li>
          <li class="nav-item nav-category">More</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('kmk.index') }}">
              <i class="menu-icon mdi mdi mdi-comment-question-outline"></i>
              <span class="menu-title">Kenapa Memilih Kami</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('formcontactus.index') }}">
              <i class="menu-icon mdi mdi mdi mdi-clipboard-text"></i>
              <span class="menu-title">Form Contact Us</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('konfigurasi.index') }}">
              <i class="menu-icon mdi mdi mdi-earth"></i>
              <span class="menu-title">Konfigurasi</span>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <main>
        <div class="container">
          @yield('content')
        </div>
</main>

  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../assets/dist/trix.js"></script>
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
  <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../../assets/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/template.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../../assets/js/dashboard.js"></script>
  <script src="../../assets/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  
<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
  </script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedSlider").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('slider.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedService").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('service.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedGallery").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('gallery.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedTestimonial").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('testimonial.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedBlog").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('blog.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedKategorigallery").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('kategorigallery.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedKategoriblog").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('kategoriblog.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>
</body>

</html>


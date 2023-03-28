<!doctype html>
<html lang="en" class="dark-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('import/kvtc-logo.ico')}}" type="image/png" />
  <!--plugins-->
  <link href="{{asset('import/assets2/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{asset('import/assets2/plugins/input-tags/css/tagsinput.css')}}" rel="stylesheet" />
  <link href="{{asset('import/assets2/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{asset('import/assets2/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{asset('import/assets2/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('import/assets2/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{asset('import/assets2/css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('import/assets2/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">

  <!-- loader-->
	<link href="{{asset('import/assets2/css/pace.min.css')}}" rel="stylesheet" />


  <!--Theme Styles-->
  <link href="{{asset('import/assets2/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('import/assets2/css/light-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('import/assets2/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{asset('import/assets2/css/header-colors.css')}}" rel="stylesheet" />

  <title>KVTC</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
    <header class="top-header">        
      <nav class="navbar navbar-expand">
      <div class="mobile-toggle-icon d-xl-none">
              <i class="bi bi-list"></i>
            </div>
            <div class="top-navbar d-none d-xl-block">
            <ul class="navbar-nav align-items-center">
              <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="app-emailbox.html">Email</a>
              </li>
             
            </ul>
            </div>
            <div class="search-toggle-icon d-xl-none ms-auto">
              <i class="bi bi-search"></i>
            </div>
           
      <form id="form1" onsubmit="return false" method="none"  class="searchbar d-none d-xl-flex ms-auto">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input id="searchbar" class="form-control" type="search" placeholder="Type here to search">
                &nbsp<button id="searchbtn" class="btn btn-primary"  onclick="SEARCH()" type="submit">Search</button> 
                <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
           
            <script>
 function  SEARCH(){
 var Search=document.getElementById("searchbar").value;
 var result=window.find(Search);
 if (result == false) {
  

}
} </script>
            <div class="top-navbar-right ms-3">
              <ul class="navbar-nav align-items-center">
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center gap-1">
                    <img src="{{asset('import/assets2/images/avatars/avatar-1.png')}}" class="user-img" alt="">
                    <div class="user-name d-none d-sm-block">{{$username}}</div>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img src="{{asset('import/assets2/images/avatars/avatar-1.png')}}" alt="" class="rounded-circle" width="60" height="60">
                          <div class="ms-3">
                            <h6 class="mb-0 dropdown-user-name">{{$username}}</h6>
                            <small class="mb-0 dropdown-user-designation text-secondary">{{$email}}</small>
                          </div>
                       </div>
                     </a>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li>
                      <a class="dropdown-item" href="profile">
                         <div class="d-flex align-items-center">
                           <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                           <div class="setting-text ms-3"><span>Profile</span></div>
                         </div>
                       </a>
                    </li>
                    
                    
                   
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <a class="dropdown-item" href="{{route('profile.logout')}}">
                         <div class="d-flex align-items-center">
                           <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                           <div class="setting-text ms-3"><span>
                            
                           Logout
                      
                      </span></div>
                         </div>
                       </a>
                    </li>
                </ul>
              </li>
             
              
              </ul>
              </div>
        </nav>
      </header>
       <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
            <img src="{{asset('import/kvtc-logo.ico')}}" style="filter: invert(0) grayscale(0%) brightness(100%);" class="logo-icon" alt="logo icon">
                
          </div>
            <div>
              <h4 class="logo-text">KVTC</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu mm-show" id="menu">
            <li class="">
              <a href="dashboard" class="" aria-expanded="false">
                <div class="parent-icon"><i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
              
            </li>
            <li>
              <a href="siteconfig" class="" aria-expanded="false">
                <div class="parent-icon"><i class="bi bi-grid"></i>
                </div>
                <div class="menu-title">Site Configurations</div>
              </a>
              
            </li>
            
            <li>
              <a class="" href="courses" aria-expanded="false">
                <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet"></i>
                </div>
                <div class="menu-title">Courses</div>
              </a>
              
            </li>
            <li>
              <a class="" href="gallerydashboard" aria-expanded="false">
                <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet"></i>
                </div>
                <div class="menu-title">Gallery</div>
              </a>
             
            </li>  
          
          </ul>

       </aside>
       <!--end sidebar -->

       <!--start content-->
       <main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Elements</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				





        <div class="card">
                 <div class="card-header py-3"> 
                  <div class="row g-3 align-items-center">
                    <div class="col-lg-3 col-md-6 me-auto">
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                        <input class="form-control ps-5" type="text" placeholder="search produts">
                      </div>
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                      <select class="form-select">
                        <option>All category</option>
                        <option>Fashion</option>
                        <option>Electronics</option>
                        <option>Furniture</option>
                        <option>Sports</option>
                      </select>
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                      <select class="form-select">
                        <option>Latest added</option>
                        <option>Cheap first</option>
                        <option>Most viewed</option>
                      </select>
                    </div>
                  </div>
                 </div>
                 <div class="card-body">
                   <div class="product-grid">
                     <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-3">
                     <div class="col">
                          <div class="card border shadow-none mb-0">
                            <div class="card-body text-center">
                            
                              <img src="import/assets2/images/plus.png" class="img-fluid mb-3" alt=""/>
                              <form action="/imgadd" method="post"  enctype='multipart/form-data' >
                @csrf
                
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                              <small>Add New Images</small>
                              <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                              <input class="btn btn-sm btn-outline-primary form-control" type="file" name="imageid[]" multiple>
                                <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Add</button>
                            </form>
                              </div>
                            </div>
                          </div>
                       </div>
                     @foreach ($images as $images)
                     <form action="/imgdelete" method="post" >
                @csrf
                
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                       <div class="col">
                          <div class="card border shadow-none mb-0">
                            <div class="card-body text-center">
                              <img src="{{$images}}" class="img-fluid mb-3" alt=""/>
                             
                              
                              <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                               <input type="text" name="imgname" hidden value="{{$images}}">
                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</button>
</form>
                              </div>
                            </div>
                          </div>
                        </div>
                    @endforeach
                 
                
                 
              
            
          
       
       <!--end row-->
      
    </div>
    <nav class="float-end mt-4" aria-label="Page navigation">
      <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>

  </div>
</div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="{{asset('import/assets2/js/bootstrap.bundle.min.js')}}"></script>
  <!--plugins-->
  <script src="{{asset('import/assets2/js/jquery.min.js')}}"></script>
  <script src="{{asset('import/assets2/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('import/assets2/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset('import/assets2/plugins/input-tags/js/tagsinput.js')}}"></script>
  <script src="{{asset('import/assets2/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('import/assets2/js/pace.min.js')}}"></script>
  <script src="{{asset('import/assets2/js/app.js')}}"></script>

  
  
  
</body>

</html>
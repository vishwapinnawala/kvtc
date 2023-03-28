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
            <form class="searchbar d-none d-xl-flex ms-auto">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
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
                            <small class="mb-0 dropdown-user-designation text-secondary">{{$uemail}}</small>
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
				<div class="row">
					<div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">site Customization</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								
								<div class="mb-3">
                <form action="/addbg" method="post" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
									<label for="formFileMultiple" class="form-label">Add Background Images</label>
                                 
								<input class="form-control" type="file" name="imageid[]" multiple>
                  <br>*Select at least 3 images
<br><br>
 <p><input type="submit" class="btn btn-primary" role="button"></input></p>
</form>
								</div>							
							</div>
						</div>
						<h6 class="mb-0 text-uppercase">Vision And Mission</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
                <div class="mb-3">
                  <form action="/adddata" method="post" >
                @csrf
                
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
									<label for="formFile" class="form-label">Vision</label>
                  <textarea name="vision"   class="form-control" id="exampleFormControlTextarea1" rows="3">{{$vision[0]->vision}}</textarea>  
										</div>
                    <div class="mb-3">
									<label for="formFile" class="form-label">Mission</label>
                  <textarea name="mission"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{$vision[0]->mission}}</textarea>
										</div>
                    <br>
    <label class="form-label" >Student Count</label>
    <input name="sc1" value="{{$vision[0]->sc1}}" class="form-control mb-3" type="text" placeholder="" aria-label=" example">
    <label  class="form-label" >Student Count</label>
    <input name="sc2" value="{{$vision[0]->sc2}}" class="form-control mb-3" type="text" placeholder="" aria-label=" example">
    <label class="form-label" >Student Count</label>
    <input name="sc3" value="{{$vision[0]->sc3}}" class="form-control mb-3" type="text" placeholder="" aria-label=" example">
    <label class="form-label" >Student Count</label>
    <input name="sc4" value="{{$vision[0]->sc4}}" class="form-control mb-3" type="text" placeholder="" aria-label=" example">
 
								</div>
                <div class="card-body">
                
                
   
    
								</div>
                
						</div>
            <p><button type="submit" class="me-md-2 btn btn-primary" role="button">Save</button></p>
</form>  
           
						</div>
						
				<!--end row-->

			</main>
       <!--end page main-->


       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        
        <!--start switcher-->
       <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
     
            </div>
          </div>
        </div>
       </div>
       <!--end switcher-->

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
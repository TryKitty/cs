<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        E-Prescription
    </title>
    {{-- <link rel="shortcut icon" href="./images/favicon.png')}} type="image/png')}}> --}}
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href={{asset('cpskn/dash/css/icons.min.css')}}>

    <!-- APP CSS -->
    <link rel="stylesheet" href={{asset('cpskn/dash/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('cpskn/dash/css/grid.css')}}>
    <link rel="stylesheet" href={{asset('cpskn/dash/css/style.css')}}>
    <link rel="stylesheet" href={{asset('cpskn/dash/css/responsive.css')}}>
</head>

<body class="sidebar-expand">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="index.html">
                <img src={{asset('cpskn/dash/images/logo.png')}} alt="Protend logo">
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <!-- SIDEBAR MENU -->
        <div class="simlebar-sc" data-simplebar>
            <ul class="sidebar-menu tf">
                <li class="sidebar-submenu">
                    <a href="index.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-home'></i>
                        <span>Dashboard</span>
                        <div class="dropdown-icon">
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="index.html">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="user-profile.html">
                                User Profile
                            </a>
                        </li>
<li>
                            <a href="user-login.html">
                                User Login
                            </a>
                        </li>
                        <li>
                            <a href="new-account.html">
                               New Account
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-submenu">
                    <a href="project.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-bolt'></i>
                        <span>Project</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="project.html">
                               Project
                            </a>
                        </li>
                        <li>
                            <a href="project-details.html">
                                Project Details
                            </a>
                        </li>
                        <li>
                            <a href="new-project.html">
                                New Project
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-submenu">
                    <a href="clients.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-user'></i>
                        <span>Client</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                                                <li>
                            <a href="clients.html">
                               Manager Client
                            </a>
                        </li>
                        <li>
                            <a href="client-details.html">
                                Client Details
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="board.html">
                        <i class='bx bxs-dashboard'></i>
                        <span>Cari Obat</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class='bx bx-calendar'></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="message.html">
                        <i class='bx bxs-message-rounded-detail' ></i>
                        <span>Message</span>
                    </a>
                </li>
                <li class="sidebar-submenu">
                    <a href="chart-apex.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-component' ></i>
                        <span>Components</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="chart-apex.html">
                                Apex Charts
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                        <div>
                            <i class='bx bx-cog mr-10'></i>
                            <span>darkmode</span>
                        </div>

                        <span class="darkmode-switch"></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- Main Header -->
    <div class="main-header">
        <div class="d-flex">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu'></i>
            </div>
            <div class="main-title">
                CariObat
            </div>
        </div>

        <div class="d-flex align-items-center">

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-search-alt' ></i>
                    </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary h-100" type="submit"><i class='bx bx-search-alt' ></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



            <div class="dropdown d-inline-block mt-12">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src={{asset('cpskn/dash/images/profile/profile.png')}}
                            alt="Header Avatar">
                        <span class="pulse-css"></span>
                        <span class="info d-xl-inline-block  color-span">
                            <span class="d-block fs-20 font-w600">  {{ Auth::user()->name }}</span>
                            <span class="d-block mt-7" >{{ Auth::user()->email }}</span>
                        </span>
                            
                        <i class='bx bx-chevron-down'></i>
                    </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                            <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>{{ __('Logout') }}</span></a>
                     
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Header -->
    <!-- MAIN CONTENT -->
    <div class="main">


        <div class="main-content board">
            <div class="row">
                <div class="col-12">
                    <div class="box card-box">
                        <div class="iconbox ">
                            <div class="container">

 
                                <div class="col-md-12">
                                    <div class="box">
                                        <div class="box-header d-flex justify-content-between">
                                            <a href="index.html">
                                                <img src={{ asset ('cpskn/dash/images/logo.png')}} alt="">
                                            </a>
                                            
                                            <div class="action-reg">
                                                <h4 class="fs-30">Form</h4>
                                                <a href="new-account.html">pembelian obat</a>
                                            </div>
                
                                        </div>
                                        <div class="line"></div>
                                        <div class="box-body">
                                            <div class="auth-content my-auto">
                                               
                                                <form class="mt-6 pt-2" action="index" method="get">
                                                    <div class="mb-3">
                                                      
                                                        <label class="form-label mb-14">Nama</label>
                                                        <input name="csrf-token" type="text" class="form-control" id="username" value="{{ csrf_token() }}" >
                                                    </div>
                                                   
                                               
                                                       <form action="/home" method="get">
                                                   
                                                    <div class="mb-3 mt-24">
                                                        <label for="useremail" class="form-label mb-14">E-Mail</label>
                                                        <input name="cari" type="text" class="form-control" id="useremail" value=""  required="">
                                                        <div class="invalid-feedback">
                                                            Please Enter Email
                                                        </div>
                                                    </div>
                                                </form>
                                                    <div class="mb-3 mt-24">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1">
                                                                <label class="form-label mb-14">Password</label>
                                                            </div>
                                                        </div>
                
                                                        <div class="input-group auth-pass-inputgroup">
                                                            <input type="text" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                            <button class="btn shadow-none ms-0" type="button" id="password-addon"><i class="far fa-eye-slash"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="remember-check">
                                                                <label class="form-check-label" for="remember-check">
                                                                    I agree to the <a href="#" class="text-primary"> Terms of services</a> &amp; <a href="#" class="text-primary"> Privacy policy</a>
                                                                </label>
                                                            </div>
                                                        </div>
                
                                                    </div>
                                                    <div class="mb-3 mt-29">
                                                        <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500" type="submit">Create Account</button>
                                                    </div>
                                                </form>
                
                
                                                <div class="mt-59 text-center">
                                                    <p class="text-muted mb-0 fs-14">Already have an account ? <a href="user-login.html" class="text-primary fw-semibold">  Sign in </a> </p>
                                                </div>
                
                                                <div class="mt-37 text-center">
                
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void()" class="social-list-item text-white">
                                                                <i class="bx bxl-facebook-square"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void()" class="social-list-item text-white">
                                                                <i class="bx bxl-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void()" class="social-list-item  text-white">
                                                                <i class="bx bxl-linkedin-square"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void()" class="social-list-item  text-white">
                                                                <i class="bx bxl-google-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <h2>Table Head Colors</h2>
                                <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>
                                <table class="table">
                                  <thead class="thead-dark">
                                    
                                   
                                          
                                      
                                    <tr>
                                      <th>Nama obat</th>
                                      <th>Nama signa</th>
                                      <th>Kode obat</th>
                                      <th>Kode signa</th>
                                       <th>Stok</th>
                                       <th>Keterangan Obat</th>
                                       <th>Catatan</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @forelse ($data as $obat)
                                    <tr>
                                      {{-- <td>{{ $obat->obatalkes_nama }}</td> --}}
                                      <td>{{ $obat->signa_nama  }}</td>
                                      {{-- <td>{{ $obat->obatalkes_kode  }}</td> --}}
                                      <td>{{ $obat->signa_kode  }}</td>
                                      {{-- <td>{{ $obat->stok }}</td> --}}
                                      {{-- <td>{{$obat->obatalkes_kode}}</td> --}}
                                          {{-- Pagination --}}
                                
   
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center text-mute" colspan="4">Data obat  tidak tersedia</td>
                                    </tr>
                                    @endforelse
                                   
                                    {{-- @endforeach --}}
                                  </tbody>
                                 
                                </table>
                                <div>
                                    {{-- {{ $res->links() }} --}}
                               
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->

    <script src={{asset('cpskn/dash/libs/jquery/jquery.min.js')}}></script>
    <script src={{asset('cpskn/dash/libs/jquery/jquery-ui.min.js')}}></script>
    <script src={{asset('cpskn/dash/libs/moment/min/moment.min.js')}}></script>
    <script src={{asset('cpskn/dash/libs/apexcharts/apexcharts.js')}}></script>
    <script src={{asset('cpskn/dash/libs/bootstrap/js/bootstrap.bundle.min.js')}}></script>
    <script src={{asset('cpskn/dash/libs/peity/jquery.peity.min.js')}}></script>
    <script src={{asset('cpskn/dash/libs/chart.js/Chart.bundle.min.js')}}></script>
    <script src={{asset('cpskn/dash/libs/owl.carousel/owl.carousel.min.js')}}></script>
    <script src={{asset('cpskn/dash/libs/bootstrap/js/bootstrap.min.js')}}></script>
    <script src={{asset('cpskn/dash/libs/simplebar/simplebar.min.js')}}></script>

    <!-- APP JS -->
    <script src={{asset('cpskn/dash/js/main.js')}}></script>
    <script src={{asset('cpskn/dash/js/shortcode.js')}}></script>
    <script src={{asset('cpskn/dash/js/script.js')}}></script>
</body>

</html>
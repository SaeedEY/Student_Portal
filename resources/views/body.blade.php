
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Maryam Gh>">
    <title>Student Portal - @yield('title')</title>

    <link rel="canonical" href="/MG/#">

    
    <link href="/bootstrap.min.css" rel="stylesheet">
    <script src="/bootstrap.bundle.min.js" ></script>

    <style>
        body {
        font-size: .875rem;
        }
        .btn-primary{
            margin-top: 28px;
        }

        .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
        }

        /*
        * Sidebar
        */

        .sidebar {
        position: fixed;
        top: 0;
        /* rtl:raw:
        right: 0;
        */
        bottom: 0;
        /* rtl:remove */
        left: 0;
        z-index: 100; /* Behind the navbar */
        padding: 48px 0 0; /* Height of navbar */
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        @media (max-width: 767.98px) {
        .sidebar {
            top: 5rem;
        }
        }

        .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        }

        .sidebar .nav-link {
        font-weight: 500;
        color: #333;
        }

        .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #727272;
        }

        .sidebar .nav-link.active {
        color: #2470dc;
        }

        .sidebar .nav-link:hover .feather,
        .sidebar .nav-link.active .feather {
        color: inherit;
        }

        .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
        }

        /*
        * Navbar
        */

        .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: 1rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
        }

        .navbar .navbar-toggler {
        top: .25rem;
        right: 1rem;
        }

        .navbar .form-control {
        padding: .75rem 1rem;
        border-width: 0;
        border-radius: 0;
        }

        .form-control-dark {
        color: #fff;
        background-color: rgba(255, 255, 255, .1);
        border-color: rgba(255, 255, 255, .1);
        }

        .form-control-dark:focus {
        border-color: transparent;
        box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
        }
    </style>
</head>
<body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Student Portal V1.2</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="/logout">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Dashboard
            </a>
          </li>
        </ul>
        <hr>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Services</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
            </a>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="/requests">
                    Requests
                </a>
            </li>
        </ul>
        <hr style="width: 80%;margin-left:5%;">
        @if (session('isAdmin') === true)
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
          </a>
        </h6>
        
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="/administrator/fields">
                  Fields
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/administrator/students">
                    Students
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/administrator/agents">
                    Agents
                </a>
            </li>
        </ul>
        <hr style="width: 80%;margin-left:5%;">
        @endif
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@yield('title')</h1>
            <!-- <div class="btn-toolbar mb-2 mb-md-0">
            </div> -->
        </div>


      <!-- Success Message Box -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <!-- A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. -->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
      <!-- Failure Message Box -->
      @if (session('warning'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('warning') }}
            <!-- A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. -->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

        <!-- Main Centeral Container  -->
        <div class="maincontainer my-4 w-100 chartjs-render-monitor" id="myChart" style="display: block; ">
            
            <!-- Requests Container -->
            <!-- <hr> -->
            <!-- Fields Container -->
            <!-- <hr> -->
            <!-- Students Container -->
            <!-- <hr> -->
            <!-- Agents Container -->
            @yield('content')

        </div>
    
    <!-- Rows of Item (Requests/Students/Agents List) in the Bottom of Container -->
    @isset($columns , $rows)
        <hr>
        <h2>@yield('content_records_title')</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                
                    <thead>
                        <tr>
                            @foreach($columns as $column)
                                <th scope="col">{{$column}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                      <tr>
                        @foreach($row as $col)
                          <td>{{$col}}</td>
                        @endforeach
                      </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    @endisset
    </main>
  </div>
</div>
     
</body></html>
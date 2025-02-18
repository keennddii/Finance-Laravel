<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <label class="switch">
        <input type="checkbox" id="toggle" onclick="myFunction()">
        <span class="slider round">
            <i class="bi bi-moon-stars-fill" id="sun-icon"></i>
            <i class="bi bi-sun-fill" id="moon-icon"></i>
        </span>
      </label>
    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->
    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

    <!--  DITO MAGSSTART ANG NOTIFICATION -->
  <li class="nav-item dropdown">
  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
    <i class="bi bi-bell"></i>
    <span class="badge bg-primary badge-number">4</span> 
  </a>

  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
    <li class="dropdown-header">
      You have 4 new notifications
      <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View All</span></a>
    </li>
    <li><hr class="dropdown-divider"></li>

    <!-- Example notification 1 -->
    <li class="notification-item">
      <a class="dropdown-item d-flex align-items-center" href="notification-link-1.html">
        <i class="bi bi-exclamation-circle text-warning"></i>
        <div>
          <h4>New Alert</h4>
          <p>This is a new alert notification</p>
          <p>5 minutes ago</p>
        </div>
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>

    <!-- Example notification 2 -->
    <li class="notification-item">
      <a class="dropdown-item d-flex align-items-center" href="notification-link-2.html">
        <i class="bi bi-envelope text-info"></i>
        <div>
          <h4>New Message</h4>
          <p>You have a new message from John Doe</p>
          <p>10 minutes ago</p>
        </div>
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>

    <!-- Example notification 3 -->
    <li class="notification-item">
      <a class="dropdown-item d-flex align-items-center" href="notification-link-3.html">
        <i class="bi bi-check-circle text-success"></i>
        <div>
          <h4>Task Completed</h4>
          <p>Your task "Project ABC" is completed</p>
          <p>30 minutes ago</p>
        </div>
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>

    <!-- Example notification 4 -->
    <li class="notification-item">
      <a class="dropdown-item d-flex align-items-center" href="notification-link-4.html">
        <i class="bi bi-info-circle text-primary"></i>
        <div>
          <h4>System Update</h4>
          <p>A new system update is available</p>
          <p>1 hour ago</p>
        </div>
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>

    <li class="dropdown-footer">
      <a href="#">Show all notifications</a>
    </li>
  </ul>
  </li><!-- LAST CODE NUNG NOTIFICATION -->


<!-- DITO NAKALAGAY YUNG SA PROFILE NUNG NAKALOGIN -->
        <li class="nav-item dropdown pe-3">
      
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
            <h6></h6>
              <span> </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
            <a class="dropdown-item d-flex align-items-center" href="#" id="logoutBtn">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li>

        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Log Out</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to log out?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <form action="{{ route('logout') }}" method="POST" id="logoutForm" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Log Out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
          
  </li><!-- LAST LINE NUNG PROFILE  -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <div class="flex items-center w-full p-1 pl-6" style="display: flex; align-items: center; padding: 4px; width: 40px; background-color: transparent; height: 4rem;">
        <div class="flex items-center justify-center" style="display: flex; align-items: center; justify-content: center; auto;">
            <img src="assets/img/jeybidi.png" alt="Logo" style="width: 120px; height: auto; margin: 40px;">
        </div>
      </div>
    </div>

    <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-house-door"></i>
          <span>Homepage</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <hr class="sidebar-divider">

      <li class="nav-heading">MODULES</li>

<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#disbursement-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-layout-text-window-reverse"></i><span>Disbursement</span><i class="bi bi-arrow-bar-down ms-auto"></i>
  </a>
  <ul id="disbursement-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
    <li>
      <a href="dPayrollManagement.php">
        <i class="bi bi-circle-fill"></i><span>Payroll Management</span>
      </a>
    </li>
    <li>
      <a href="dPayrollReporting.php">
        <i class="bi bi-circle-fill"></i><span>Payroll Reporting</span>
      </a>
    </li>  
  </ul>
</li><!-- End Disbursement Nav -->


<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#budget-management-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-currency-dollar"></i><span>Budget Management</span><i class="bi bi-arrow-bar-down ms-auto"></i>
  </a>
  <ul id="budget-management-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
  <li>
      <a href="bExpense.php">
        <i class="bi bi-circle-fill"></i><span>Expense Management</span>
      </a>
    </li>
    <li>
      <a href="bTaxManagement.php">
        <i class="bi bi-circle-fill"></i><span>Tax Management</span>
      </a>
    </li>
    <li>
      <a href="bAuditCompliance.php">
        <i class="bi bi-circle-fill"></i><span>Audit & Compliance</span>
        </a>
    </li>
    <li>
      
      <a href="bCashFlow.php">
        <i class="bi bi-circle-fill"></i><span>Cash Flow Management</span>
      </a>
    </li>
  </ul>
</li>
<!-- End Budget Management Nav -->

<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#collection-nav" data-bs-toggle="collapse" href="#">
    <i class="ri-draft-line"></i><span>Collection</span><i class="bi bi-arrow-bar-down ms-auto"></i>
  </a>
  <ul id="collection-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
    <li>
      <a href="cBookingRevenue.php">
        <i class="bi bi-circle-fill"></i><span>Booking & Revenue Management</span>
      </a>
    </li>
  </ul>
</li><!-- End Collection Nav -->

<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#general-ledger-nav" data-bs-toggle="collapse" href="#">
    <i class="ri-contacts-book-2-line"></i><span>General Ledger</span><i class="bi bi-arrow-bar-down ms-auto"></i>
  </a>
  <ul id="general-ledger-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
  <li>
      <a href="gGeneralLedger.php">
        <i class="bi bi-circle-fill"></i><span>General Ledger Management</span>
      </a>
    </li>
    <li>
      <a href="gBookingRevenue.php">
        <i class="bi bi-circle-fill"></i><span>Booking  & Revenue Management</span>
      </a>
    </li>
    <li>
      <a href="gFinancialReportingAnalysis.php">
        <i class="bi bi-circle-fill"></i><span>Financial Reporting & Analysis</span>
      </a>
    </li>
    <li>
      <a href="gFinancialAnalytics.php">
        <i class="bi bi-circle-fill"></i><span>Financial Analytics</span>
      </a>
    </li>
  </ul>
</li><!-- End General Ledger Nav -->
<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#account-payable-nav" data-bs-toggle="collapse" href="#">
    <i class="ri-secure-payment-line"></i><span>Account Payable/Receivable</span><i class="bi bi-arrow-bar-down ms-auto"></i>
  </a>
  <ul id="account-payable-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
    <li>
      <a href="aprInvoiceBilling.php">
        <i class="bi bi-circle-fill"></i><span>Invoice & Billing Management</span>
      </a>
    </li>
  </ul>
</li><!-- End Account Payable/Receivable Nav -->

      <hr class="sidebar-divider">  
    </ul>

  </aside><!-- End Sidebar-->
  <main id="main" class="main">

<div class="pagetitle">
  <h1>Homepage</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-8">
                <div class="row">

                  <!-- Sales Card -->
                  <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">

                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>

                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Sales <span>| Today</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart"></i>
                          </div>
                          <div class="ps-3">
                            <h6>145</h6>
                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Sales Card -->

                  <!-- Revenue Card -->
                  <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">

                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>

                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Revenue <span>| This Month</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>$3,264</h6>
                            <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Revenue Card --> 

  </div>
</section>

</main>
<!-- End #main -->
 
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; :P
    </div>
    
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/customjs.js') }}"></script>
    
</html>

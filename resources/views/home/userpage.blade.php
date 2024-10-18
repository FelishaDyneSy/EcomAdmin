<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">


   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans&display=swap" rel="stylesheet">
     <!-- Chart.js -->
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 
    <link rel="icon" href="home/documentation/img/logo2.png" type="image/x-icon">
   
    <title>Far East Cafe</title> 
    @livewireStyles
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg  fixed-top">
                <a class="navbar-brand">FAR EAST CAFE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="home/assets/images/avatar2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="home/assets/images/avatar3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">
John Abraham</span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="home/assets/images/avatar4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="home/assets/images/avatar5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="home/assets/images/avatar1.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="/logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar col-md d-none d-md-block">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="/" ><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                                <div id="submenu-1" class="collapse submenu" style="">

                                </div>
                            </li>
                         
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-users"></i>Employee Data</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/data-tables">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-book"></i>Documents</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Human Resource</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Finance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Logistic</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-envelope"></i>Messages</a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Compose</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Inbox</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Archive</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Sent</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Trash</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" ><i class="fas fa-fw fa-university"></i>Facility</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" ><i class="fas fa-fw fa-folder"></i>Visitor Log</a>
                                
                            </li>


                            <li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-fw fa-file"></i> Pages </a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
    
                                        <li class="nav-item">
                                            <a class="nav-link" href="/logins">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/404-page.html">404 page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/sign-up">Sign up Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/forgot-passwords">Forgot Password</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11"><i class="fas fa-fw fa-inbox"></i>Account</a>
                                <div id="submenu-11" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/inbox">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/email-details">Email Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/message-chat">Message Chat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           
                            
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Admin Dashboard </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <!-- Dashboard Content -->


                   
                        <!-- Vertically centered scrollable modal -->

                    </div>
                    
                    <livewire:home.userpage />
                    {{-- <div class="container">
                        <div class="dashboard-stats">
                          <div class="stat-card">
                            <h3>8,282</h3>
                            <p>New Users</p>
                          </div>
                          <div class="stat-card">
                            <h3>200,521</h3>
                            <p>Total Orders</p>
                          </div>
                          <div class="stat-card">
                            <h3>215,542</h3>
                            <p>Available Products</p>
                          </div>
                        </div>
                      </div>
                    
                      <!-- User Table -->
                      <div class="container">
                        <div class="d-flex justify-content-end my-2">
                            <button type="button"  class="btn btn-outline-custom">add</button>
                        </div>
                        <div class="table-container">
                          <div class="table-responsive">
                            <table class="table table-hover">
                              <thead class="table-light">
                                <tr>
                                  <th>Name</th>
                                  <th>Title</th>
                                  <th>Status</th>
                                  <th>Role</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- Sample data rows -->
                                <tr>
                                  <td>
                                    <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Avatar">
                                    John Doe
                                    <br><small class="text-muted">john@example.com</small>
                                  </td>
                                  <td>Software Engineer<br><small class="text-muted">Web dev</small></td>
                                  <td><span class="status-active">Active</span></td>
                                  <td>Owner</td>
                                  <td><a href="#" class="edit-link">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>
                                    <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Avatar">
                                    Jane Smith
                                    <br><small class="text-muted">jane@example.com</small>
                                  </td>
                                  <td>UI/UX Designer<br><small class="text-muted">Web dev</small></td>
                                  <td><span class="status-active">Active</span></td>
                                  <td>Admin</td>
                                  <td><a href="#" class="edit-link">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>
                                    <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Avatar">
                                    Alan Walker
                                    <br><small class="text-muted">alan@example.com</small>
                                  </td>
                                  <td>Project Manager<br><small class="text-muted">Management</small></td>
                                  <td><span class="status-active">Active</span></td>
                                  <td>Owner</td>
                                  <td><a href="#" class="edit-link">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>
                                    <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Avatar">
                                    Susan Lee
                                    <br><small class="text-muted">susan@example.com</small>
                                  </td>
                                  <td>Frontend Developer<br><small class="text-muted">Web dev</small></td>
                                  <td><span class="status-active">Active</span></td>
                                  <td>Owner</td>
                                  <td><a href="#" class="edit-link">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>
                                    <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Avatar">
                                    Mark Wilson
                                    <br><small class="text-muted">mark@example.com</small>
                                  </td>
                                  <td>Backend Developer<br><small class="text-muted">Web dev</small></td>
                                  <td><span class="status-active">Active</span></td>
                                  <td>Owner</td>
                                  <td><a href="#" class="edit-link">Edit</a></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div> --}}

                    <div class="container mt-2">
                        <div class="row">
                            <div class="col-md-4" style="height: 233px";>
                                <div class="card">
                                    <div class="card-header1 text-center">
                                        <h5>Daily Sales</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="salesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="height: 233px";> 
                                <div class="card">
                                    <div class="card-header1 text-center">
                                        <h5>Monthly Orders</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="ordersChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header1 text-center">
                                        <h5>Products Sold</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="productsChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--calendar-->
                    <div class="container mt-5">
                        <h6 class="text-center">Calendar and To-Do List</h6>
                    
                        <div class="row mt-4">
                            <!-- Calendar Section -->
                            <div class="col-lg-4 col-md-5" style= "max-width: 400px; ">
                                <div class="card">
                                    <div class="card-header2 text-white">
                                        October 2024 Calendar
                                    </div>
                                    <div class="card-body">
                                        <table class="table calendar">
                                            <thead>
                                                <tr>
                                                    <th>Sun</th>
                                                    <th>Mon</th>
                                                    <th>Tue</th>
                                                    <th>Wed</th>
                                                    <th>Thu</th>
                                                    <th>Fri</th>
                                                    <th>Sat</th>
                                                </tr>
                                            </thead>
                                            <tbody class="days">
                                                <!-- Example week row -->
                                                <tr>
                                                    <td>29</td>
                                                    <td>30</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>3</td>
                                                    <td>4</td>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>7</td>
                                                    <td>8</td>
                                                    <td>9</td>
                                                    <td class="today">10</td>
                                                    <td>11</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>14</td>
                                                    <td>15</td>
                                                    <td>16</td>
                                                    <td>17</td>
                                                    <td>18</td>
                                                    <td>19</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>21</td>
                                                    <td>22</td>
                                                    <td>23</td>
                                                    <td>24</td>
                                                    <td>25</td>
                                                    <td>26</td>
                                                    
                                                </tr>
                                                <!-- Add more weeks as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    
                      
                            <!-- To-Do List Section -->
                            <div class="col-lg-4 col-md-4"style= "max-width: 400px; ">
                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        To-Do List
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group todo-list">
                                            <li class="list-group-item todo-list-item">
                                                <span>Meeting with team</span>
                                                <input type="checkbox">
                                            </li>
                                            <li class="list-group-item todo-list-item">
                                                <span>Submit report</span>
                                                <input type="checkbox">
                                            </li>
                                            <li class="list-group-item todo-list-item">
                                                <span>Client call</span>
                                                <input type="checkbox">
                                            </li>
                                            <li class="list-group-item todo-list-item">
                                                <span>Lunch with manager</span>
                                                <input type="checkbox">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--FEEDS-->





            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- Footer -->
            <footer class="text-center mt-4 py-4">
                <p>© 2024 Far East Café | Coffee Shop Dashboard</p>
            </footer>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->

    <!-- main js -->
    <script src="home/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="home/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="home/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="home/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="home/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="home/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="home/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="home/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="home/assets/libs/js/dashboard-ecommerce.js"></script>
    
    {{-- <!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}


    @livewireScripts
<!--Chartjs -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sales Chart
            var ctxSales = document.getElementById('salesChart').getContext('2d');
            var salesChart = new Chart(ctxSales, {
                type: 'line',
                data: {
                    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    datasets: [{
                        label: 'Sales ($)',
                        data: [120, 150, 180, 200, 170, 220, 240],
                        backgroundColor: 'rgba(111, 78, 55, 0.2)',
                        borderColor: '#6f4e37',
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        
            // Orders Chart
            var ctxOrders = document.getElementById('ordersChart').getContext('2d');
            var ordersChart = new Chart(ctxOrders, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                        label: 'Orders',
                        data: [300, 400, 320, 450, 500, 600],
                        backgroundColor: '#6f4e37',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        
            // Products Sold Chart
            var ctxProducts = document.getElementById('productsChart').getContext('2d');
            var productsChart = new Chart(ctxProducts, {
                type: 'doughnut',
                data: {
                    labels: ['Espresso', 'Latte', 'Cappuccino', 'Mocha', 'Americano'],
                    datasets: [{
                        label: 'Products Sold',
                        data: [120, 150, 100, 80, 50],
                        backgroundColor: ['#6f4e37', '#d7b5a5', '#b08e6a', '#c7976e', '#dba373'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        });
        </script>
        <!--END CHARTJS-->
        
</body>



    
</html>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Pets Portal - Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="/assets/images/kaiadmin/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts and icons -->
    <script src="/assets/js/dashboard_js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["/assets/css/dashboard_css/fonts.min.css"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="/assets/css/dashboard_css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/dashboard_css/plugins.min.css" />
    <link rel="stylesheet" href="/assets/css/dashboard_css/kaiadmin.min.css" />
    <!-- <link rel="stylesheet" href="//assets/css/dashboard_css/"> -->

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="/assets/css/dashboard_css/demo.css" />

</head>

<body>
    <div class="wrapper">

    <!-- Including sidebar and navbar -->
        <?php
        include("common/sidebar.php");
        ?>

        <!-- Fetching data to show the count -->
         <?php

        $users = "SELECT * FROM users WHERE role_id = 2";
        $user_result = mysqli_query($conn, $users);



?>  

        <div class="container">
            <div class="page-inner">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    <div>
                        <h3 class="fw-bold mb-3">Dashboard</h3>
                        <!-- <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6> -->
                    </div>
                    <!-- <div class="ms-md-auto py-2 py-md-0">
                        <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                        <a href="#" class="btn btn-primary btn-round">Add Customer</a>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Pet Owners</p>
                                            <h4 class="card-title"><?php echo mysqli_num_rows($user_result)?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-info bubble-shadow-small">
                                        <i class="fa-solid fa-paw"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Pets</p>
                                            <h4 class="card-title">1303</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-success bubble-shadow-small">
                                            <i class="fas fa-luggage-cart"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Adoptions</p>
                                            <h4 class="card-title">$ 1,345</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                            <i class="far fa-check-circle"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Order</p>
                                            <h4 class="card-title">576</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-round">
                            <div class="card-header">
                                <div class="card-head-row card-tools-still-right">
                                    <h4 class="card-title">Users Geolocation</h4>
                                    <div class="card-tools">
                                        <button class="btn btn-icon btn-link btn-primary btn-xs">
                                            <span class="fa fa-angle-down"></span>
                                        </button>
                                        <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card">
                                            <span class="fa fa-sync-alt"></span>
                                        </button>
                                        <button class="btn btn-icon btn-link btn-primary btn-xs">
                                            <span class="fa fa-times"></span>
                                        </button>
                                    </div>
                                </div>
                                <p class="card-category">
                                    Map of the distribution of users around the world
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="table-responsive table-hover table-sales">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="assets/images/flags/id.png" alt="indonesia" />
                                                            </div>
                                                        </td>
                                                        <td>Indonesia</td>
                                                        <td class="text-end">2.320</td>
                                                        <td class="text-end">42.18%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="assets/images/flags/us.png"
                                                                    alt="united states" />
                                                            </div>
                                                        </td>
                                                        <td>USA</td>
                                                        <td class="text-end">240</td>
                                                        <td class="text-end">4.36%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="assets/images/flags/au.png" alt="australia" />
                                                            </div>
                                                        </td>
                                                        <td>Australia</td>
                                                        <td class="text-end">119</td>
                                                        <td class="text-end">2.16%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="assets/images/flags/ru.png" alt="russia" />
                                                            </div>
                                                        </td>
                                                        <td>Russia</td>
                                                        <td class="text-end">1.081</td>
                                                        <td class="text-end">19.65%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="assets/images/flags/cn.png" alt="china" />
                                                            </div>
                                                        </td>
                                                        <td>China</td>
                                                        <td class="text-end">1.100</td>
                                                        <td class="text-end">20%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="assets/images/flags/br.png" alt="brazil" />
                                                            </div>
                                                        </td>
                                                        <td>Brasil</td>
                                                        <td class="text-end">640</td>
                                                        <td class="text-end">11.63%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mapcontainer">
                                            <div id="world-map" class="w-100" style="height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-round">
                            <div class="card-body">
                                <div class="card-head-row card-tools-still-right">
                                    <div class="card-title">New Customers</div>
                                    <div class="card-tools">
                                        <div class="dropdown">
                                            <button class="btn btn-icon btn-clean me-0" type="button"
                                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-list py-4">
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="assets/images/jm_denis.jpg" alt="..."
                                                class="avatar-img rounded-circle" />
                                        </div>
                                        <div class="info-user ms-3">
                                            <div class="username">Jimmy Denis</div>
                                            <div class="status">Graphic Designer</div>
                                        </div>
                                        <button class="btn btn-icon btn-link op-8 me-1">
                                            <i class="far fa-envelope"></i>
                                        </button>
                                        <button class="btn btn-icon btn-link btn-danger op-8">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <span class="avatar-title rounded-circle border border-white">CF</span>
                                        </div>
                                        <div class="info-user ms-3">
                                            <div class="username">Chandra Felix</div>
                                            <div class="status">Sales Promotion</div>
                                        </div>
                                        <button class="btn btn-icon btn-link op-8 me-1">
                                            <i class="far fa-envelope"></i>
                                        </button>
                                        <button class="btn btn-icon btn-link btn-danger op-8">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="assets/images/talha.jpg" alt="..."
                                                class="avatar-img rounded-circle" />
                                        </div>
                                        <div class="info-user ms-3">
                                            <div class="username">Talha</div>
                                            <div class="status">Front End Designer</div>
                                        </div>
                                        <button class="btn btn-icon btn-link op-8 me-1">
                                            <i class="far fa-envelope"></i>
                                        </button>
                                        <button class="btn btn-icon btn-link btn-danger op-8">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="assets/images/chadengle.jpg" alt="..."
                                                class="avatar-img rounded-circle" />
                                        </div>
                                        <div class="info-user ms-3">
                                            <div class="username">Chad</div>
                                            <div class="status">CEO Zeleaf</div>
                                        </div>
                                        <button class="btn btn-icon btn-link op-8 me-1">
                                            <i class="far fa-envelope"></i>
                                        </button>
                                        <button class="btn btn-icon btn-link btn-danger op-8">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <span
                                                class="avatar-title rounded-circle border border-white bg-primary">H</span>
                                        </div>
                                        <div class="info-user ms-3">
                                            <div class="username">Hizrian</div>
                                            <div class="status">Web Designer</div>
                                        </div>
                                        <button class="btn btn-icon btn-link op-8 me-1">
                                            <i class="far fa-envelope"></i>
                                        </button>
                                        <button class="btn btn-icon btn-link btn-danger op-8">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <span
                                                class="avatar-title rounded-circle border border-white bg-secondary">F</span>
                                        </div>
                                        <div class="info-user ms-3">
                                            <div class="username">Farrah</div>
                                            <div class="status">Marketing</div>
                                        </div>
                                        <button class="btn btn-icon btn-link op-8 me-1">
                                            <i class="far fa-envelope"></i>
                                        </button>
                                        <button class="btn btn-icon btn-link btn-danger op-8">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-round">
                            <div class="card-header">
                                <div class="card-head-row card-tools-still-right">
                                    <div class="card-title">Transaction History</div>
                                    <div class="card-tools">
                                        <div class="dropdown">
                                            <button class="btn btn-icon btn-clean me-0" type="button"
                                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <!-- Projects table -->
                                    <table class="table align-items-center mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Payment Number</th>
                                                <th scope="col" class="text-end">Date & Time</th>
                                                <th scope="col" class="text-end">Amount</th>
                                                <th scope="col" class="text-end">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                    Payment from #10231
                                                </th>
                                                <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                                <td class="text-end">$250.00</td>
                                                <td class="text-end">
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                    Payment from #10231
                                                </th>
                                                <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                                <td class="text-end">$250.00</td>
                                                <td class="text-end">
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                    Payment from #10231
                                                </th>
                                                <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                                <td class="text-end">$250.00</td>
                                                <td class="text-end">
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                    Payment from #10231
                                                </th>
                                                <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                                <td class="text-end">$250.00</td>
                                                <td class="text-end">
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                    Payment from #10231
                                                </th>
                                                <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                                <td class="text-end">$250.00</td>
                                                <td class="text-end">
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                    Payment from #10231
                                                </th>
                                                <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                                <td class="text-end">$250.00</td>
                                                <td class="text-end">
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                    Payment from #10231
                                                </th>
                                                <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                                <td class="text-end">$250.00</td>
                                                <td class="text-end">
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.themekita.com">
                                ThemeKita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Help </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Licenses </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    2024, made with <i class="fa fa-heart heart text-danger"></i> by
                    <a href="http://www.themekita.com">ThemeKita</a>
                </div>
                <div>
                    Distributed by
                    <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
                </div>
            </div>
        </footer>
    </div>

    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>Logo Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="selected changeLogoHeaderColor" data-color="dark"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                        <br />
                        <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Navbar Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                        <button type="button" class="changeTopBarColor" data-color="blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="green"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange"></button>
                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                        <button type="button" class="selected changeTopBarColor" data-color="white"></button>
                        <br />
                        <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                        <button type="button" class="changeTopBarColor" data-color="blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="green2"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                        <button type="button" class="changeTopBarColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Sidebar</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeSideBarColor" data-color="white"></button>
                        <button type="button" class="selected changeSideBarColor" data-color="dark"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="icon-settings"></i>
        </div>
    </div>
    <!-- End Custom template -->
    </div>

</body>

</html>
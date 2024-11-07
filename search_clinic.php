<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Pets Portal - Clinic Detail</title>
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

        if ($row['role_id'] == 2) {

            ?>

            <div class="container">
                <div class="page-inner">



                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-content-center">
                                        <div class="form-group ms-5 col-md-3 align-content-center">
                                            <h4>Search Clinic Location :</h4>

                                        </div>
                                        <div class="form-group col-md-4">

                                            <nav
                                                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <spam class="btn btn-search pe-1">
                                                            <i class="fa fa-search search-icon"></i>
                                                        </spam>
                                                    </div>
                                                    <input type="text" id="live-search" placeholder="Enter Your Location"
                                                        class="form-control" />
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="row ">
                                <div class="card-group justify-content-around">
                                    <?php
                                    $sql = "SELECT * FROM clinic WHERE status = 'Active' AND approval = 'Approved';";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $doctor_id = $row['doctor_id'];
                                            $doctor_data = "SELECT * FROM doctor WHERE doctor_id = $doctor_id;";
                                            $doctor_result = mysqli_query($conn, $doctor_data);
                                            $doctor_row = mysqli_fetch_assoc($doctor_result);
                                            ?>
                                            <div class="col-md-4 mb-4">
                                                <div class="card shadow-sm">
                                                    <div class="card-header d-flex flex-column justify-content-center">
                                                        <img src="assets/images/doctors/<?php echo $doctor_row['profile'] ?>"
                                                            class="img-fluid rounded-circle w-50 align-self-center "
                                                            alt="Clinic's Doctor Image">
                                                        <h5 class="card-title text-center mt-2"><?php echo $doctor_row['name'] ?>
                                                        </h5>
                                                    </div>
                                                    <div class="card-body ">
                                                        <h5 class="card-title"><?php echo $row['name'] ?></h5>
                                                        <p class="card-text"><i
                                                                class="fas fa-map-marker-alt ms-1 me-2"></i><?php echo $row['address'] ?>
                                                        </p>
                                                        <p class="card-text"><b>Pets :
                                                            </b><?php echo $doctor_row['specialization'] ?></p>
                                                        <p class="card-text"><strong>Open : </strong><?php echo $row['open_days'] ?>
                                                        </p>
                                                        <p> <strong>Hours :</strong> <?php
                                                        $date = date_create($row['open_time']);
                                                        $open_time = date_format($date, "h:i A");

                                                        $date = date_create($row['close_time']);
                                                        $close_time = date_format($date, "h:i A");

                                                        echo "$open_time - $close_time"
                                                            ?>
                                                        </p>
                                                        <p><b>Contact No. : </b><?php echo $row['phone'] ?></p>
                                                        <a href="#" class="btn btn-primary btn-block">View Profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
        } else {
            echo "You are not authorized to view this page!";
        }
        ?>

                </div>
            </div>

        </div>
        <?php
        include("common/footer.php");

        ?>
    </div>
    <script src="assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/search_clinic_js/script.js"></script>
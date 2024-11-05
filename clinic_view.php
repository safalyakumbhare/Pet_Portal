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
        include("common/doctor-sidebar.php");

        if ($row['role_id'] == 3) {


            if (isset($_GET['clinic_id'])) {
                $clinic_id = $_GET['clinic_id'];


                $clinic_data = "SELECT * FROM clinic WHERE clinic_id='$clinic_id';";
                $clinic_result = mysqli_query($conn, $clinic_data);

                if (mysqli_num_rows($clinic_result)) {


                    $clinic_row = mysqli_fetch_assoc($clinic_result);
                    $doctor_id = $clinic_row['doctor_id'];

                    $doctor_data = "SELECT * FROM doctor WHERE doctor_id='$doctor_id';";
                    $doctor_result = mysqli_query($conn, $doctor_data);
                    $doctor_row = mysqli_fetch_assoc($doctor_result);
                    ?>

                    <div class="container">
                        <div class="page-inner">
                            <div class="page-header">
                                <h3 class="fw-bold mb-3">Clinic and Doctors Details</h3>

                            </div>

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header rounded-top-3" style="background-color: lightgray;">
                                            <div class="card-title">Clinic Information</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h3>Clinic Name :</h3>
                                                        <h4 class="fw-light"><?php echo $clinic_row['name'] ?></h4>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h3>Address :</h3>
                                                        <h4 class="fw-light"><?php echo $clinic_row['address'] ?></h4>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h3>Phone Number :</h3>
                                                        <h4 class="fw-light"><?php echo $clinic_row['phone'] ?></h4>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h3>Timing :</h3>

                                                        <?php
                                                        $date = date_create($clinic_row['open_time']);
                                                        $open_time_12_hours = date_format($date, "h:i A");

                                                        $date = date_create($clinic_row['close_time']);
                                                        $close_time_12_hours = date_format($date, "h:i A");

                                                        echo "<h4 class='fw-light'>$open_time_12_hours To $close_time_12_hours</h4>";
                                                        ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h3>Days Open :</h3>
                                                        <h4 class='fw-light'><?php echo $clinic_row['open_days'] ?></h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h3>Days Close :</h3>
                                                        <h4 class='fw-light'><?php echo $clinic_row['close_days'] ?></h4>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h3>Types of Pets : </h3>
                                                        <h4 class="fw-light"><?php echo $clinic_row['pet_type'] ?></h4>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h3>Fees :</h3>
                                                        <h4 class="fw-light"><?php echo $clinic_row['fees'] ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header rounded-top-3" style="background-color: lightgray;">
                                                <div class="card-title">Clinic Pets Protal Status</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <h3>Clinic Status :</h3>
                                                            <?php
                                                            if ($clinic_row['status'] == "Active") {
                                                                echo "<h4 class='text-success'>Active</h4>";
                                                            } else {
                                                                echo "<h4 class='text-danger'>Inactive</h4>";
                                                            }

                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <h3>Clinic Approval :</h3>
                                                            <?php
                                                            if ($clinic_row['approval'] == "Approved") {
                                                                echo "<h4 class='text-success'>Approved</h4>";
                                                            } else if ($clinic_row['approval'] == "Pending") {
                                                                echo "<h4 class='text-primary'>Pending</h4>";
                                                            } else if ($clinic_row['approval'] == "Rejected") {
                                                                echo "<h4 class='text-danger'>Rejected</h4>";
                                                            }

                                                            ?>
                                                        </div>
                                                    </div>

                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <?php
                }
            }
        }
        ?>




            </div>
            <?php
            include("common/footer.php");

            ?>
        </div>
    </div>
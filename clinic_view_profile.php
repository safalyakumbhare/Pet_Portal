<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Pets Portal - Profile Edit</title>
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

            if (isset($_GET['clinic_id'])) {

                $clinic_id = $_GET['clinic_id'];
                $sql = "SELECT * FROM clinic WHERE clinic_id = $clinic_id";
                $result = mysqli_query($conn, $sql);
                $clinic = mysqli_fetch_assoc($result);
                $doctor_id = $clinic['doctor_id'];

                $doctor_sql = "SELECT * FROM doctor WHERE doctor_id = $doctor_id";
                $doctor_result = mysqli_query($conn, $doctor_sql);
                $doctor = mysqli_fetch_assoc($doctor_result);
                ?>

                <div class="container">
                    <div class="page-inner">
                        <div class="page-header">
                            <h3 class="fw-bold mb-3">Clinic Profile</h3>
                        </div>
                        <div class="card mb-4">
                            
                            <div class="card-body text-center">
                                <img src="/assets/images/doctors/<?php echo $doctor['profile']?>" class="img-fluid rounded-circle mb-3 w-25" alt="Clinic Banner">
                                <h2 class="card-title">Happy Paws Veterinary Clinic</h2>
                                <p class="text-muted"><i class="fas fa-map-marker-alt"></i> 123 Pet Street, Petville</p>
                                <p><i class="fas fa-star text-warning"></i> 4.5 (150 Reviews)</p>
                                <button class="btn btn-primary">Contact Clinic</button>
                            </div>
                        </div>
                    </div>

                    <?php
            } else {
                ?>
                    <div class="container">
                        <h1>doctor Not Selected</h1>
                    </div>
                    <?php
            }
            ?>

                <?php
        } else {

            echo "<script>alert('You are not authorized to this page.');
           window.location.href='index.php'</script>";

        }
        ?>
        </div>
        <?php
        include("common/footer.php");

        ?>
    </div>
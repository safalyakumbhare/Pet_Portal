<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Pets Portal - Pets Detail</title>
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


        if (isset($_GET['pet_id'])) {
            // Fetching pet details from the database
            // Assuming you have a function 'getPetDetails' which returns the pet details
            $pet_id = $_GET['pet_id'];

            $pet_data = "SELECT * FROM pets WHERE pet_id=$pet_id;";
            $pet_result = mysqli_query($conn, $pet_data);
            $pet_row = mysqli_fetch_assoc($pet_result);

            $user_id = $pet_row['user_id'];
            $user_data = "SELECT * FROM users WHERE user_id=$user_id;";
            $user_result = mysqli_query($conn, $user_data);
            $user_row = mysqli_fetch_assoc($user_result);
            ?>

            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Pets Detail</h3>

                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-header rounded-top-3" style="background-color: lightgray;">
                                    <div class="card-title">Pet Image</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="assets/images/pets/<?php echo $pet_row['image'] ?>" class="img-fluid"
                                                alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header rounded-top-3" style="background-color: lightgray;">
                                    <div class="card-title">Pet Information</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 d-flex flex-column justify-content-between">
                                            <div class="form-group">
                                                <h3>Name :</h3>
                                                <h4 class="fw-light"><?php echo $pet_row['name'] ?></h4>
                                            </div>
                                            <div class="form-group">
                                                <h3 class="mt-1">Pet of :</h3>

                                                <h4 class="fw-light"><?php echo $user_row['username'] ?></h4>
                                            </div>

                                        </div>
                                        <div class="col-md-4 d-flex flex-column justify-content-between">
                                            <div class="form-group">
                                                <h3>Pet Type :</h3>
                                                <h4 class="fw-light"><?php echo $pet_row['type'] ?></h4>
                                            </div>
                                            <div class="form-group">
                                                <h3 class="mt-1">Breed :</h3>

                                                <h4 class="fw-light"><?php echo $pet_row['breed'] ?></h4>
                                            </div>

                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h3>Date of Birth :</h3>
                                                <h4 class="fw-light"><?php $date = date_create($pet_row['dob']);
                                                echo date_format($date, "d-m-Y"); ?></h4>
                                            </div>
                                            <div class="form-group">
                                                <h3 class="mt-1">Age :</h3>

                                                <h4 class="fw-light"><?php
                                                $dob = $pet_row['dob'];

                                                // Convert the birthdate into a DateTime object
                                                $birthDate = new DateTime($dob);
                                                $currentDate = new DateTime(); // Get the current date
                                            
                                                // Calculate the difference between the current date and birth date
                                                $age = $currentDate->diff($birthDate)->y;

                                                // Print the age
                                                echo  $age . " years";
                                                ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
        }
        ?>


            </div>
            <?php
            include("common/footer.php");

            ?>
        </div>
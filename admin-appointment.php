<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Pets Portal - Appointments</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="/assets/images/kaiadmin/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts and icons -->
    <script src="/assets/js/dashboard_js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["/assets/css/dashboard_css/fonts.min.css"],
            },
            active: function() {
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
        if ($row['role_id'] == 1) {


            if (isset($_GET['dlt_id'])) {
                $user_id = $_GET['dlt_id'];
                $sql = mysqli_query($conn, "DELETE FROM appointment WHERE user_id = '$user_id'");
                $dlt_pet = mysqli_query($conn, "DELETE FROM pets WHERE user_id = '$user_id'");

                if ($sql && $dlt_pet) {
                    echo "<script>alert('User Deleted');</script>";
                    echo "<script>window.location.href = 'doctor_appointments.php'</script>";
                }
            }

            if (isset($_GET['user_id'])) {
                $rid = intval($_GET['user_id']);

                $check = "SELECT * FROM appointment WHERE user_id = $rid;";

                $result = mysqli_query($conn, $check);
                $check_row = mysqli_fetch_array($result);

                $status = $check_row['status'];

                if ($status == 'Inactive') {


                    $sql = mysqli_query($conn, "UPDATE appointment SET status = 'Active' WHERE user_id = '$rid';");
                    $pet = mysqli_query($conn, "UPDATE pets SET status = 'Active' WHERE user_id = '$rid';");
                    if ($sql && $pet) {
                        echo "<script>alert('User Activated');</script>";
                        echo "<script>window.location.href = 'doctor_appointments.php'</script>";
                    } else {
                        echo "<script>alert('Failed to Activate user');</script>";
                        echo "<script>window.location.href = 'doctor_appointments.php'</script>";
                    }
                }
                if ($status == 'Active') {
                    $sql = mysqli_query($conn, "UPDATE appointment SET status = 'Inactive' WHERE user_id = '$rid'");
                    $pet = mysqli_query($conn, "UPDATE pets SET status = 'Inactive' WHERE user_id = '$rid'");
                    if ($sql && $pet) {
                        echo "<script>alert('User Deactivated');</script>";
                        echo "<script>window.location.href = 'doctor_appointments.php'</script>";
                    } else {
                        echo "<script>alert('Failed to deactivate user');</script>";
                        echo "<script>window.location.href = 'doctor_appointments.php'</script>";
                    }
                }
            }




        ?>


            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Appointments</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-body">


                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Pet's Owner Name</th>
                                                    <th>Pet Type</th>
                                                    <th>Appointment Date</th>
                                                    <th>Appointment Time</th>
                                                    <th>Clinic Name</th>
                                                    <th>Status</th>
                                                    <th>Approval</th>
                                                    <th style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                // $doctor_id = $row['doctor_id'];
                                                $user_table = "SELECT * FROM appointment";

                                                $user_result = mysqli_query($conn, $user_table);

                                                if (mysqli_num_rows($user_result)) {


                                                    while ($apt = mysqli_fetch_array($user_result)) {

                                                        $user_id = $apt['user_id'];
                                                        $doctor_id = $apt['doctor_id'];
                                                        $clinic_id = $apt['clinic_id'];

                                                        $user_result = mysqli_query($conn, "SELECT * FROM users WHERE user_id = $user_id");
                                                        $user_data = mysqli_fetch_assoc($user_result);

                                                        $clinic_result = mysqli_query($conn, "SELECT * FROM clinic WHERE clinic_id = $clinic_id;");
                                                        $clinic_data = mysqli_fetch_assoc($clinic_result);

                                                        $doctor_result = mysqli_query($conn, "SELECT * FROM doctor WHERE doctor_id = $doctor_id ");
                                                        $doctor_data = mysqli_fetch_assoc($doctor_result);

                                                        $pet_result = mysqli_query($conn, "SELECT * FROM pets WHERE user_id = $user_id");
                                                        $pet_data = mysqli_fetch_assoc($pet_result);

                                                ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $user_data['username'] ?>
                                                            </td>

                                                            <td><?php echo $pet_data['type'] ?></td>

                                                            <td><?php $date =  date_create($apt['appointment_date']);
                                                                echo date_format($date, "d-m-Y") ?></td>
                                                            <td><?php $time =  date_create($apt['appointment_time']);
                                                                echo date_format($time, "h:i A") ?></td>

                                                            <td><?php echo $clinic_data['name'] ?></td>

                                                            <td><?php
                                                                if ($apt['status'] == "active") {
                                                                    echo "<span class='text-success'>Active</span>
                                                     </td>";
                                                                } else {
                                                                    echo "<span class='text-danger'>Inactive</span>
                                                     </td>";
                                                                }

                                                                ?>
                                                          
                                                            <td>
                                                            <?php
                                                            if ($apt['approval'] == "Pending") {
                                                                echo "<span class='text-warning'>Pending</span>";
                                                            } elseif ($apt['approval'] == "Approved") {
                                                                echo "<span class='text-success'>Approved</span>";
                                                            } elseif ($apt['approval'] == "Rejected") {
                                                                echo "<span class='text-danger'>Rejected</span>";
                                                            }
                                                            ?>
                                                        </td>
                                                      
                                                            <td>
                                                                <a href="doctor_appointments.php?dlt_id=<?php echo $apt['user_id'] ?>" class="p-1" data-original-title="Remove" onclick="return remove()" data-bs-toggle="tooltip" title="Remove"><i class="fa-solid fa-trash text-danger" ></i></a>

                                                                <a href="admin_appointment_view.php?apt_id=<?php echo $apt['appointment_id']?>" data-bs-toggle="tooltip" title="View Appointment" class="p-1"><i class="fa-regular fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                <?php
                                                    }
                                                } else {
                                                    echo "<td colspan=8 class='text-center'>No  Appointments </td>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include("common/footer.php");

            ?>
        <?php

        } elseif ($row['role_id'] == 2) {

        ?>
            <div class="container">
                <h1 class="text-center text-danger">You don't have right to open this page</h1>

            </div>
            <?php
            include("common/footer.php");

            ?>
        <?php
        }
        ?>
    </div>

    <script>
        function confirmDeactivation() {
            return confirm('Do you want to Deactivate this Appointment?');
        }

        function confirmactivation() {
            return confirm('Do you want to activate this Appointment?');
        }

        function remove() {
            return confirm('Do you want to Remove this Appointment?');
        }
    </script>
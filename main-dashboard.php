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

        $pets = "SELECT * FROM pets;";
        $pet_result = mysqli_query($conn, $pets);

        ?>
        <?php
        if ($row['role_id'] == 1) {



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
                                                <h4 class="card-title"><?php echo mysqli_num_rows($user_result) ?></h4>
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
                                                <h4 class="card-title"><?php echo mysqli_num_rows($pet_result) ?></h4>
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
                        <div class="col-md-4">
                            <div class="card card-round">
                                <div class="card-body">
                                    <div class="card-head-row card-tools-still-right">
                                        <div class="card-title">New Users</div>
                                        <div class="card-tools">
                                            <!-- <div class="dropdown">
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
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="card-list py-4">

                                        <?php
                                        while ($row = mysqli_fetch_array($user_result)) {


                                            ?>
                                            <div class="item-list">
                                                <div class="avatar">
                                                    <img src="assets/images/<?php echo $row['profile'] ?>" alt="..."
                                                        class="avatar-img rounded-circle" />
                                                </div>
                                                <div class="info-user ms-3">
                                                    <div class="username"><?php echo $row['username'] ?></div>
                                                    <div class="status"><?php echo $row['address'] ?></div>
                                                </div>

                                                <a href="user_view.php?user_id=<?php echo $row['user_id']; ?>"
                                                    class="btn btn-icon btn-link btn-primary op-8">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                            </div>
                                            <?php

                                        }
                                        ?>
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
            <?php
        } elseif ($row['role_id'] == 2) {



            ?>

            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Welcome <?php echo $row['username'] ?></h3>


                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Your Pets</h4>
                                    <a href="add_pet.php" class="btn btn-primary btn-round ms-auto">
                                        <i class="fa fa-plus"></i>
                                        Add Pets
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">

                                <?php
                                $user_id = $row['user_id'];
                                $pet = "SELECT * FROM pets WHERE user_id = $user_id;";

                                $pet_result = mysqli_query($conn, $pet);

                                if (mysqli_num_rows($pet_result) > 0) {

                                    while ($pet_row = mysqli_fetch_assoc($pet_result)) {
                                        ?>
                                        <div class="table-responsive">
                                            <table id="add-row" class="display table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Photo</th>
                                                        <th>Name</th>
                                                        <th>Breed</th>
                                                        <th>Gender</th>
                                                        <th style="width: 10%" class="text-center">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-xxl">
                                                                <img src="assets/images/pets/<?php echo $pet_row['image']; ?>"
                                                                    class="avatar-img rounded-circle" alt="no image found">
                                                            </div>
                                                        </td>
                                                        <td><?php echo $pet_row['name'] ?></td>
                                                        <td><?php echo $pet_row['breed'] ?></td>
                                                        <td><?php echo $pet_row['gender'] ?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <a href="#" data-bs-toggle="tooltip" title="Edit"
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Task">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a href="#" data-bs-toggle="tooltip" title="Remove"
                                                                    class="btn btn-link btn-danger" data-original-title="Remove">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </a>
                                                                <a href="pets_detail.php?pet_id=<?php echo $pet_row['pet_id']?>" data-bs-toggle="tooltip" title="View details"
                                                                    class="btn btn-link btn-success" data-original-title="Remove">
                                                                    <i class="fa-regular fa-eye"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <?php
                                    }
                                } else {
                                    ?>
                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover">
                                            <!-- <thead>
                                                <tr>
                                                    <th>Photo</th>
                                                    <th>Name</th>
                                                    <th>Breed</th>
                                                    <th>Gender</th>
                                                    <th style="width: 10%">Action</th>
                                                </tr>
                                            </thead> -->

                                            <tbody>
                                                <tr>
                                                    <td colspan="5" class="text-center">No Pet Found</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>


                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php

        }
        ?>
        <?php
        include("common/footer.php");

        ?>
    </div>



</body>

</html>
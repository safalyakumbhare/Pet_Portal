<?php
include("common/connection.php");

if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $query = "SELECT * FROM clinic WHERE address LIKE '%$input%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result)) {
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
                            class="img-fluid rounded-circle w-50 align-self-center " alt="Clinic's Doctor Image">
                        <h5 class="card-title text-center mt-2"><?php echo $doctor_row['name'] ?>
                        </h5>
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        <p class="card-text"><i class="fas fa-map-marker-alt ms-1 me-2"></i><?php echo $row['address'] ?>
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
    } else {
        echo "<h1>No Clinic Found in this Location</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Select Role</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body,
      html {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
      }
      .role-selection {
        text-align: center;
      }
      .circle-button {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px;
        font-size: 1.2rem;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
      }
      .circle-button.user {
        background-color: #007bff;
      }
      .circle-button.user:hover {
        background-color: #0056b3;
      }
      .circle-button.doctor {
        background-color: #28a745;
      }
      .circle-button.doctor:hover {
        background-color: #1e7e34;
      }
    </style>
  </head>
  <body>
    <div class="role-selection">
      <h2>Select Your Role</h2>
      <div class="d-flex justify-content-center">
        <a href="user_registration.php" class="circle-button user"> User </a>
        <a href="doctor_registration.php" class="circle-button doctor">
          Doctor
        </a>
      </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>

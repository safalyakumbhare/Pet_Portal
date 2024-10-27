<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
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

    <?php
    include("common/sidebar.php");

    ?>
    <div class="container">
      <div class="page-inner">
        <div class="page-header">
          <h3 class="fw-bold mb-3">Pet Registration</h3>
         
        </div>
        <div class="row">
          <div class="col-md-12">



            <div class="card">
              <div class="card-header">
                <div class="card-title">Pet Information</div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="petname">Pet Name</label>
                      <input type="text" class="form-control" id="petname" name="petname"
                        placeholder="Enter Your Pet Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="species">Pet Species</label>
                      <select name="species" onchange="EnableDisableTextBox(this)" class="form-select" id="ddlModels">
                        <option value="">Select Species</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="bird">Bird</option>
                        <option value="reptile">Reptile</option>
                        <option value="other">Other</option>
                      </select>

                      <input type="text" name="species" placeholder="Other" id="txtOther" class="form-control"
                        style="display: none;">
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="breed">Breed : </label>
                      <input type="text" name="breed" placeholder="Enter Pet's Breed" id="breed" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="dob">Date of Birth :</label>
                      <input type="date" name="dob" id="dob" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Gender</label><br />
                      <div class="d-flex">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="male" name="gender" id="gender" />
                          <label class="form-check-label" for="male">
                            Male
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" id="gender" value="female" />
                          <label class="form-check-label" for="female">
                            Female
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="color">Color</label>
                      <input type="text" name="color" id="color" placeholder="Enter Pet Color" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="number" name="weight" id="weight" placeholder="Enter Pet Weight in Kgs" class="form-control">
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="image">Pet Image : </label>
                  <input type="file" name="image" id="image" class="form-control">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="medical">Medical Condition :</label>
                  <textarea name="medical" id="medical" rows="5" class="form-control"></textarea>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="notes">Additional Note :</label>
                  <textarea name="notes" id="notes" rows="5" class="form-control"></textarea>
                </div>
  
              </div>
            </div>
            <div class="card-action">
              <button class="btn btn-success">Submit</button>
              <button class="btn btn-danger">Cancel</button>
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
            <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
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
            <button type="button" class="changeTopBarColor" data-color="white"></button>
            <br />
            <button type="button" class="changeTopBarColor" data-color="dark2"></button>
            <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
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
            <button type="button" class="selected changeSideBarColor" data-color="white"></button>
            <button type="button" class="changeSideBarColor" data-color="dark"></button>
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

  <script>
    function EnableDisableTextBox(select) {
      var txtOther = document.getElementById("txtOther");
      if (select.value === "other") {
        txtOther.style.display = "block";
      } else {
        txtOther.style.display = "none";
        txtOther.value = ""; // Clear input when hidden
      }
    }
  </script>
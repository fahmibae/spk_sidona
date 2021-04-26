<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body background="img/laptop.jpeg" width="50" height="50">

  <div class="container">

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
             
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4" style="color: #E74A3B;">Form Login</h1>
                  </div>
                  <form class="user" method="POST" action="login.php">
                    
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user form-left" name="username" id="username" required oninvalid="this.setCustomValidity('Username Masih Kosong')" oninput="setCustomValidity('')" aria-describedby="username" style="font-size: 15px;padding-left:50px" placeholder="Username"><i class="fa fa-user" style="position:absolute;
                padding-left:20px;top:117px;color:#777;"></i>
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" required oninvalid="this.setCustomValidity('Username Masih Kosong')" oninput="setCustomValidity('')" id="password" style="font-size: 15px;padding-left:50px" placeholder="Password">
                      <i class="fa fa-key" style="position:absolute;
                padding-left:20px;top:182px;color:#777;"></i>
                    </div>
            
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/slider/logo2.png">
  <link rel="icon" type="image/png" href="../assets/img/slider/logo2.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- CSS Files -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="../assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Calligraffitti&family=Euphoria+Script&family=Great+Vibes&family=Sacramento&display=swap" rel="stylesheet"> 


<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Calligraffitti&family=Delius&family=Indie+Flower&family=Julius+Sans+One&family=Lemonada:wght@500&family=Monoton&family=Poiret+One&family=Rochester&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Michroma&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Belleza|Montserrat&display=swap" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Allura|League+Script|Monsieur+La+Doulaise|Pinyon+Script&display=swap" rel="stylesheet">

<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="../assets/demo/demo.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<title>Register | DNA-BISNIS</title>

</head>

    <body class="login-page sidebar-collapse">

<nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-transparent " color-on-scroll="400">
  <div class="container">
    

    <div class="navbar-translate">
      <a class="navbar-item" href="../index.php" rel="tooltip" title="Designed by Pujiermanto. Coded by Codesyariah" data-placement="bottom">
      <font style="font-family: 'Sacramento', cursive; font-size: 40px;">diena</font><font style="font-family: 'Great Vibes', cursive; font-size:25px;">''</font>
      <font style="font-family: 'Allura', cursive;font-size: 40px;">d</font><font style="font-family: 'League Script', cursive; font-size: 35px; font-weight: bold;"> N</font><font style="font-family: 'Allura', cursive;font-size: 40px;">a</font>
      </a>
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
        <span class="navbar-toggler-bar middle-bar"></span>
        <span class="navbar-toggler-bar bottom-bar"></span>
      </button>
    </div>

      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
      <ul class="navbar-nav">
      
        <li class="nav-item">
          <a class="nav-link" href="../index.html">My Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Company Profile</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Member
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="login.php">Login</a>
            <a class="dropdown-item" href="#" rel="tooltip" title="Bagaimana cara untuk join? bagaiaman cara untuk mempunyai akun dan join bersama ourcitrus" data-placement="right">Term of services(TOS)</a>
          </div>
        </li>


          <li class="nav-item">
            <form class="form-inline ml-auto" data-background-color>
            <div class="form-group has-white">
              <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        </li>
      </ul>
      </div>
  </div>
</nav>
<!-- End Navbar -->

            <?php 
            // $query = new Users(); 
            // $data = $query->query("SELECT * FROM user");
            // print_r($data);

            // echo "tolol";
            ?>

<div class="page-header clear-filter" filter-color="orange">
  <div class="page-header-image" style="background-image:url(../assets/img/slider/slider9.jpg)"></div>
  <div class="content">
    <div class="container">
      <div class="col-md-4 ml-auto mr-auto">

          <?php if(isset($_REQUEST['submit'])):?>

            <?php //var_dump($_REQUEST);die; ?>

            <?php $signUp=new Users();
              if($signUp->signup($_REQUEST, 'user', 'profile') > 0):
                $success = true;
              else:
                $error = true;
              endif;
            ?>
          <?php endif;?>

        <div class="card card-login card-plain">
          <form class="form" method="post" action="">
            <div class="card-header text-center">
                

              <font style="font-family: 'Allura', cursive;font-size: 40px;">d</font><font style="font-family: 'League Script', cursive; font-size: 35px; font-weight: bold;"> N</font><font style="font-family: 'Allura', cursive;font-size: 40px;">a</font><font style="font-family: 'Monsieur La Doulaise', cursive;font-size:35px;">''</font><font style="font-family: 'Pinyon Script', cursive; font-size:40px;">bisnis</font>
            </div>
            <div class="card-body">
              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons ui-1_email-85"></i>
                  </span>
                </div>
                <input type="text" name="email" class="form-control" placeholder="email@email.com" autofocus>
              </div>

              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons objects_key-25"></i>
                  </span>
                </div>
                <input type="password" name="password" placeholder="Password" class="form-control" />
              </div>
              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons objects_key-25"></i>
                  </span>
                </div>
                <input type="password" name="password2" placeholder="Password Confirm" class="form-control" />
              </div>
              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons text_caps-small"></i>
                  </span>
                </div>
                <input type="text" name="fullname" placeholder="Full Name" class="form-control" />
              </div>
            </div>
            <div class="card-footer text-center" style="margin-top: -2em;">
              <button type="submit" name="submit" class="btn btn-primary btn-round btn-lg btn-block">Create Account</button>
            
              <div class="pull-right">
                <h6><a href="tos.php" class="link" rel="tooltip" title="Bagaimana cara untuk join? bagaiaman cara untuk mempunyai akun dan join bersama ourcitrus" data-placement="right">Need Help?</a></h6>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

 <footer class="footer" >
    
    <div class="container">
        <div class="copyright" id="copyright">
            &copy; <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>, Designed by <a href="https://codesyariah122.github.io" target="_blank">Codesyariah</a>. Coded by <a href="https://dna-bisnis.com" target="_blank">DienaDna Tim</a>.
        </div>
    </div>
    


</footer>

            </div>
        

<!-- Plugins -->

<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker --><script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>

<!--  Google Maps Plugin    -->
<script  src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>


<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>  

<script src="../assets/dist/sweetalert2.all.min.js"></script>

  <?php if(isset($success)): ?>

    <script type="text/javascript" language="javascript">
        
        Swal.fire({
          title: 'Congratulation',
          text: "Registrasi Berhasil",
          icon: 'success',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Lanjut Login'
        }).then((result) => {
          if (result.value) {
            document.location.href="login.php";
          }
        })

    </script>

  <?php endif; ?>

    <?php if(isset($_GET['p'])): ?>
      <?php switch($_GET['p']): case 'EmailErr':?>
        <script type="text/javascript" language="javascript">        
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Format email tidak valid!',
          })
        </script>

    <?php break; case 'EmailReady': ?>

        <script type="text/javascript" language="javascript">
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Email sudah didaftarkan!',
            })
        </script>    

  <?php break; case 'ErrPass': ?> 

          <script type="text/javascript" language="javascript">
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Password konfirmasi tidak sama!',
            })
        </script>    

  <?php break; endswitch; endif; ?>


</body>
</html>
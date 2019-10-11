<!DOCTYPE html>

<html lang="en">



<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login Page Aplikasi Pengarsipan PT. Dahana </title>
	<meta charset="utf-8">

	<style type="text/css">



		html,body{

			background-image: url('<?php echo base_url() ?>dahana-1.jpg');

			background-size: cover;

			background-repeat: no-repeat;

			height: 100%;

			font-family: 'Numans', sans-serif;

			}



			.container{

			height: 100%;

			align-content: center;

			}



			.card{

			height: 370px;

			margin-top: 100px;

			margin-bottom: auto;

			width: 400px;

			background-color: rgba(0,0,0,0.5) !important;

			}



			.social_icon span{

			font-size: 60px;

			margin-left: 10px;

			color: #FFC312;

			}



			.social_icon span:hover{

			color: white;

			cursor: pointer;

			}



			.card-header h3{

			color: white;

			}



			.social_icon{

			border-radius: 5%;

			border: 2px solid white;

			position: absolute;

			right: 20px;

			top: -45px;

			}



			.input-group-prepend span{

			width: 50px;

			background-color: #FFC312;

			color: black;

			border:0 !important;

			}



			input:focus{

			outline: 0 0 0 0  !important;

			box-shadow: 0 0 0 0 !important;



			}



			.remember{

			color: white;

			}



			.remember input

			{

			width: 20px;

			height: 20px;

			margin-left: 15px;

			margin-right: 5px;

			}



			.login_btn{

			color: black;

			background-color: #FFC312;

			width: 100px;

			}



			.login_btn:hover{

			color: black;

			background-color: white;

			}



			.links{

			color: white;

			}



			.links a{

			margin-left: 4px;

				}

	</style>

<head>

	<font face="Cooper Black" ><font color='#FFFFFF'> <h1> <br> <center> <b> Aplikasi Arsip Keuangan </b> </center> </h1> </br> </font> </font>

	

</style>

   <!--Made with love by Mutiullah Samim -->

   

	<!--Bootsrap 4 CDN-->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    

    <!--Fontawesome CDN-->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



	<!--Custom styles-->

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">

</head>



<body>

<div class="container">

	<div class="d-flex justify-content-center h-100">

		<div class="card">

			<div class="card-header">

				<h3>Sign In</h3>

				<div class="d-flex justify-content-end social_icon">

					<img src="<?php echo base_url() ?>logo.jpg">

				</div>

			</div>

			<div class="card-body">

				 <form class="user" method="POST" action="<?php echo base_url('Login/proses') ?>">

                    <div class="form-group">

                      <input type="text" name="username" class="form-control form-control-user" autofocus="" placeholder="Username">

                    </div>

                    <div style="position: relative;" class="form-group">

                      <span id="eye" style="position: absolute; left: 90%; top: 38%" class="fas fa-eye"></span>

                      <span id="eyeC" style="position: absolute; left: 90%; top: 38%; display: none;" class="fas fa-eye-slash"></span>

                      <input type="password" name="password" class="form-control form-control-user" id="pwd" placeholder="Password">

                    </div>

                    <input type="submit"  class="btn btn-primary btn-user btn-block" value="Login">

                  </form>

			</div>

			<div class="card-footer">

				
			</div>

		</div>

	</div>

</div>



  <!-- Bootstrap core JavaScript-->

  <script src="<?php echo base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <!-- Core plugin JavaScript-->

  <script src="<?php echo base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



  <!-- Custom scripts for all pages-->

  <script src="<?php echo base_url('assets/') ?>js/sb-admin-2.min.js"></script>



</body>

<script type="text/javascript">

  $(document).ready(function(){

    $('#eye').hover(function(){

      $(this).attr('class', 'fas fa-eye-slash')

    }, function(){

      $(this).attr('class', 'fas fa-eye')

    })

    $('#eye').click(function(){

      $('#pwd').attr('type', 'text')

      $(this).toggle()

      $('#eyeC').toggle()

    })

    $('#eyeC').click(function(){

      $(this).toggle()

      $('#pwd').attr('type', 'password')

      $('#eye').toggle()

    })

  })

  function gagal() {

    swal("Gagal!", "Username dan password salah", "error");

  }

  <?php echo $this->session->flashdata('msg') ?>

</script>



</html>


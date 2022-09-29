<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>

<style>
		body {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Poppins", sans-serif;
		}

		.container {
			margin: 50px auto;
		}

		.body {
			position: relative;
			width: 720px;
			height: 440px;
			margin: 20px auto;
			border: 1px solid #dddd;
			border-radius: 18px;
			overflow: hidden;
			box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
		}

		.box-1 img {
            padding: 10px;
			width: 90%;
			height: 90%;
			object-fit: cover;
		}

		.box-2 {
			padding: 10px;
		}

		.box-1,
		.box-2 {
			width: 50%;
		}

		.h-1 {
			font-size: 36px;
			font-weight: 700;
		}

		.text-muted {
			font-size: 14px;
		}

		.container .box {
			width: 100px;
			height: 100px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			border: 2px solid transparent;
			text-decoration: none;
			color: #615f5fdd;
		}

		.box:active,
		.box:visited {
			border: 2px solid #ee82ee;
		}

		.box:hover {
			border: 2px solid #ee82ee;
		}

        .btn {
            width: 110px;
            height: 40px;
        }

		@media (max-width: 767px) {
			body {
				padding: 10px;
			}

			.body {
				width: 100%;
				height: 100%;
			}

			.box-1 {
				width: 100%;
			}

			.box-2 {
				width: 100%;
				height: 440px;
			}
		}
	</style>

<body>

<!-- <div class="form-box">
    <div class="form">
        <form method="post" name="login" action="owner/home-owner.php";>
        <table border ="1">
        <tr><th colspan="2">Login</th></tr>
        <tr><td>Username</td>
            <td><input type="text" name="username" size="30"></td></tr>
        <tr><td>Password</td>
            <td><input type="password" name="password" size="30"></td></tr>
        <tr><td>&nbsp</td>
            <td><input type="submit" name="login" value="Login"></td></tr>
        </table>
        </form>
    </div>
</div> -->

<div class="content-wrapper">
			<div class="row">
				<div class="col-md-12 stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="row">
                                <!-- <a href="./index.php"
                                    class="auth-link text-black text-decoration-none float-end mdi mdi-keyboard-backspace menu-icon mb-3"
                                    style="text-align: left; font-size: 18pt">
                                    Kembali
                                </a> -->
							<div class="container-fluid">
								<div class="body d-md-flex align-items-center justify-content-between">
									<div class="box-2 d-flex flex-column h-100">
										<div class="mt-5 px-5">
											<p class="mt-4 mb-5 h-1" style="text-align: center;">Log in</p>
											<form method="post" name="login" action="konfirmlogin.php">
												<div class="mb-3">
													<input type="text" class="form-control rounded-pill" name="uname" id="inUsername" placeholder="Username">
												</div>
												<div class="mb-3">
													<input type="password" class="form-control rounded-pill" name="pass" id="inPassword" placeholder="Password">
												</div>
											<div class="d-flex flex-column">
												<div class="mt-4" style="text-align: center;">
													<!-- <div class="btn btn-primary rounded-pill" name="btnLogin" type="submit" style="font-size: 16pt;">Login</div> -->
													<button class="btn btn-primary btn-user rounded-pill" type="submit" name="btnLogin">Login</button>
												</div>
											</div>
											</form>
											<!-- <div class="container-fluid d-flex justify-content-end pt-5 ms-5">
												<p class="me-1" style="font-size: 12pt;">atau </p>
											<a href="../"
												style="font-size: 12pt">
												Daftar
											</a>
											</div> -->
										</div>
									</div>
									<div class="box-1 mt-md-0 mt-5"><img src="img/logo3.png" class="" alt="" width="70" height="70"/></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php /*
    if (isset($_POST["login"])) 
        include "owner/home-owner.php"; */
?>
</body>
</html>
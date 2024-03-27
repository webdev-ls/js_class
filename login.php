
<!DOCTYPE html>
<html>
    
    <head>
        <title>My Awesome Login Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="login.css">
        <style>
            #passwordEye {
                color: red;
                position: absolute;
                right: 10px;
                top: 10px;
            }
        </style>
    </head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
    
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="loginScript.php" method="post" onsubmit="return formValidate()">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="<?php echo @$_COOKIE['username'] ?>" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input id="password" type="password" name="password" class="form-control input_pass" value="<?php echo @$_COOKIE['password'] ?>" placeholder="password">
                            <i id="passwordEye" class="fa-solid fa-eye-slash"></i>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input <?php if(isset($_COOKIE['rememberMe']) ){echo "checked";} ?> type="checkbox" name="rememberMe" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="submitButton" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script>
        const passwordEye = document.getElementById("passwordEye");
        const password = document.getElementById("password");
        passwordEye.addEventListener("click",()=>{
            if(password.type === "password"){
                password.type = "text";
                passwordEye.classList = "fa-solid fa-eye";
            }else{
                password.type = "password";
                passwordEye.classList = "fa-solid fa-eye-slash";
            }
        });

        function formValidate(){
            return true;
        }
    </script>
</body>
</html>

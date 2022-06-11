<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>STUORG</title>
        
        <!-- CSS only -->
        <link rel="stylesheet" href="assets\css\bootstrap.min.css">
        <link rel="stylesheet" href="assets\font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="favicon" href="">
    </head>
    <body>
        <div class="covers container-fluid">
            <div class="containers">
                <h1 id="welcome">Can't wait to have you on Stuorg</h1>
            </div>
            <div class="container-sm content card " style="width: 32rem; background-color: #22415f">
                    
                <h2 id="login_label">Sign Up</h2>
            
                <div class="login_form">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="singup_fname" aria-describedby="emailHelp" placeholder="First Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="signup_lname" aria-describedby="emailHelp" placeholder="Last Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="signup_username" aria-describedby="emailHelp" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="signup_email" aria-describedby="emailHelp" placeholder="Username/Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="signup_password" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" required onchange="check_passMatch()">
                        </div>
                        <button type="submit" class="btn btn-light ">Join</button>
                    </form>
                    
                </div>

                <div class="login_options">
                        <div class="row ">
                            <div class="col align-items-end">
                               <a href="index.php"> Already on Stuorg? Login. </a>
                            </div>
                        </div>
                </div>
                


            </div>
        </div>    
        

            <!-- JavaScript Bundle with Popper -->
        <script src="assets\js\jquery-3.6.0.js"></script> 
        <script src="assets\js\bootstrap.bundle.min.js"></script>
        
        <!-- So of our own -->
        <script src="assets/js/validate.js"></script>
    </body>
</html>
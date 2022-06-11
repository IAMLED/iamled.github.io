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
        <script>
            const swup = new Swup();
        </script>
    </head>
    <body>
    
        <div class="covers container-fluid">
            <div class="containers">
                <h1 id="welcome">Welcome to Stuorg</h1>
            </div>
            <div class="container-sm content card " style="width: 32rem; background-color: #22415f">
                    
                <h2 id="login_label">Login</h2>
            
                <div class="login_form">
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="login_email" aria-describedby="emailHelp" placeholder="Username/Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="login_password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-light ">Get in!</button>
                    </form>
                    
                </div>

                <div class="login_options">
                        <div class="row ">
                            <div class="col align-items-start text-white-50">
                               <a href="forgotten.php"> Forgotten Password? </a>
                            </div>
                            <div class="col align-items-end">
                               <a href="register.php"> New Student? Signup. </a>
                            </div>
                        </div>
                </div>
                


            </div>
        </div>    
 

            <!-- JavaScript Bundle with Popper -->
        <script src="assets\js\jquery-3.6.0.js"></script> 
        <script src="assets\js\bootstrap.bundle.min.js"></script>   
        <script src="assets/dist/swup.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Login and Registration System</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body style="background: #ccc;">
        <!--------- NAVIGATION BAR ----------->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a href="index.php" class="navbar navbar-brand"><h3>L&R System</h3></a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                </ul>
                <a href="login.php"><button class="btn btn-danger mr-1">Login</button></a>
                <a href="register.php"><button class="btn btn-success">Register</button></a>
            </div>
        </nav>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card bg-light mt-5 py-2">
                        <div class="card-title">
                            <h2 class="text-center">Login Form</h2>
                            <hr>
                        </div>
                        <div class="card-body">
                            <input type="email" name="user_email" placeholder="User Email" class="form-control py-2 mb-2">
                            <input type="password" name="user_password" placeholder="Password" class="form-control py-2 mb-2">
                            <button class="btn btn-dark float-right">Login</button>
                        </div>

                        <div class="card-footer">
                            <input type="checkbox" name="remember"> <span>Remember Me</span>
                            <a href="forgot.php" class="float-right">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
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
                            <h2 class="text-center mt-2">Enter Code</h2>
                            <hr>
                        </div>
                        <div class="card-body">
                            <input type="text" name="recover-code" placeholder="######" class="form-control py-2 mb-2">
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-danger float-right">Cancel</button>
                            <button class="btn btn-success float-left">Send Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <title>Document</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse full-nav" style="background-color: white">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand p-2 mx-5" href="./index.php"><img src="./images/logo/logo-restudy.png" width="150px" alt=""></a>
            </div>
            <div class="nav navbar-nav d-flex flex-row">
                <ul class="nav navbar-nav d-flex flex-row align-items-center" style="font-size: 20px;">
                    <li class="m-2"><a href="./index.php" class="text-decoration-none nav-btn fs-6">Home</a></li>
                </ul>
                <ul class="nav navbar-nav d-flex flex-row align-items-center" style="font-size: 20px;">
                    <form action="./login_form.php">
                        <button type="submit" id="myModal" class="btn login-button m-5 my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
                    </form>
                </ul>
            </div>
            </div>
        </nav>
        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>
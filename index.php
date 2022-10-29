<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <title>Home</title>
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
        <div class = "rectangle1">
</div>
        <p class = "z">For You</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="./images/random/post1.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Учебник 1</h5>
        <p class="card-text">Учебник по Биология за 10 клас, добро състояние.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./images/random/post1.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Учебник 2</h5>
        <p class="card-text">Учебник по Математика ПП за 11 клас, добро състояние.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./images/random/post1.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Учебник 3</h5>
        <p class="card-text">Учебник по Литература за 7 клас, добро състояние.</p>
      </div>
    </div>
  </div>
</div>

 <p class = "z">Recent</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="./images/random/post1.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Учебник 1</h5>
        <p class="card-text">Учебник по Биология за 10 клас, добро състояние.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./images/random/post1.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Учебник 2</h5>
        <p class="card-text">Учебник по Математика ПП за 11 клас, добро състояние.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./images/random/post1.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Учебник 3</h5>
        <p class="card-text">Учебник по Литература за 7 клас, добро състояние.</p>
      </div>
    </div>
  </div>
</div>
        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>
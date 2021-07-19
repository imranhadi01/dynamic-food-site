<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" type = "text/css" href = "css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <title>Document</title>
    
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Muhammad Imran</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#service">Service</a>
      </li>
      
       
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php" tabindex="-1" >About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\44.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\5.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


  <section class = "my-5">
  <div class="py-5">
      <h2 class= "text-center">About us</h2>
  </div>
  <div class="container-fluid">
     <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
      <img src="images\abouttt.jpg" alt="" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
    <h2 class="display-4"> i'm imran</h2>
    <p class="py-3">I'm imran, a 19 year old developer based in Pakistan.I m a full stack web developer. I enjoy working and learning about computer science. Fields that interest me are Software development and Cyber Security. This is one of my project :)</p>
    <a href="about.php" class="btn btn-success">check more</a>  
  </div>
  </div>
  </section>
   
    <div id="service">
    <section class = "my-5">
        <div class="py-5">
          <h2 class= "text-center">Our services</h2>
        </div>
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images\15.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Amazing Food</h4>
    <p class="card-text">Try eat me</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>

        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images\16.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Amazing Food</h4>
    <p class="card-text">Try eat me</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>

        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images\17.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Amazing Food</h4>
    <p class="card-text">Try eat me</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>

        </div>
      </div>
    </section>
</div>
    <section class = "my-5">
        <div class="py-5">
          <h2 class= "text-center">Gallery</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images\19.jpg" alt="" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img src="images\20.jpg" alt="" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img src="images\17.jpg" alt="" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img src="images\27.jpg" alt="" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img src="images\25.jpg" alt="" class="img-fluid pb-4">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img src="images\26.jpg" alt="" class="img-fluid pb-4">
         </div>




        </div>

    </section>

    
    <section class = "my-5">
        <div class="py-5">
          <h2 class= "text-center">Gallery</h2>
          </div>
            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Comments</label>
                  <textarea class="form-control" id="" cols="10" rows="2" name="comment"></textarea>  
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>


                </form>
        </div>
        </section>

<footer>
    <p class=" p-3 bg-dark text-white text-center"> &copy 2021 Muhammad imran</p>
</footer>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
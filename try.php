
<html>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>
<body>







<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="D:\Aditya Wakase\Techgeeeks\Logo.png" width="40" height="40">
  <a class="navbar-brand" href="#">Techgeeek</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="C:\Users\st-6\Desktop\tejas.html"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link enabled" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" action="search.php" method = "POST" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href=$res>Search</button>
    </form>
    <?php

     $con = mysqli_connect('localhost','root','aditya@789')
     $db= mysqli_select_db ($con , 'tech');
     $search1 = $_POST ['search'] 
     $qry = " select fPath from geek where fNm = '$search1' " ;

     $res = mysqli_query($con, $qry);
     $_SESSION['fNm'] = $search1
     header('location:PocoX2.html');
     ?>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="D:\Aditya Wakase\Techgeeeks\RedmiNote9.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="D:\Aditya Wakase\wallpaper4.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="D:\Aditya Wakase\wallpaper5.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!--FirstRow-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="container">
  <div class="row">
    <div class="card" style="width: 18rem;">
       <img class="card-img-top" src="D:\Aditya Wakase\Techgeeeks\PocoX2.jpg" alt="wallpaper1">
    <div class="card-body">
      <h5 class="card-title"  >Poco X2</h5>
      <p class="card-text"  >Quick look at the Poco X2</p>
      <a  class="btn btn-primary" href="D:\Aditya Wakase\Techgeeeks\PocoX2.html.html">Open</a>
    </div>
</div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="D:\Aditya Wakase\Techgeeeks\RealmeX2.jpg" alt="wallpaper1">
  <div class="card-body">
    <h5 class="card-title"  >Realme X2</h5>
    <p class="card-text"  >Quick Look at the Realme X2</p>
    <a  class="btn btn-primary" href="https://www.redminote8pro.wordpress.com/">Open</a>
  </div>
</div>
  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="D:\Aditya Wakase\Techgeeeks\samsungm31.jpg" alt="wallpaper1">
  <div class="card-body">
    <h5 class="card-title"  >Samsung Galaxy M31</h5>
    <p class="card-text"  >Quick Look at the Samsung Galaxy M31</p>
    <a  class="btn btn-primary" href="https://www.redminote8pro.wordpress.com/">Open</a>
  </div>
</div>
</div>
</div>





<!--SecondRow-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="container">
  <div class="row">
    <div class="card" style="width: 18rem;">
       <img class="card-img-top" src="D:\Aditya Wakase\Techgeeeks\Redmi Note 8 Pro.jpg" alt="wallpaper1">
    <div class="card-body">
      <h5 class="card-title"  >Redmi Note 8 Pro</h5>
      <p class="card-text"  >Quick look at the Redmi Note 8 Pro</p>
      <a  class="btn btn-primary" href="https://www.redminote8pro.wordpress.com/">Open</a>
    </div>
</div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="D:\Aditya Wakase\Techgeeeks\Realme XT.jpg" alt="wallpaper1">
  <div class="card-body">
    <h5 class="card-title"  >Realme XT</h5>
    <p class="card-text"  >Quick look at the Realme XT</p>
    <a  class="btn btn-primary" href="https://www.redminote8pro.wordpress.com/">Open</a>
  </div>
</div>
  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="D:\Aditya Wakase\Techgeeeks\Realme X.jpg" alt="wallpaper1">
  <div class="card-body">
    <h5 class="card-title"  >Realme X</h5>
    <p class="card-text"  >Quick look at the Realme X</p>
    <a  class="btn btn-primary" href="https://www.redminote8pro.wordpress.com/">Open</a>
  </div>
</div>
</div>
</div>




<p>@TECHGEEKS</p>
</body>



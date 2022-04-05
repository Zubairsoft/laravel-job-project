<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Jobs</title>
</head>
<body>
@extends('forent.master')
@section('content')
<div class="container">
<!--star search-->
<div class=" mt-3 mb-3 d-flex justify-content-center" >
  <div class="search-width">
    <div class="input-group mb-3 w-100">
      <input type="search" id="search" class="form-control w-80" placeholder="search" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <span class="input-group-text  bg-color"  id=""><i class="fas fa-search"></i></span>
    </div>

  </div>


</div>

<!-- start fillter-->

        <div class=" mt-3 mb-3 d-flex justify-content-center" >
        <div class="select  text-center">
        <select class="form-select" aria-label="filter Jobs">
            <option selected>Select to filter</option>
            <option >All</option>
            <option >Company</option>
            <option >City</option>
          </select>
        </div>
        </div>
        <div class="row" id="job">
            <h2 class="text-center heading mb-2 mt-4">avilable Jobs</h2>
            <div class=" col-md-3 col-sm-6  col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/webdev.jpg" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Web-Developer</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i> Yemen - Hadrmout - Mukalla</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> Click-Apps</p>
                      <p class="date">two hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>

            </div>
            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/sucrem.jpg" class="card-img-top imgs " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Surem-master</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i>Sanaa Capital.</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> Yemen-Soft</p>
                      <p class="date">one hour ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>

            </div>
            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/العمقي.jpg" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Acounntant</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i> Yemen - Hadrmout - Mukalla</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> AL Omiqi</p>
                      <p class="date">3 hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>


            </div>

            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/stack.png" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Senior Full Stack Laravel</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i>Yemen - Taiz.</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> XYZ-Soft</p>
                      <p class="date"> 4 hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>
            </div>

            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/sucrem.jpg" class="card-img-top imgs " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Surem-master</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i>Sanaa Capital.</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> Yemen-Soft</p>
                      <p class="date">one hour ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>

            </div>

            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/sucrem.jpg" class="card-img-top imgs " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Surem-master</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i>Sanaa Capital.</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> Yemen-Soft</p>
                      <p class="date">one hour ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>

            </div>


            <div class=" col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/webdev.jpg" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Web-Developer</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i> Yemen - Hadrmout - Mukalla</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> Click-Apps</p>
                      <p class="date">two hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>

            </div>
            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/stack.png" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Senior Full Stack Laravel</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i>Yemen - Taiz.</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> XYZ-Soft</p>
                      <p class="date"> 4 hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>
            </div>
            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/العمقي.jpg" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Acounntant</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i> Yemen - Hadrmout - Mukalla</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> AL Omiqi</p>
                      <p class="date">3 hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>


            </div>

            <div class=" col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/webdev.jpg" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Web-Developer</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i> Yemen - Hadrmout - Mukalla</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> Click-Apps</p>
                      <p class="date">two hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>

            </div>
            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/sucrem.jpg" class="card-img-top imgs " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Surem-master</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i>Sanaa Capital.</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> Yemen-Soft</p>
                      <p class="date">one hour ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>

            </div>
            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/العمقي.jpg" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Acounntant</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i> Yemen - Hadrmout - Mukalla</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> AL Omiqi</p>
                      <p class="date">3 hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>


            </div>

            <div class=" col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/webdev.jpg" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Web-Developer</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i> Yemen - Hadrmout - Mukalla</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> Click-Apps</p>
                      <p class="date">two hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>

            </div>
            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/stack.png" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Senior Full Stack Laravel</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i>Yemen - Taiz.</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> XYZ-Soft</p>
                      <p class="date"> 4 hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>
            </div>
            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/stack.png" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Senior Full Stack Laravel</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i>Yemen - Taiz.</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> XYZ-Soft</p>
                      <p class="date"> 4 hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>
            </div>
            <div class="  col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/stack.png" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Senior Full Stack Laravel</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i>Yemen - Taiz.</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> XYZ-Soft</p>
                      <p class="date"> 4 hours ago</p>
                      <a href="#" class="btn button w-100">apply for</a>
                    </div>
                  </div>
            </div>

    </div>
    </div>

 @endsection


</body>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>
</html>

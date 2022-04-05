<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Z-Jobs</title>
</head>
<body>
    @extends('forent.master')
   @section('content')
<!-- start slaider-->
    <div class="container">
        <!--display slaider-->
        <div class="row">
        <div class="col-12 my-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/bag.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Our Future Is Save</h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/mobile.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our Future Is Save</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/mobile2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our Future Is Save</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-color" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-color" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        </div>

        <!--diplay latest jobs-->
        <div class="row">
            <h2 class="text-center heading mb-2 mt-4">Latest Jobs</h2>
            <div class=" col-md-3 col-sm-6 col-6" >
                <div class="card shadow my-2 " style="width: 100%;">
                    <img src="img/webdev.jpg" class="card-img-top imgs" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Web-Developer</h5>
                      <p class="card-text"><i class="fas fa-map-marker-alt mx-1"></i> Yemen - Hadrmout - Mukalla</p>
                      <p class="card-text"><i class="fas fa-briefcase mx-1" ></i> Click-Apps</p>
                      <p class="date">two hours ago</p>
                      <a href="detail.html" class="btn button w-100">apply for</a>
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
        <!--display partner-->
        <div class="row d-flex justify-content-between">
            <h2 class="text-center heading mb-2 mt-4">Our Partner</h2>
            <div class="col justify-content-center">
                <img src="img/العمقي.jpg" class=" w-60 rounded  img-fluid" alt="">

            </div>
            <div class="col  justify-content-center">
                <img src="img/بن دول.png" class="  w-60 rounded  img-fluid" alt="">

            </div>
            <div class="col justify-content-center">
                <img src="img/العمقي.jpg" class=" w-60 rounded  img-fluid" alt="">

            </div>
            <div class="col  justify-content-center">
                <img src="img/بن دول.png" class="  w-60 rounded  img-fluid" alt="">

            </div>



        </div>
        <div class="row">
          <h3 class="heading  text-center my-5">adv</h3>
          <div class="row">
            <div class="col-12 ">
              <div>
                <img src="img/bag.jpg " class="w-100 " alt="">
              </div>

            </div>
          </div>

        </div>






    </div>
@endsection

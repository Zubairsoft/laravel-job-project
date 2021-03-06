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
  <header>
    <!--start nav-->
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light nav-color">
        <div class="container-fluid">
          <a class="navbar-brand text-white " href="index.html">Z-Jobs</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jobs.html">Jobs</a>
              </li>

              <li class="nav-item">
                <a class="nav-link "  href="service.html">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="about.html">About us</a>
              </li>

            </ul>
            <form class="d-flex">
              <button class="btn btn-outline-light w-100 mx-1"  type="submit"><i class="fas fa-language text-white "></i></button>
              <button class="btn btn-outline-light w-100"  type="submit"><a href="./login.html">Login</a> </button>
            </form>
          </div>
        </div>
      </nav>

</div>
<!--end nav-->
</header>
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
                    <img src="img/????????????.jpg" class="card-img-top imgs" alt="...">
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
                    <img src="img/????????????.jpg" class="card-img-top imgs" alt="...">
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
                    <img src="img/????????????.jpg" class="card-img-top imgs" alt="...">
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

    <!--footer-->
    <footer class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6  p-4">
                    <h3> Z-Jobs</h3>
                    <p>this web side help you to fine job for show all avalivle job in Yemen and all golf </p>

                </div>
                <div class="col-md-3 col-sm-6 col-6  p-4">
                    <h3> Z-Jobs</h3>
                    <p>this web side help you to fine job for show all avalivle job in Yemen and all golf </p>

                </div>
                <div class="col-md-3 col-sm-6 col-6  p-4">
                    <h3> Z-Jobs</h3>
                    <p>this web side help you to fine job for show all avalivle job in Yemen and all golf </p>

                </div>
                <div class="col-md-3 col-sm-6 col-6 p-4">
                    <h3> follow us</h3>
                    <p>

                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-facebook-square"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin-in"></i>
                            <i class="fab fa-youtube"></i>





                    </p>

                </div>

            </div>
            <div class="row">
                <div class="cal-12 bg-color">
                    <p class="text-center my-2">
                        CopyRight@MohammedZUBAIR

                    </p>

                </div>

            </div>

        </div>
    </footer>

</body>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>
</html>

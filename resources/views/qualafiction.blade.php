<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>qualafication and courses</title>
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
        <div class="row">
            <div class="col-md-6" >
                <h2 class="mt-5 mb-3 "><i class="fas fa-graduation-cap mx-2"></i>Educational Qualification </h2>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-1">Degree</label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>select your degree </option>
                        <option value="1">Bachelor</option>
                        <option value="2">Master</option>
                        <option value="3">Doctor</option>
                        <option value="3">Diplome</option>
                        <option value="3">High-School</option>
                        <option value="3">something else</option>

                      </select>

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-1">Univrsty</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Univiarsty Name">

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-1">Date TO Take Degree</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" >

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-1">Major</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" >

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-1">Uploade your Degree Cerficate</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" >

                </div>
                <div class="mb-3">
                    <button class="btn bg-color text-white w-25">ADD</button>
                    <button class="btn bg-color text-white w-25">EDIT</button>
                    <button class="btn bg-color text-white w-25">DELETE</button>
                </div>



            </div>
            <div class="col-md-6" >

            <h2 class="mt-5 mb-3 "><i class="fas fa-graduation-cap mx-2"></i>Courses </h2>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-1">Type of Courses</label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>select your Courses </option>
                        <option value="1">Technical</option>
                        <option value="2">managerial</option>
                        <option value="3">medicinal</option>
                        <option value="3">academic</option>
                        <option value="3">something else</option>

                      </select>

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-1">instude</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Univiarsty Name">

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-1">Date TO Take Course</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" >

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-1">Major</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" >

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-1">Uploade your Coursres Cerficate</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" >

                </div>
                <div class="mb-3">
                    <button class="btn bg-color text-white w-25">ADD</button>
                    <button class="btn bg-color text-white w-25">EDIT</button>
                    <button class="btn bg-color text-white w-25">DELETE</button>
                </div>

            </div>
            <div class="col-md-6">
                <h2 class="mt-5 mb-3 border-bottomm"> Educational Qualification</h2>
                <div class="qulification">
                    <span><i class="fas fa-graduation-cap mx-2 my-3"></i> Degree : Bachelor</span>
                </div>
                <div class="qulification">
                    <span><i class="fas fa-university mx-2 my-3"></i> Universty : Hadrmout</span>
                </div>
                <div class="qulification">
                    <span><i class="fas fa-calendar-alt mx-2 my-3"></i> Date To Take : 2021</span>
                </div>
                <div class="qulification">
                    <span><i class="fas fa-university mx-2 my-3"></i> Major : MIS</span>
                </div>
                <div>
                    <button class="btn bg-color text-white w-50 my-3"> Download</button>
                </div>


            </div>
            <div class="col-md-6">
                <h2 class="mt-5 mb-3 border-bottomm"> Courses</h2>
                <div class="qulification">
                    <span><i class="fas fa-graduation-cap mx-2 my-3"></i> Type : Tecnical</span>
                </div>
                <div class="qulification">
                    <span><i class="fas fa-university mx-2 my-3"></i> instude : Rowad Coding Acadmi</span>
                </div>
                <div class="qulification">
                    <span><i class="fas fa-calendar-alt mx-2 my-3"></i> Date To Take : 2022</span>
                </div>
                <div class="qulification">
                    <span><i class="fas fa-university mx-2 my-3"></i> Major : WEB-FULL STACK</span>
                </div>
                <div>
                    <button class="btn bg-color text-white w-50 my-3"> Download</button>
                </div>


            </div>






        </div>




    </div>

    <!--footer-->
    <footer class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6 p-4">
                    <h3> Z-Jobs</h3>
                    <p>this web side help you to fine job for show all avalivle job in Yemen and all golf </p>

                </div>
                <div class="col-md-3 col-sm-6 col-6 p-4">
                    <h3> Z-Jobs</h3>
                    <p>this web side help you to fine job for show all avalivle job in Yemen and all golf </p>

                </div>
                <div class="col-md-3 col-sm-6 col-6 p-4">
                    <h3> Z-Jobs</h3>
                    <p>this web side help you to fine job for show all avalivle job in Yemen and all golf </p>

                </div>
                <div class=" col-md-3 col-sm-6 col-6  p-4">
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
</html>

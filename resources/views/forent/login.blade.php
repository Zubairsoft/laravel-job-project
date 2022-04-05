<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <title>login</title>
</head>
<body>
  @extends('forent.master')
  @section('content')
<!-- star login-->
    <div class="container">
        <div class="row align-items-start my-3">
            <div id="login" class="col-md-6 col-sm-12 ">
                <h3 class="color my-3">login</h3>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password </label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                  </div>
                  <div class="mb-1">

                    <a href="ptofile.html"> <button type="button" class="btn bg-color text-white w-100"> login </button></a>

                  </div>
                  <div class="text-center">
                    <a href="#" id="sign-up" >sign up</a>
                  </div>



            </div>
            <!--star signup-->
            <div id="show-sign" class="col-md-6  col-sm-12  sign-up-border ">
              <h3 class="color my-3">Sign up</h3>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Frist Name </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Frist Name">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">last Name </label>
                <input type="text" class="form-control"  placeholder="Enter your Last Name">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email </label>
                <input type="email" class="form-control"  placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone </label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter your phone Number">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password </label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your password">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Confirm your password </label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Accepte all a poltices
                </label>
              </div>
              <div class="mb-3">

                <a href="ptofile.html" class="text-white"><button type="button" class="btn bg-color text-white w-100">  sign up</button></a>
              </div>


            </div>


    </div>
    <div class="hight">

    </div>
    </div>




</body>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/main.js"></script>
</html>
@endsection

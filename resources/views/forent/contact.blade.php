<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>contact</title>
</head>
<body>
    @extends('forent.master')
   @section('content')

<!-- start contact-->
    <div class="container">
        <div class="row align-items-center">
            <h3 class="mt-5 mb-3"> Contact</h3>
            <div class="col-md-8 col-sm-12 d-block my-1" >

                <p class="d-flex align-items-center">
                    <i class="fas fa-map-marker-alt mx-2"></i><span> Yemen - Hadrmout - Mukalla</span>
                </p>
                <p class="d-flex align-items-center">
                    <i class="fas fa-phone-alt mx-2"></i><span> phone: +967 775 123 554 / +967 777 352 164</span>
                </p>
                <p class="d-flex align-items-center">
                    <i class="fas fa-inbox mx-2"></i><span> box: 77777</span>
                </p>
                <p class="d-flex align-items-center">
                    <i class="fas fas fa-fax mx-2"></i><span> fax: 373737</span>
                </p>

                <p class="d-flex align-items-center">
                    <i class="fas fa-envelope-open-text mx-2"></i><span> email: moh.775123554@gmail.com</span>
                </p>
                <p class="d">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Notfication <i class="fas fa-bell ml-1"></i></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="sent us notifacaton"></textarea>
                  </div>
                  <button type="button" class="btn bg-color text-white w-25">send</button>
                </p>


            </div>
            <div class="col-md-4 ">
                <img src="img/map.jpg" alt="google map" class="w-100">

            </div>

        </div>




    </div>

    <!--footer-->
    @endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>experience</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/experian.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
    @extends('forent.master')
    @section('content')
<div  class="container">
    <div  class="row">
        <div id="exper-hide" class="col-md-7 col-12">
            <h2 class="heading text-capitalize my-4"> experience</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Experience</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Experience">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date of Experience
                </label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="date of experiens">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description for Experience</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Upload your experience doucmention</label>
                <input type="file" class="form-control" id="exampleFormControlTextarea1" ></input>
              </div>
              <div class="mb-3">
                <button type="button" class="btn bg-color text-white w-25">ADD </button>
                <button type="button" class="btn bg-color text-white w-25">EDIT </button>
                <button type="button" class="btn bg-color text-white w-25">DELEATE </button>
              </div>

        </div>

    </div>

</div>
<div class="container">
    <h2 class="text-center my-4">Experience</h2>
<div class="main-timeline">

                        <!-- start experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month">2 Years</span>
                                    <span class="year">2013</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Visual Art &amp; Design</h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
                                </p>
                            </div>
                        </div>
                        <!-- end experience section-->

                        <!-- start experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month">1 Years</span>
                                    <span class="year">2015</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Product Designer</h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
                                </p>
                            </div>
                        </div>
                        <!-- end experience section-->

                        <!-- start experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month">2 Years</span>
                                    <span class="year">2016</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Web Designer</h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
                                </p>
                            </div>
                        </div>
                        <!-- end experience section-->

                        <!-- start experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month">2 Years</span>
                                    <span class="year">2018</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Graphic Designer</h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
                                </p>
                            </div>
                        </div>
                        <!-- end experience section-->

                    </div>
</div>
 @endsection

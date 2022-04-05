<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Z-Jobs</title>
</head>
<body>
    @extends('forent.master')
    @section('content')
<!-- detail-->
    <div class="container">
        <div class="row my-5 d-flex justify-content-space">
          <div class="col-md-4 col-sm-12 d-block">

<div class="card">
  <img src="/img/click apps.png" class="card-img-top img-fluid" alt="click-apps">
  <div class="card-body">
    <h5 class="card-title my-3  py-3"><i class="fas fa-building  mx-1"></i>Company Name: Click apps </h5>
    <p class="card-text  my-3 py-3"><span class="span"><i class="fas fa-inbox  mx-1"></i>Department: </span>Tecnical </p>
    <p class="card-text  my-3 py-3"><span class="span"><i class="fas fa-briefcase mx-1" ></i>Job-Title:</span> Web-Developer</p>
    <p class="card-text  my-3 py-3"><span class="span">add to favorite <i class="fas fa-star mx-1"></i> </span></p>

    <a href="#" class="btn w-100 button">apply for</a>
  </div>
</div>

          </div>
          <div class="col-md-8 col-sm-12 d-block mt-3 ">
            <div class=" w-100 ms-5 ">
              <h3>Requirment</h3>
              <ul>
                <li>he or she should be work before in web</li>
                <li>must know about html css js php larvel</li>
                <li>coolipration with his partners in company</li>
                <li>work from home two times a week</li>
              </ul>


            </div>
            <div class=" w-100 ms-5 my-5">
              <h3>Describtion</h3>
              <ul>
                <li>he or she should be work before in web</li>
                <li>must know about html css js php larvel</li>
                <li>coolipration with his partners in company</li>
                <li>work from home two times a week</li>
              </ul>
              <button class="btn w-50 button"> douwnload Describtion</button>


            </div>
            <div class=" w-100 ms-5">
              <h3 class="text-capitalize">how to apply for a job ?</h3>
              <ol>
                <li>log-in to the web site</li>
                <li>select Jobs tap from manu bar </li>
                <li>select one or more from avalibale jobs in jop section</li>
                <li>uplode your resume in job-detail and click to apply for</li>
              </ol>


            </div>
            <div class=" w-100 ms-5">
              <h3 class="text-capitalize">uploade your resume</h3>
              <div class="mt-3">

                <input class="form-control form-control-sm w-50" name="no" id="formFileSm" type="file" placeholder="select">
              </div>

            </div>



          </div>


        </div>



    </div>

    @endsection


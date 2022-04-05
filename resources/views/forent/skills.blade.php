<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>skills</title>
</head>
<body>
  
    <!--start nav-->
@extends('forent.master')
@section('content')

    <div class="container">
        <div class="row my-5 d-flex justify-content-space">
          <div class="col-md-4 col-sm-12 d-block">

<div class="card">
  <img src="img/facsss.jpg" class="card-img-top img-thumbnail w-100 rounded-circle mx-1  my-1" alt="click-apps">
  <div class="card-body">
    <h5 class="card-title my-3  py-3"><i class="fas fa-user mx-1"></i>User Name:Mohammed Zubair </h5>
    <h5 class="card-title my-3  py-3"><i class="fas fa-tasks mx-1"></i>Skills </h5>


    <div>
        <label for="" class="mx-2"> html</label>
          <div class="progress  my-3">
            <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <label for="" class="mx-2">css</label>
          <div class="progress my-3">
            <div class="progress-bar" role="progressbar" style="width: 97%" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <label for="" class="mx-2">java script</label>
          <div class="progress my-3">
            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <label for="" class="mx-2">analysis</label>
          <div class="progress my-3">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>



    <a href="#" class="btn w-100 button">Edit</a>
  </div>
</div>

          </div>
          <div class="col-md-8 col-sm-12 d-block mt-3 ">
              <h2 class="presonal">Edite  Skills</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Skills Name </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Frist Name">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Skills Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <div class="my-3 ">
                <label for="customRange1" class="form-label">Skills Range</label>
                <input type="range" class="form-range" id="customRange1">
                </div>
                  <div class="mb-3">
                    <button type="button" class="btn bg-color text-white w-25">Add </button>
                    <button type="button" class="btn bg-color text-white w-25">Delete </button>

                  </div>





          </div>


        </div>



    </div>

    </div>
@endsection

<?php require_once 'covidData.php';?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Data Covid 19 | <?=$data[0]['name']?></title>
  </head>
  <body>


        <div class="container">
            
            <div class="row justify-content-center mt-5">
              <div class="col-4">
                <h1 class="text-info">Covid19 | <?=$data[0]['name']?></h1>
              </div>
            </div>

            <div class="row justify-content-center mt-5">
              
                <div class="col-sm">
                    
                  <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Positif</h5>
                      <p class="card-text"><?=$data[0]['positif']?> Orang</p>
                    </div>
                  </div>

                </div>

                <div class="col-sm">
                  <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">Sembuh</h5>
                    <p class="card-text"><?=$data[0]['sembuh']?> Orang</p>
                  </div>
                </div>

                </div>

                <div class="col-sm">
                  <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Meninggal</h5>
                      <p class="card-text"><?=$data[0]['meninggal']?> Orang</p>
                    </div>
                  </div>

                </div>

                <div class="col-sm">
                  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Dirawat</h5>
                      <p class="card-text"><?=$data[0]['dirawat']?> Orang</p>
                    </div>
                  </div>
                </div>


            </div>  


        </div>  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
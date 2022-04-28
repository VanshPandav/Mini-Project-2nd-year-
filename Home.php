<?php include "_db_con.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewpoint" content="with=device-width , initial-scale = 1.0">
    <link rel="stylesheet" href="home.css">

    <style>
        .image {
        opacity: 1;
        display: block;
        width: 100%;
        height : 40vh;
        transition: .5s ease;
        backface-visibility: hidden;
        }

        .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        }

        .container:hover .image {
        opacity: 0.3;
        }

        .container:hover .middle {
        opacity: 1;
        }

        .text {
        background-color: #04AA6D;
        color: white;
        font-size: 16px;
        padding: 16px 32px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <section class="navbar">
        <div class="navbar sticky">
            <div class="navbar-content">
              <a href="C:\KJ Somaiya\SY\SEM 4\Mini Project\Experiment Website\index.html"><i class="fa fa-fw fa-home"></i> Home</a>
              <a href="#companies"><i class="fa fa-fw fa-car"></i> Cars</a>
              <a href="#types"><i class="fa fa-fw fa-sort"></i>About Us</a>
              <a href="#news"><i class="far fa-fw fa-newspaper"></i> Contact Us</a>
              <a href="#news"><i class="far fa-fw fa-newspaper"></i> Login</a>
              <!-- <a href="#" id="company-name">Six Wheels</a> -->
            </div>
          </div>
    </section>

    <h1 style="margin:0.5px 0px 20px 0px">BidYourCars</h1>

<div class="margin" style="margin: 10px;">
    <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
                 <div class="col">
        <a href="" style="text-decoration:none; color:black;">
        <div class="card">
            <div class="container">
            <img src="uploads/<?=$images['image_url']?>" class="image" class="card-img-top" >
        <div class="middle">
        <div class="text">BUY</div>
        </div>
        </div>
        <div class="card-body">
            <h5 class="card-title"><b><?="$",$images['price']?></b></h5>
            <p class="card-text"><?=$images['name']?><br> <?=$images['kms'],"kms","|",$images['years'],"|",$images['fuel']?></p>
        </div>
        </div>
        </a>
    </div>
    <?php } }?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
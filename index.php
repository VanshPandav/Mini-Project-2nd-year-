
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- <script defer src="./js/all.js"></script> -->
  <title>BidYourCars</title>
  <link rel="stylesheet" href="style.css" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

  <div class="navbar sticky">
    <div class="navbar-content">

      <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
      <a href="#companies"><i class="fa fa-fw fa-car"></i> Cars</a>
      <a href="#types"><i class="fa fa-fw fa-sort"></i>About Us</a>
      <a href="#news"><i class="far fa-fw fa-newspaper"></i> Contact Us</a>
      <a href="C:\KJ Somaiya\SY\SEM 4\WPL\HTML CSS\miniproimages\formv1.1.html"><i class="far fa-fw fa-newspaper"></i> Login</a>
      <!-- <a href="#" id="company-name">Six Wheels</a> -->
    </div>
  </div>
  <section id="home">
    <div class="wrapper">
      <div class="banner"></div>
      <div class="banner-content">
        <h2>Welcome to</h2>
        <h1 class="six-wheels">BidYourCars</h1>
        <!-- <i class="fas fa-angle-double-down"></i> -->
      </div>
    </div>
  </section>
  <section id="companies" >
    <p class="companies-text">Cars listed</p>
    <div class="card-group" >
      <div class="card" style="margin: 3%;">
        <img src="miniproimages\Audi_A6.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">AUDI A6</h5>
          <p class="card-text">2013 Audi A8L, 4.2V8 TDI driven 42000kms. Single Owner. Bid Price:20.0Lakhs</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card" style="margin: 3%;">
        <img src="C:\KJ Somaiya\SY\SEM 4\WPL\HTML CSS\miniproimages\BMW_X5.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">BMW X5</h5>
          <p class="card-text">2012 BMW520d, 2.0 diesel driven 92530kms. Second Owner. Bid Price:12.5Lakhs</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card" style="margin: 3%;">
        <img src="C:\KJ Somaiya\SY\SEM 4\WPL\HTML CSS\miniproimages\jeepcompass.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Jeep Compass</h5>
          <p class="card-text">2020 Jeep Compass, 2.0 diesel, driven 12000kms. Single Owner. Bid Price:14.0Lakhs</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   <a class="companies-text" href = "C:\KJ Somaiya\SY\SEM 4\WPL\HTML CSS\Home.html">View all</a>
  </section>
  <section class="feedback">
    <h2>Have any suggestions?</h2>
    <p>Make sure to leave a feedback before you go!</p>
    <form class="feedback-form">
      <div class="feedback-input">
        <label for="name">Name</label>
        <input type='text' id='form-name' name="name" placeholder="Name" />
      </div>
      <div class="feedback-input">
        <label for="email">Email</label>
        <input type='text' id='form-email' name="email" placeholder="Email" />
      </div>
      <div class="feedback-input">
        <label for="title">Title</label>
        <input type='text' id='form-title' name="title" placeholder="Title" />
      </div>
      <div class="feedback-input">
        <label for="category">Category</label>
        <input list="category" id='form-category' placeholder="Select">
        <datalist id="category">
          <option value="Bugs in website">
          <option value="Suggestions">
          <option value="Corrections in information">
          <option value="Other">
        </datalist>
      </div>
      <div class="feedback-input">
        <label for='description'>Description</label>
        <input type='text' id='form-description' name='description' placeholder="Description" />
      </div>
      <input type="submit" value='Submit' id='form-submit' onclick='alert("Done")' />

    </form>
  </section>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo substr(basename($_SERVER['PHP_SELF']),0,-4); ?></title>


    <!-- Offline Bootstrp Added by Mwibutsa Floribert -->

              <!-- Bootstrap CSS -->
          <!-- Bootstrap CSS -->

<!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="bootstrap/dist/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="bootstrap/dist/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
      <h1 class="text-center">Epimaque Fashion Shop</h1>
    <!-- Market Navbar starts here -->
<nav class="navbar navbar-expand-lg bg-success navbar-dark" style="position:sticky">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Epimaque-Fashion Shop</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Products
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#producsts/shirts.php">Shirts</a>
        <a class="dropdown-item" href="#products/t-shirst.php">T-Shirts</a>
        <a class="dropdown-item" href="#products/pants.php">Pants</a>
      </div>
    </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="#cart.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#account">Account</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="contact.php">
        Contact
      </a>

    </li>
    </ul>

  </div>
  <form class="form-inline" action="/action_page.php" method="get">
    <input class="form-control mr-sm-2" type="search" placeholder="Search">
    <button class="btn btn-info" type="submit">Search</button>
  </form>
</nav> 

    <!-- Market Navbar ends here -->
    <div class="wrapper">
        <!-- THE MAIN BODY STATRS HERE GUYS  IT ENDS IN THE FOOTER.PHP FILE-- >




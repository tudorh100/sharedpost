<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <title><?php  echo SITENAME; ?></title>

  <link rel="stylesheet" href="<?php echo URLROOT; ?>/boot4/boot4/css/bootstrap.min.css">
  <script src="<?php echo URLROOT; ?>/jquery/jquery-3.3.1.js"></script>

  <script type="text/javascript" src="<?php echo URLROOT; ?>/boot4/boot4/js/bootstrap.min.js"></script>

</head>

<body>



  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>           -->


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php  echo URLROOT; ?> " style="margin-left:5em;"><?php echo SITENAME;?> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="<?php  echo URLROOT; ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php  echo URLROOT; ?>/pages/about">About</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
    </div>
  </nav>
  <!-- to make the contents of the page move to the middle instead of at the edges. iclose it in footer.php -->
  <div class="container">
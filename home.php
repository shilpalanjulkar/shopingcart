<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="utf8">
<meta name="viewport" content="width=device-width" initial-scale="1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
<div class="row">
<div class="col-lg-3">
<form action="managecart.php"  method="POST">
<div class="card text-center" >
  <img src="image/ironvase.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Iron Vase</h5>
    <p class="card-text">Rs.499</p>
    <button type="submit" name="add_to_cart" class="btn btn-warning">Add To Cart</button>
    <input type="hidden" name="item_name" value="ironvase1">
    <input type="hidden" name="price" value="499">
  </div>
</div>
</form>
</div>
<div class="col-lg-3">
<form action="managecart.php" method="POST">
<div class="card text-center" >
  <img src="image/ironvase.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Iron Vase</h5>
    <p class="card-text">Rs.499</p>
    <button type="submit" name="add_to_cart" class="btn btn-warning">Add To Cart</button>
    <input type="hidden" name="item_name" value="ironvase1">
    <input type="hidden" name="price" value="499">
  </div>
</div>
</form>
</div>
<div class="col-lg-3">
<form action="managecart.php" method="POST">
<div class="card text-center" >
  <img src="image/ironvase.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Iron Vase</h5>
    <p class="card-text">Rs.499</p>
    <button type="submit" name="add_to_cart" class="btn btn-warning">Add To Cart</button>
    <input type="hidden" name="item_name" value="ironvase1">
    <input type="hidden" name="price" value="499">
  </div>
</div>
</form>
</div>
<div class="col-lg-3">
<form action="managecart.php"  method="POST">
<div class="card text-center" >
  <img src="image/ironvase.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Iron Vase</h5>
    <p class="card-text">Rs.499</p>
    <button type="submit" name="add_to_cart" class="btn btn-warning">Add To Cart</button>
    <input type="hidden" name="item_name" value="ironvase1">
    <input type="hidden" name="price" value="499">
  </div>
</div>
</form>
</div>
</div>
<div>
</body>
</html>
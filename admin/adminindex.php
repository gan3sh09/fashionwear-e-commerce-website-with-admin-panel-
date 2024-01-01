<!DOCTYPE html>
<html>
<?php
	include ("adminpartials/session.php");
	include ("adminpartials/head.php");
?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php
	include ("adminpartials/header.php");
	include ("adminpartials/aside.php");
?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      
      <div class="col-sm-9">
        <a href="products.php">
        <button style="color: green">Add Products</button>
        </a>
        <hr>
      </div>

      <div class="col-sm-9">
        <a href="categories.php">
        <button style="color: green">Add Categories</button>
        </a>
        <hr>
      </div>

      <div class="col-sm-9">
        <a href="orders.php">
        <button style="color: green">See all orders</button>
        </a>
        <hr>
      </div>

    </section>
  </div>
  <?php
	include ("adminpartials/footer.php");
?>
</body>
</html>

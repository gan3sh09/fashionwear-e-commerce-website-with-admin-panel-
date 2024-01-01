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
  
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

<div class="row">
    <div class="col-sm-9">

        <?php
        include('../partials/connect.php');

        $id=$_GET['pro_id'];
        $sql="SELECT * FROM orders WHERE id='$id'";
        $results=$connect->query($sql);

        $final=$results->fetch_assoc();

        ?>

        <h3> Customer no: <?php echo $final['customer_id']?> </h3><hr><br>

        <h3> Total: <?php echo $final['total']?> </h3><hr><br>

        <h3> Address: <?php echo $final['address']?> </h3><hr><br>

    </div>
        
    <div class="col-sm-9">

        <?php
        include('../partials/connect.php');

        $id=$_GET['pro_id'];
        $sql="SELECT * FROM order_details WHERE id='$id'";
        
        $results=$connect->query($sql);

        $final=$results->fetch_assoc();
      
        if(isset($final))
        {
        
          echo "
        <h3> Product no:".$final['product_id']."</h3><hr><br>

        <h3> Quantity:".$final['quantity']."</h3><hr><br>
        ";
        }
        else
        {
          echo "no product";
        }
        ?>

    </div>

    <div class="col-sm-3">
    </div>
</div>

</section>
  </div>
  <?php
	include ("adminpartials/footer.php");
?>
</body>
</html>

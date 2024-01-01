<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/profile-demofinal.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Fashion Wear</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><?php echo $_SESSION['email'] ?></li>
        
        <li>
          <a href="adminindex.php">
          <i class="fa fa-home" aria-hidden="true"></i></i> <span>Home</span>
          </a>
        </li>

        <li>
          <a href="categories.php">
          <i class="fa fa-list-alt" aria-hidden="true"></i> <span>Category</span>
          </a>
        </li>

        <li>
          <a href="productsshow.php">
          <i class="fa fa-product-hunt" aria-hidden="true"></i> <span>Products</span>
          </a>
        </li>

        <li>
          <a href="orders.php">
          <i class="fa fa-first-order" aria-hidden="true"></i> <span>Orders</span>
          </a>
        </li>

        <li>
          <a href="adminpartials/logout.php">
          <i class="fa fa-sign-out" aria-hidden="true"></i> <span>Sign Out</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
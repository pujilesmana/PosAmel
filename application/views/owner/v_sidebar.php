<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar -->
    <div class="side-menu-fixed">
     <div class="scrollbar side-menu-bg">
      <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <!-- menu title -->
         <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Website Components</li>
        <!-- All Form  -->
         <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#Barang">
            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Barang</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="Barang" class="collapse" data-parent="#sidebarnav">
            <li> <a href="<?php echo base_url()?>Owner/Barang">Barang Customer</a> </li>
            <li> <a href="<?php echo base_url()?>Owner/Barang/Reseller">Barang Reseller</a> </li>
          </ul>
        </li>
        <li>
       
          <li>
             <a href="javascript:void(0);" data-toggle="collapse" data-target="#transaksi">
              <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Transaksi</span></div>
              <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
            </a>
            <ul id="transaksi" class="collapse" data-parent="#sidebarnav">
              <li> <a href="<?php echo base_url()?>Owner/Transaksi">Transaksi Keseluruhan</a> </li>
              <li><a href="<?php echo base_url()?>Owner/Transaksi/all/2">Transaksi Customer</a></li>
              <li> <a href="<?php echo base_url()?>Owner/Transaksi/all/1">Transaksi Reseller</a></li>
            </ul>
          </li>
        </li>
        <li>
           <a href="javascript:void(0);" data-toggle="collapse" data-target="#order">
            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Order</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="order" class="collapse" data-parent="#sidebarnav">
            <li><a href="<?php echo base_url()?>Owner/Barang/pemesanan/2">Order Customer</a></li>
            <li> <a href="<?php echo base_url()?>Owner/Barang/pemesanan/1">Order Reseller</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url()?>Owner/Diskon"><i class="ti-calendar"></i><span class="right-nav-text">Diskon</span> </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>Owner/User"><i class="ti-user"></i><span class="right-nav-text">User</span> </a>
        </li>
    </ul>
  </div> 
</div>
<!-- Left Sidebar End-->
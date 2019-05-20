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
            <li> <a href="<?php echo base_url()?>Owner/Barang/Kategori">Kategori Barang</a> </li>
            <li> <a href="<?php echo base_url()?>Owner/Barang">Barang Customer</a> </li>
            <li> <a href="<?php echo base_url()?>Owner/Barang/Reseller">Barang Reseller</a> </li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url()?>Owner/Transaksi"><i class="ti-calendar"></i><span class="right-nav-text">Transaksi</span> </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>Owner/Diskon"><i class="ti-calendar"></i><span class="right-nav-text">Diskon</span> </a>
        </li>
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#1">
            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Ordering</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="1" class="collapse" data-parent="#sidebarnav">
            <li><a href="<?php echo base_url()?>Owner/Barang/Pemesanan/2">Ordering Customer</a></li>
            <li> <a href="<?php echo base_url()?>Owner/Barang/Pemesanan/1">Ordering Reseller</a></li>
          </ul>
        </li>
        <li>
        <li>
          <a href="<?php echo base_url()?>Owner/User"><i class="ti-user"></i><span class="right-nav-text">User</span> </a>
        </li>
    </ul>
  </div> 
</div>
<!-- Left Sidebar End-->
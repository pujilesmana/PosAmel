<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Cetak</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/logo.png" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<body>
     <div class="cointainer" style="display: flex">
        <div class="col-md-3" style="margin-top: 20px" >
          <img style="width: 80px; margin-left: 80px; margin-right: auto;" src="<?php echo base_url()?>assets/admin/images/logo.jpeg">
          <p style="text-align: center;margin-bottom: 0;"><b>MSGlow Palembang</b></p>
          <p style="text-align: center;font-size: 14px;">Alamat : Jl. Sukabangun 2 soak simpur. Komplek horizon estate blok c no.4 Palembang</p>
          <p style="font-size: 12px;margin-bottom: 0;margin-left: 50px;"><b>WA</b> : 0822-8188-1763</p>
          <p style="font-size: 12px;margin-bottom: 0;margin-left: 50px;"><b>FB</b> : Msglow Palembang</p>
          <p style="font-size: 12px;margin-bottom: 0;margin-left: 50px;"><b>IG</b> : @msglow_palembang</p>
          <p style="font-size: 12px;margin-bottom: 0;margin-left: 50px;"><b>Shopee</b> : sabiansabia</p>
          <p style="font-size: 12px;margin-bottom: 0;margin-left: 50px;"><b>Line</b> : sabiansabia</p>
          <p style="font-size: 12px;margin-bottom: 0;margin-left: 50px;"><b>Bukalapak</b> : Msglow Palembang</p>
        </div>
        <div class="col-md-5" style="margin-top: 20px">
          <h5>Kepada : </h5>
          <?php
                    foreach($pemesan->result_array() as $i) :
                      $pemesanan_id = $i['pemesanan_id'];
                      $pemesanan_nama = $i['pemesanan_nama'];
                      $tanggal = $i['tanggal'];
                      $pemesanan_alamat = $i['pemesanan_alamat'];
                      $pemesanan_hp = $i['pemesanan_hp'];
          ?>
          <p style="font-size: 35px; margin-top: 20px;"><?php echo $pemesanan_nama?></p>
          <p style="font-size: 20px; "><?php echo $pemesanan_alamat?></p>
          <p style="font-size: 20px; "><?php echo $pemesanan_hp?></p>
        
        </div>
        <div class="col-md-4" style="margin-top: 20px;" >
          <p  style="font-size: 20px;"><b>Order (<?php echo $tanggal?>)</b></p>
          <?php endforeach;?>
          <?php
            foreach($listbarang->result_array() as $i) :
              $qty = $i['lb_qty'];
              $barang_nama = $i['barang_nama'];
          ?>
          <div class="col-md-12" style="padding-left:0;display: flex">
            <div class="col-md-6" style="padding-left:0;">
              <p  style="font-size: 20px;"><?php echo $barang_nama?></p>
            </div>
            <div class="col-md-6" style="padding-left:0;">
              <p  style="font-size: 20px;"><?php echo $qty?> item</p>
            </div>
          </div>
        <?php endforeach;?>
        <p style="border: 2px solid;border-radius: 5px;" class="text-center"><b><?php echo $kurir?></b></p>
        </div>
          
          
      </div>

</body>
</html>

<script type="text/javascript">
 window.print();
</script>

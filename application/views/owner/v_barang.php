<div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">Data Daftar Barang</h4>              
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Daftar Barang</li>
            </ol>
          </div>
        </div>
    </div>
    <!-- main body --> 
    <div class="row">   
      <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
            <div class="col-xl-12 mb-10" style="display: flex">
              <div class="col-md-6">
                  <a href="" data-toggle="modal" data-target="#tambah-barang-non-reseller" class="btn btn-primary btn-block ripple m-t-20">
                      <i class="fa fa-plus pr-2"></i> Tambah Barang Non Reseller
                  </a>
              </div>
              <div class="col-md-6">
                  <a href="" data-toggle="modal" data-target="#tambah-barang-reseller" class="btn btn-primary btn-block ripple m-t-20">
                      <i class="fa fa-plus pr-2"></i> Tambah Barang Reseller
                  </a>
              </div>
            </div>
            <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered p-0">
              <thead>
                  <tr>
                      <th width="10">No</th>
                      <th>Foto Barang</th>
                      <th>Nama Barang</th>
                      <th>Stock Awal</th>
                      <th>Stock Akhir</th>
                      <th>Harga Modal</th>
                      <th>Tanggal Input</th>
                      <th>Harga</th> 
                      <th width="100"><center>Aksi</center></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                          <a href="#" style="margin-right: 20px; margin-left: 20px;" data-toggle="modal" data-target="#editdata"><span class="ti-pencil"></span></a>
                          <a href="#" style="margin-right: 20px" data-toggle="modal" data-target="#hapusdata"><span class="ti-trash"></span></a>
                          <a href="" data-toggle="tooltip" data-placement="top" title="Lihat History Stock"><span class="ti-eye"></span></a>
                      </td>
                  </tr>
              </tbody>
           </table>
          </div>
          </div>
        </div>   
      </div>

      <!-- Modal Add Barang Reseller-->
        <div class="modal" tabindex="-1" role="dialog" id="tambah-barang-reseller">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Barang Reseller</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form action="<?php echo base_url()?>Owner/Barang/barang_simpan" method="post" enctype="multipart/form-data">
                    <div class="modal-body p-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Nama Barang</label>
                                    <input class="form-control form-white" type="text" name="nama_barang"  />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Stock Awal</label>
                                    <input class="form-control form-white" type="number" name="stock_awal" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Stock Akhir</label>
                                    <input class="form-control form-white"  type="number" name="stock_akhir" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Harga Modal</label>
                                    <input class="form-control form-white money"  type="text" name="harga_modal" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Foto Barang</label>
                                    <input class="form-control form-white" type="file" name="filefoto" />
                                </div>
                                <div class="col-md-12 mt-10">
                                  <label class="control-label mt-10" for="harga">Harga reseller</label>
                                </div>
                                      <div class="form-group col-md-12" id="dynamic_field">
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label class="control-label" for="harga">Min.qty</label>
                                            <input class="form-control" type="number" name="minqty[]" >
                                          </div>
                                          <div class="col-md-2">
                                            <label class="control-label" for="harga">Max.qty</label>
                                            <input class="form-control" type="number" name="maxqty[]">
                                          </div>
                                          <div class="col-md-5">
                                            <label class="control-label" for="harga">Harga</label>
                                            <input class="form-control" type="text" name="harga[]">
                                          </div>
                                        </div>
                                      </div>                                  
                                    <div class="col-md-12 mt-30">
                                        <input class="button" value="Add new" id="add"/>
                                    </div>                                
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success ripple save-category" id="simpan">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Add Barang Non Reseller-->
        <div class="modal" tabindex="-1" role="dialog" id="tambah-barang-non-reseller">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Barang Non Reseller</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form action="<?php echo base_url()?>Pengawas/Laporan/addDataharian" method="post" enctype="multipart/form-data">
                    <div class="modal-body p-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Nama Barang</label>
                                    <input class="form-control form-white" type="text" name="nama_barang"  />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Stock Awal</label>
                                    <input class="form-control form-white" type="number" name="stock_awal" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Stock Akhir</label>
                                    <input class="form-control form-white"  type="number" name="stock_akhir" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Harga Modal</label>
                                    <input class="form-control form-white"  type="text" name="harga_modal" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Harga Normal</label>
                                    <input class="form-control form-white"  type="number" name="harga_normal" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Foto Barang</label>
                                    <input class="form-control form-white" type="file" name="filefoto" />
                                </div>
                            </div>          
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success ripple save-category" id="simpan">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>  
  


        <!-- Modal edit Data -->
          <div class="modal" tabindex="-1" role="dialog" id="editdata">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form action="<?php echo base_url()?>Pengawas/Laporan/editDataharian" method="post" enctype="multipart/form-data">
                    <div class="modal-body p-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Keahlian</label>
                                    <input type="hidden" name="kode" value="">
                                    <input type="hidden" name="kode1" value="">
                                    <input class="form-control form-white" type="text" name="xkeahlian" value=""/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Jumlah Keahlian</label>
                                    <input class="form-control form-white" type="number" name="xjkeahlian" value=""/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Jenis Bahan Material</label>
                                    <input class="form-control form-white"  type="text" name="xjenismaterial" value=""/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Jumlah Material Yang Diterima</label>
                                    <input class="form-control form-white"  type="number" name="xjumlahmaterial" value=""/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Alat-Alat Yang Digunakan</label>
                                    <input class="form-control form-white" type="text" name="xalat" value=""/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Jumlah Alat</label>
                                    <input class="form-control form-white" type="text" name="xjumlahalat" value=""/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Pekerjaan</label>
                                    <input class="form-control form-white" type="text" name="xpekerjaan" value=""/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Volume</label>
                                    <input class="form-control form-white" type="text" name="xvolume" value=""/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Keterangan</label>
                                    <input class="form-control form-white" type="text" name="xketerangan" value=""/>
                                </div>
                            </div>          
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success ripple save-category" id="simpan">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

      
        <div class="modal" tabindex="-1" role="dialog" id="hapusdata">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete pengguna</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="<?php echo base_url()?>Pengawas/Laporan/hapusDataharian" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="kode" value=""/> 
                                    <input type="hidden" name="kode1" value="">
                                    <p>Apakah kamu yakin ingin menghapus data harian ini?</i></b></p>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success ripple save-category">Ya</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  </div>

    
<!--=================================
 footer -->
 
    <footer class="bg-white p-4">
      <div class="row">
        <div class="col-md-6">
          <div class="text-center text-md-left">
              <p class="mb-0"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>. <a href="#"> Webmin </a> All Rights Reserved. </p>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="text-center text-md-right">
            <li class="list-inline-item"><a href="#">Terms & Conditions </a> </li>
            <li class="list-inline-item"><a href="#">API Use Policy </a> </li>
            <li class="list-inline-item"><a href="#">Privacy Policy </a> </li>
          </ul>
        </div>
      </div>
    </footer>
    </div> 
  </div>
</div>
</div>

<!--=================================
 footer -->


 
<!--=================================
 jquery -->

<!-- jquery -->
<script src="<?php echo base_url()?>assets/admin/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="<?php echo base_url()?>assets/admin/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '<?php echo base_url()?>assets/admin/js/';</script>

<!-- chart -->
<script src="<?php echo base_url()?>assets/admin/js/chart-init.js"></script>

<!-- calendar -->
<script src="<?php echo base_url()?>assets/admin/js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="<?php echo base_url()?>assets/admin/js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="<?php echo base_url()?>assets/admin/js/morris.init.js"></script>

<!-- datepicker -->
<script src="<?php echo base_url()?>assets/admin/js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="<?php echo base_url()?>assets/admin/js/sweetalert2.js"></script>

<!-- toastr -->
<script src="<?php echo base_url().'assets/admin/js/jquery.toast.min.js'?>"></script>

<!-- validation -->
<script src="<?php echo base_url()?>assets/admin/js/validation.js"></script>

<!-- lobilist -->
<script src="<?php echo base_url()?>assets/admin/js/lobilist.js"></script>
 
<!-- custom -->
<script src="<?php echo base_url()?>assets/admin/js/custom.js"></script>
  
<!-- mask -->
<script src="<?php echo base_url()?>assets/admin/js/jquery.mask.min.js"></script>
 
</body>
</html> 

<script type="text/javascript">
  $(document).ready(function(){
    // Format mata uang.
    $( '.money' ).mask('000.000.000.000.000', {reverse: true});

  })
</script>

<script type="text/javascript">
  $(document).ready(function(){
  var i=1;
  $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<div class="row" id="row'+i+'"><div class="col-md-2"><label class="control-label" for="harga">Min.qty</label><input class="form-control" type="number" name="minqty[]" ></div><div class="col-md-2"><label class="control-label" for="harga">Max.qty</label><input class="form-control" type="number" name="maxqty[]"></div><div class="col-md-5"><label class="control-label" for="harga">Harga</label><input class="form-control money" type="text" name="harga[]"></div><div class="col-md-2 mt-30"><button type="button" id="'+i+'" class="btn btn-danger btn-block btn_remove">Delete</button></div></div>');
  });
  
  $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
  });
  
  $('#submit').click(function(){    
    $.ajax({
      url:"<?php echo base_url()?>Owner/Barang",
      method:"POST",
      data:$('#add_name').serialize(),
      success:function(data)
      {
        $('#add_name')[0].reset();
      }
    });
  });
  
});
</script>

<?php if($this->session->flashdata('msg')=='update'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Update',
                    text: "Data Harian berhasil Diupdate.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    loader: true,        // Change it to false to disable loader
                    loaderBg: '#ffffff',
                    position: 'top-right',
                    bgColor: '#00C9E6'
                });
        </script>
<?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Laporan dibuat, Silahkan masukan data laporannya",
                    showHideTransition: 'slide',
                    icon: 'info',
                    loader: true,        // Change it to false to disable loader
                    loaderBg: '#ffffff',
                    position: 'top-right',
                    bgColor: '#7EC857'
                });
        </script>
<?php elseif($this->session->flashdata('msg')=='delete'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Delete',
                    text: "Data berhasil didelete",
                    showHideTransition: 'slide',
                    icon: 'info',
                    loader: true,        // Change it to false to disable loader
                    loaderBg: '#ffffff',
                    position: 'top-right',
                    bgColor: 'red'
                });
        </script>
<?php else:?>
<?php endif;?>

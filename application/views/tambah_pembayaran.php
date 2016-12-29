<?php
echo"$cek_login";
echo "$header";
?>
 <div id="page-wrapper">
 <div class="row">
 <div class="col-lg-12">
<h3><i class="fa fa-user fw"></i> TAMBAH PEMBAYARAN</h3> 
</div>
</div>
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <form action="<?php echo base_url()."welcome/tambah_pembayaran";?>"method="post"enctype="multipart/form-data">
                        <div class="panel-body">
						<div class="row">
						<div class="col-lg-6">
                            <div class="form-group">
                                 <label>Kode Kredit</label>
                                    <input name="kode_nasabah"class="form-control">
                                        </div>
						<div class="form-group">
                                 <label>Jenis Kredit</label>
                                    <input name="kode_nasabah"class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Nasabah</label>
                                            <input name="nama"class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat"class="form-control" rows="3"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Marketing</label>
                                            <input name="marketing"class="form-control">
                                        </div>									
										<div class="form-group">
                                            <label>Realisasi</label>
                                            <input name="pekerjaan"class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Suku Bunga</label>
                                            <input name="pekerjaan"class="form-control">
                                        </div>
<hr/>
                                         <div class="form-group has-error">
                                            <label class="control-label" for="inputError">*PEMBAYARAN</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Bayar Pokok </label>
                                            <input name="pekerjaan"class="form-control"type="number">
                                        </div>	
                                      <div class="form-group">
                                            <label>Bayar Bunga</label>
                                            <input name="pekerjaan"class="form-control"type="number">
                                        </div>
                                            <div class="form-group">
                                            <label>Bayar Denda </label>
                                            <input name="pekerjaan"class="form-control"type="number">
                                        </div>											
										
																		
                       </div>
					   <div class="col-lg-6">
										<div class="form-group">
                                            <label>Tgl Realisasi</label>
                                            <input name="tgl_registrasi"class="form-control"type="date">
                                        </div>	
					                     <div class="form-group">
                                            <label>Tgl JT Kredit</label>
                                            <input name="area"class="form-control"type="date">
                                        </div>
											
					                     <div class="form-group">
                                            <label>Tgl JT Periode</label>
                                            <input name="area"class="form-control"type="date">
                                        </div>	
					                     <div class="form-group">
                                            <label>Tgl Transaksi</label>
                                            <input name="area"class="form-control"type="date">
                                        </div>
                                      <div class="form-group">
                                            <label>Suku Bunga</label>
                                            <input name="area"class="form-control"type="number">
                                        </div>										
										<div class="form-group">
                                            <label>Jumlah Hari</label>
                                            <input name="jenis_nasabah"class="form-control"type="number">
                                        </div>
										<div class="form-group">
                                            <label>Jumlah Hari Terlambat</label>
                                            <input name="jenis_nasabah"class="form-control"type="number">
                                        </div>	
										<div class="form-group">
                                            <label>Cara Bayar</label>
                                            <input name="jenis_nasabah"class="form-control">
                                        </div>
                                         <div class="form-group">
                                            <label>Terbilang</label>
                                            <input name="jenis_nasabah"class="form-control">
                                        </div>
                                       <div class="form-group">
                                            <label>Ket</label>
                                            <textarea name="alamat"class="form-control" rows="3"></textarea>
                                        </div>										
					   </div>
					   </div><!-- /.row-->
					  
                                      <div class="panel-footer">
                                            <a href="<?php echo base_url()."welcome/kredit";?>"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></a>
                                            <button type="submit"name="save" value="Upload"class="btn btn-primary">Save</button>
                                        </div>
					   </div><!-- /.panel-body -->
						</form>
                        </div>
                        <!-- /.panel-heading -->
						
                        
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			</div>
			
			
<!-- jQuery -->
    <script src="<?php echo base_url()."assets/";?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()."assets/";?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()."assets/";?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url()."assets/";?>bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()."assets/";?>dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
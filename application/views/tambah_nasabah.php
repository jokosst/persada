<?php
echo"$cek_login";
echo "$header";
?>
 <div id="page-wrapper">
 <div class="row">
 <div class="col-lg-12">
<h3><i class="fa fa-user fw"></i> TAMBAH NASABAH</h3> 
</div>
</div>
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                      <form action="<?php echo base_url()."welcome/tambah_nasabah";?>"method="post"enctype="multipart/form-data">
                        <div class="panel-body">
						<div class="row">
						<div class="col-lg-6">
                            <div class="form-group">
                                 <label>Kode Nasabah</label>
                                    <input name="kode_nasabah"class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Nama Nasabah</label>
                                            <input name="nama"class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Alamat Nasabah</label>
                                            <textarea name="alamat"class="form-control" rows="3"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Tgl Registrasi</label>
                                            <input name="tgl_registrasi"class="form-control"type="date">
                                        </div>
										<div class="form-group">
                                            <label>Marketing</label>
                                            <input name="marketing"class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Area</label>
                                            <input name="area"class="form-control">
                                        </div>	
										<div class="form-group">
                                            <label>Jenis Nasabah</label>
                                            <input name="jenis_nasabah"class="form-control">
                                        </div>
										<hr/>
                                         <div class="form-group has-error">
                                            <label class="control-label" for="inputError">*PEKERJAAN</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Perkerjaan</label>
                                            <input name="pekerjaan"class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama_pekerjaan"class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat_pekerjaan"class="form-control" rows="3"></textarea>
                                        </div>
										
										<div class="form-group">
                                            <label>Kontak</label>
                                            <input name="telpon_pekerjaan"class="form-control"type="number">
                                        </div>										
                       </div>
					   <div class="col-lg-6">
                            <div class="form-group">
                                 <label>No KTP</label>
                                    <input name="no_ktp"class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input name="tempat_lahir"class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input name="tgl_lahir"class="form-control" type="date">
                                        </div>
										<div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="jenis_kelamin"class="form-control">
                                                <option>-pilih-</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                 <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Kota</label>
                                            <select name="kota"class="form-control">
                                                <option value="Pontianak">Pontianak</option>
                                                 <option value="Kubu Raya">Kubu Raya</option>
												 <option value="Ketapang">Ketapang</option>
												 <option value="Sintang">Sintang</option>
												 <option value="Mempawah">Mempawah</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Provinsi</label>
                                           <select name="provinsi"class="form-control">
                                                <option value="Pontianak">Kalimantan Barat</option>
                                                 <option value="Kubu Raya">Kalimantan Selatan</option>
												 <option value="Ketapang">Kalimantan Tengah</option>
												 <option value="Sintang">Kalimantan Timur</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>No Telpon</label>
                                            <input name="telpon"class="form-control"type="number">
                                        </div>
										<hr/>
										
										 <div class="form-group has-error">
                                            <label class="control-label" for="inputError">*SAUDARA</label>
                                        </div>
										
										<div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama_saudara"class="form-control">
                                        </div>
										
										<div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat_saudara"class="form-control" rows="3"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Kontak</label>
                                            <input name="telpon_saudara"class="form-control"type="number">
                                        </div>
										
										<div class="form-group">
                                            <label>Hubungan</label>
                                            <input name="hubungan_saudara"class="form-control">
                                        </div>
                                       										
                       </div>
					   </div><!-- /.row-->
					  
                                      <div class="panel-footer">
                                            <a href="<?php echo base_url()."welcome/nasabah";?>"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></a>
                                            <button type="submit"name="submit" value="Upload"class="btn btn-primary">Save</button>
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
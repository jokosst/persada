<?php
echo"$cek_login";
echo "$header";
?>
 <div id="page-wrapper">
 <div class="row">
 <div class="col-lg-12">
<h2><i class="fa fa-folder-open fw"></i> Pembayaran</h2>
 <a href="<?php echo base_url()."welcome/tambah_pembayaran";?>" class="btn btn-primary">
   <i class="fa fa-plus"></i> Tambah Pembayaran</a> 
   
</div>
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Tabel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Kredit</th>
                                            <th>Nasabah</th>
											<th>Tgl Transaksi</th>
                                            <th>Total Pembayaran</th>
                                            <th>Bayar Pokok</th>
                                            <th>Cara Bayar</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
		<?php ?>
                                    <tbody>
                                        <tr>
                                            <td><?php  ?></td>
                                            <td><?php  ?></td>
											<td><?php  ?></td>
                                            <td><?php  ?></td>
                                            <td><?php  ?></td>
                                            <td><?php  ?></td>
											<td>
							<a href="<?php echo base_url()."welcome/viewnota/"?>"class="btn btn-primary btn-circle"data-toggle="tooltip" data-placement="top" title="View">
							<i class="fa fa-eye"></i></a>
							
							<a onclick="return confirmSubmit3()"href="<?php echo base_url()."welcome/editnota/"?>"class="btn btn-success btn-circle"data-toggle="tooltip" data-placement="top" title="Edit">
							<i class="fa fa-edit"></i></a>	
							
							<a onclick="return confirmSubmit()"href="<?php echo base_url()."welcome/hapusnota/"?>">
							<button type="submit" class="btn btn-warning btn-circle"data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></button>
							</a>
							</td>
                                        </tr>
										<script>
                    function confirmSubmit()
                    {
                        var agree=confirm("Apakah anda yakin akan menghapus data ini?");
                        if (agree)
                            return true ;
                        else
                            return false ;
                    }
					function confirmSubmit3()
                    {
                        var agree=confirm("Apakah anda yakin akan mengubah data ini?");
                        if (agree)
                            return true ;
                        else
                            return false ;
                    }
                    </script>
                                       
                                    </tbody>
									<?php
		                             
									 ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
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
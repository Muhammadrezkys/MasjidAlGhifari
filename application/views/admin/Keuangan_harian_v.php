 <?php
include "koneksi.php";
?> 
<div class="container-fluid">
<head>
	<meta charset="utf-8" />
	<title></title> 
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="js/jquery-3.4.1.js"></script>
	<script src="datepicker/js/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" href="datepicker/css/datepicker.css">
</head>
<div class="container-fluid">

	<div class="alert- alert success" role='alert'>
		<i class="fas fa-univeristy"></i> KEUANGAN HARIAN

	</div>
	<div class="card shadow mb-4">	
		<div class="card-body">
			<br>
			<form method="post">
				<table>
					<tr>
						<td>dari tanggal</td>
						<td><input type="date" name="dari_tgl" required="required"></td>
						<td>sampai tanggal</td>
						<td><input type="date" name="sampai_tgl" required="required"></td>
						<td><input type="submit" class="btn btn-primary" name="filter" value="Filter"></td>
						
					</tr>

				</table> 

			</form>
			<br>
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

				<a href="<?= site_url('Keuangan_harian_control/tambah_harian')?>" class="btn btn-primary btn-icon-split mb-2">
					<span class="icon text-white-50">
						<i class="fas fa-plus"></i>
					</span>
					<span class="text">Tambah Data</span>
				</a>			
				<button type="button" onclick="cetak()" class="btn btn-primary btn-icon-split mb-2">
					<span class="icon text-white-50">
						<i class="fas fa-print"></i>
					</span>
					<span class="text">Cetak Data</span>
				</button>

			</form>
			<!-- <h4>Pencarian Data Berdasarkan Tanggal</h4>
			<?php echo form_open('Keuangan_harian_control/filter')?>
			
			<div class="form-group">
				<label>Tanggal Awal</label>
				<div class="input-group date">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-th"></span>
					</div>
					<input id="tgl_mulai" placeholder="masukkan tanggal Awal" type="date" class="form-control datepicker" name="tgl_awal" >
				</div>
			</div>
			<div class="form-group">
				<label>Tanggal Akhir</label>
				<div class="input-group date">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-th"></span>
					</div>
					<input id="tgl_akhir" placeholder="masukkan tanggal Akhir" type="date" class="form-control datepicker" name="tgl_akhir" >
				</div>
			</div>

			<script type="text/javascript">
				$(function(){
					$(".datepicker").datepicker({
						format: 'dd-mm-yyyy',
						autoclose: true,
						todayHighlight: false,
					});
					$("#tgl_mulai").on('changeDate', function(selected) {
						var startDate = new Date(selected.date.valueOf());
						$("#tgl_akhir").datepicker('setStartDate', startDate);
						if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
							$("#tgl_akhir").val($("#tgl_mulai").val());
						}
					});
				});
			</script>
			<div class="form-group">
				<input type="submit" class="btn btn-info" value="Cari">
			</div>
		</form>




		<?php echo form_open('Keuangan_harian_control/filter')
		?>
		<?php echo form_close()?> -->
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>Keterangan</th>
						<th>Tanggal</th>
						<th>Debit</th>
						<th>Kredit</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					$jum1=0;
					$jum2=0; 
					if(isset($_POST['tampil_data'])){
							$data_harian = mysqli_query($koneksi, "SELECT * FROM keuangan_harian");
						}
						if (isset($_POST['filter'])) {
							$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
							$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
							$data_harian = mysqli_query($koneksi, "SELECT * from keuangan_harian WHERE tanggal between '$dari_tgl' and '$sampai_tgl'");
							
													
						}else{
							$data_harian = mysqli_query($koneksi, "SELECT * FROM keuangan_harian");
						}
					foreach ($data_harian as $keu ) : ?>
						<tr> 
							<td><?php echo $no++ ?></td>
							<td><?php echo $keu['keterangan_harian'] ?></td>
							<td><?php echo $keu['tanggal'] ?></td>
							<td><?php echo "Rp ".number_format($keu['debit_harian'],2,',',',');  ?></td>
							<td><?php echo "Rp ".number_format($keu['kredit_harian'],2,',',','); ?></td>
							<td>
								<a href="<?= site_url('Keuangan_harian_control/ubah_harian/'.$keu['id_harian'])?>" class="btn btn-primary btn-circle mr-2" <?php $this->session->userdata('role_id')==2?print(''):print('hidden');?>>
									<i class="fas fa-edit"></i>
								</a>
								<button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#Mymodal<?= $keu['id_harian'] ?>"<?php $this->session->userdata('role_id')==2?print(''):print('hidden');?>>
									<i class="fas fa-trash"></i>
								</button>	
							</td>								
						</tr>
						<div class="modal fade" id="Mymodal<?= $keu['id_harian'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">Apakah anda yakin menghapus transaksi harian ini?</div>
									<div class="modal-footer">
										<button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
										<a id="btn-logout"class="btn btn-primary" href="<?= site_url('Keuangan_harian_control/hapus_harian_aksi/'.$keu['id_harian']);?>">Ya, saya yakin</a>
									</div>
								</div>
							</div>
						</div>
						<?php  
						$jum1 += $keu['debit_harian'];
						$jum2 += $keu['kredit_harian'];


						?>
					<?php endforeach;?>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="3">Total</th>
						<th><?= "Rp ".number_format($jum1,2,',',','); ?></th>
						<th><?= "Rp ".number_format($jum2,2,',',','); ?></th>
						<th style="background: white"></th>
					</tr>
				</tfoot>
			</table>
			<div hidden class="container" id="cetak">
				<h3 class="text-center">Laporan Keuangan Harian</h3>
				<h3 class="text-center">Masjid AL Ghifari</h3>
				<h4 class="text-center">Tanggal Diunduh: <?= date('d/m/y') ?></h4>
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No.</th>
								<th>Keterangan</th>
								<th>Tanggal</th>
								<th>Debet</th>
								<th>Kredit</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 0;
							$jum1=0;
							$jum2=0;
							if(isset($_POST['tampil_data'])){
							$data_harian = mysqli_query($koneksi, "SELECT * FROM keuangan_harian");
						}
						if (isset($_POST['filter'])) {
							$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
							$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
							$data_harian = mysqli_query($koneksi, "SELECT * from keuangan_harian WHERE tanggal between '$dari_tgl' and '$sampai_tgl'");
							
													
						}else{
							$data_harian = mysqli_query($koneksi, "SELECT * FROM keuangan_harian");
						}
							foreach($data_harian as $keu){ 
								$no++;?>
								<?php 
								$jum1 += $keu['debit_harian'];
								$jum2 += $keu['kredit_harian'];
								?>
								<tr>
									<th scope="row"><?php echo $no ?></th>
									<td><?= $keu['keterangan_harian']; ?></td>
									<td><?= $keu['tanggal']; ?></td>
									<td><?php echo "Rp ".number_format($keu['debit_harian'],2,',',',');  ?></td>
									<td><?php echo "Rp ".number_format($keu['kredit_harian'],2,',',',');  ?></td>

								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan="3">Total</th>
								<th><?= "Rp ".number_format($jum1,2,',',','); ?></th>
								<th><?= "Rp ".number_format($jum2,2,',',','); ?></th>

							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<script type="text/javascript">
// $(function(){
	$(".datepicker").datepicker({
		format: 'dd-mm-yyyy',
		autoclose: true,
		todayHighlight: false,
	});
	$("#tgl_mulai").on('changeDate', function(selected) {
		var startDate = new Date(selected.date.valueOf());
		$("#tgl_akhir").datepicker('setStartDate', startDate);
		if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
			$("#tgl_akhir").val($("#tgl_mulai").val());
		}
	});
});	

</script>

<script type="text/javascript">

	function cetak(){
		var printContent = document.getElementById("cetak").innerHTML;
		var originalContent = document.body.innerHTML;
		document.body.innerHTML = printContent;
		window.print();
		document.body.innerHTML = originalContent;
	}
	
</script>


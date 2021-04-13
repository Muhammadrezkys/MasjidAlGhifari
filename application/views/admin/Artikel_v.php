 <?php
include "koneksi.php";
?> 
<div class="container-fluid">
	<div class="alert- alert success" role='alert'>
		<i class="fas fa-univeristy"></i> ARTIKEL

	</div>
	
	<div class="card shadow mb-4">	
		<div class="card-body">
			<!-- <br>
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
			<br> -->
			<?php if( $this->session->flashdata('pesan')){ ?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<?= $this->session->flashdata('pesan'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php } ?>
			<a href="<?= site_url('Artikel_control/Tambah_artikel')?>" class="btn btn-primary btn-icon-split mb-2" 
				<?php $this->session->userdata('role_id')==3?print(''):print('hidden');?>>

				<span class="icon text-white-50">
					<i class="fas fa-plus"></i>
				</span>
				<span class="text">Tambah Data</span>
			</a>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No.</th>
							<th>Gambar</th>
							<th>Judul Artikel</th>
							<th>Isi Artikel</th>
							<th>Tanggal</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody> 
						<?php 
						$no=1;
						if(isset($_POST['tampil_data'])){
							$data_artikel = mysqli_query($koneksi, "SELECT * FROM artikel");
						}
						if (isset($_POST['filter'])) {
							$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
							$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
							$data_artikel = mysqli_query($koneksi, "SELECT * from artikel WHERE tanggal between '$dari_tgl' and '$sampai_tgl'");
							
													
						}else{
							$data_artikel = mysqli_query($koneksi, "SELECT * FROM artikel");
						}

						foreach ($data_artikel as $art) : ?>

							<tr> 
								<td><?php echo $no++ ?></td>
								<td width="100px" ><figure><img src="<?= base_url(''); ?>uploads/<?= $art['gambar']; ?> " style="width: 300%; float: left;" class="img-fluid"></figure></td>
								<td><?php echo $art['judul_artikel'] ?></td>
								<td ><?php echo word_limiter ($art['isi_artikel'],30) ?></td>
								<td><?php echo $art['tanggal'] ?></td>
								<td>
									<a href="<?= site_url('Artikel_control/ubah_artikel/'.$art['id_artikel'])?>" class="btn btn-primary btn-circle mr-2" <?php $this->session->userdata('role_id')==3?print(''):print('hidden');?>>
										<i class="fas fa-edit"></i>
									</a>
									<button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#Mymodal<?= $art['id_artikel'] ?>" <?php $this->session->userdata('role_id')==3?print(''):print('hidden');?>>
										<i class="fas fa-trash"></i>
									</button>	
								</td>								
							</tr>
							<div class="modal fade" id="Mymodal<?= $art['id_artikel'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>
										<div class="modal-body">Apakah anda yakin menghapus artikel ini?</div>
										<div class="modal-footer">
											<button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
											<a id="btn-logout"class="btn btn-primary" href="<?= site_url('Artikel_control/hapus_artikel_aksi/'.$art['id_artikel']);?>">Ya, saya yakin</a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach;?>						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>

<?php
include "koneksi.php";
?> 
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
		<i class="fas fa-univeristy"></i> KEUANGAN BULANAN	

	</div>
	
	<div class="alert- alert success" role='alert'>
		<i class="fas fa-univeristy"></i> PEMASUKAN RUTIN
	</div>
	<div class="card shadow mb-4">	
		<div class="card-body">
			<a href="<?= site_url('Keuangan_bulanan_control/tambah_bulanan')?>" class="btn btn-primary btn-icon-split mb-2">
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
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
				<?php if( $this->session->flashdata('pesan')){ ?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('pesan'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php } ?>
											<!-- <a href="<?= site_url('Keuangan_bulanan_control/tambah_bulanan')?>" class="btn btn-primary btn-icon-split mb-2" <?php $this->session->userdata('role_id')==2?print(''):print('hidden');?>>
												<span class="icon text-white-50">
													<i class="fas fa-plus"></i>
												</span>
												<span class="text">Tambah Data</span>
											</a> -->			
											<!-- <button type="button" onclick="cetak()" class="btn btn-primary btn-icon-split mb-2">
												<span class="icon text-white-50">
													<i class="fas fa-print"></i>
												</span>
												<span class="text">Cetak Data</span>
											</button> -->
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
														$no=1;
														$jum1=0;
														$jum2=0;
														if(isset($_POST['tampil_data'])){
															$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
														}
														if (isset($_POST['filter'])) {
															$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
															$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
															$data_bulanan = mysqli_query($koneksi, "SELECT * from keuangan_bulanan WHERE tanggal between '$dari_tgl' and '$sampai_tgl'");


														}else{
															$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
														}
														foreach ($data_bulanan as $kb) :
															if($kb['role_id'] == 1){


																?>
																<tr> 
																	<td><?php echo $no++ ?></td>
																	<td><?php echo $kb['keterangan'] ?></td>
																	<td><?php echo $kb['tanggal']?></td>
																	<td><?php echo "Rp ".number_format($kb['debit_bulanan'],2,',',',');  ?></td>
																	<td><?php echo "Rp ".number_format($kb['kredit_bulanan'],2,',',','); ?></td>
																	<td>
																		<a href="<?= site_url('Keuangan_bulanan_control/ubah_bulanan/'.$kb['id_bulanan'])?>" class="btn btn-primary btn-circle mr-2">
																			<i class="fas fa-edit"></i>
																		</a>
																		<button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#Mymodal<?= $kb['id_bulanan'] ?>">
																			<i class="fas fa-trash"></i>
																		</button>	
																	</td>								
																</tr>
																<div class="modal fade" id="Mymodal<?= $kb['id_bulanan']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																	<div class="modal-dialog" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
																				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">×</span>
																				</button>
																			</div>
																			<div class="modal-body">Apakah anda yakin menghapus Keuangan Bulanan ini?</div>
																			<div class="modal-footer">
																				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
																				<a id="btn-logout"class="btn btn-primary" href="<?= site_url('Keuangan_bulanan_control/hapus_bulanan_aksi/'.$kb['id_bulanan']);?>">Ya, saya yakin</a>
																			</div>
																		</div>
																	</div>
																</div>

																<?php
															} 
															$jum1 += $kb['debit_bulanan'];
															$jum2 += $kb['kredit_bulanan'];
															?>

														<?php endforeach;?>
													</tbody>
													<tfoot>
														<tr>
							<!-- <th colspan="3">Total</th>
							<th><?= "Rp ".number_format($jum1,2,',',','); ?></th>
							<th><?= "Rp ".number_format($jum2,2,',',','); ?></th>
							<th style="background: white"></th> -->
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>

	<div class="alert- alert success" role='alert'>
		<i class="fas fa-univeristy"></i> PEMASUKAN NON-RUTIN

	</div>
	<div class="card shadow mb-4">

		<div class="card-body">


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
						$no=1;
						$jum1=0;
						$jum2=0;
						if(isset($_POST['tampil_data'])){
							$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
						}
						if (isset($_POST['filter'])) {
							$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
							$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
							$data_bulanan = mysqli_query($koneksi, "SELECT * from keuangan_bulanan WHERE tanggal between '$dari_tgl' and '$sampai_tgl'");
							

						}else{
							$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
						}
						foreach ($data_bulanan as $kb) : 
							if($kb['role_id'] == 2){
								?>
								<tr> 
									<td><?php echo $no++ ?></td>
									<td><?php echo $kb['keterangan'] ?></td>
									<td><?php echo $kb['tanggal']?></td>
									<td><?php echo "Rp ".number_format($kb['debit_bulanan'],2,',',',');  ?></td>
									<td><?php echo "Rp ".number_format($kb['kredit_bulanan'],2,',',','); ?></td>
									<td>
										<a href="<?= site_url('Keuangan_bulanan_control/ubah_bulanan/'.$kb['id_bulanan'])?>" class="btn btn-primary btn-circle mr-2">
											<i class="fas fa-edit"></i>
										</a>
										<button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#Mymodal<?= $kb['id_bulanan'] ?>">
											<i class="fas fa-trash"></i>
										</button>	
									</td>								
								</tr>
								<div class="modal fade" id="Mymodal<?= $kb['id_bulanan']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
												<button class="close" type="button" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">Apakah anda yakin menghapus Keuangan Bulanan ini?</div>
											<div class="modal-footer">
												<button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
												<a id="btn-logout"class="btn btn-primary" href="<?= site_url('Keuangan_bulanan_control/hapus_bulanan_aksi/'.$kb['id_bulanan']);?>">Ya, saya yakin</a>
											</div>
										</div>
									</div>
								</div>
								<?php
							} 
							$jum1 += $kb['debit_bulanan'];
							$jum2 += $kb['kredit_bulanan'];
							?>
						<?php endforeach;?>
					</tbody>
					<tfoot>
						<tr>
							<!-- <th colspan="3">Total</th> -->
								<!-- <th><?= "Rp ".number_format($jum1,2,',',','); ?></th>
									<th><?= "Rp ".number_format($jum2,2,',',','); ?></th> -->
									<!-- <th style="background: white"></th> -->
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>

			<div class="alert- alert success" role='alert'>
				<i class="fas fa-univeristy"></i> PENGELUARAN RUTIN
			</div>
			<div class="card shadow mb-4">	
				<div class="card-body">

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
								$no=1;
								$jum1=0;
								$jum2=0;
								if(isset($_POST['tampil_data'])){
									$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
								}
								if (isset($_POST['filter'])) {
									$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
									$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
									$data_bulanan = mysqli_query($koneksi, "SELECT * from keuangan_bulanan WHERE tanggal between '$dari_tgl' and '$sampai_tgl'");


								}else{
									$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
								}
								foreach ($data_bulanan as $kb) : 
									if($kb['role_id'] == 3){
										?>
										<tr> 
											<td><?php echo $no++ ?></td>
											<td><?php echo $kb['keterangan'] ?></td>
											<td><?php echo $kb['tanggal']?></td>
											<td><?php echo "Rp ".number_format($kb['debit_bulanan'],2,',',',');  ?></td>
											<td><?php echo "Rp ".number_format($kb['kredit_bulanan'],2,',',','); ?></td>
											<td>
												<a href="<?= site_url('Keuangan_bulanan_control/ubah_bulanan/'.$kb['id_bulanan'])?>" class="btn btn-primary btn-circle mr-2">
													<i class="fas fa-edit"></i>
												</a>
												<button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#Mymodal<?= $kb['id_bulanan'] ?>">
													<i class="fas fa-trash"></i>
												</button>	
											</td>								
										</tr>
										<div class="modal fade" id="Mymodal<?= $kb['id_bulanan']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
														<button class="close" type="button" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
													</div>
													<div class="modal-body">Apakah anda yakin menghapus Keuangan Bulanan ini?</div>
													<div class="modal-footer">
														<button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
														<a id="btn-logout"class="btn btn-primary" href="<?= site_url('Keuangan_bulanan_control/hapus_bulanan_aksi/'.$kb['id_bulanan']);?>">Ya, saya yakin</a>
													</div>
												</div>
											</div>
										</div>
										<?php
									} 
									$jum1 += $kb['debit_bulanan'];
									$jum2 += $kb['kredit_bulanan'];
									?>
								<?php endforeach;?>
							</tbody>
								<!-- <tfoot>
									<tr>
										<th colspan="3">Total</th> 
										<th><?= "Rp ".number_format($jum1,2,',',','); ?></th>
										<th><?= "Rp ".number_format($jum2,2,',',','); ?></th>
										<th style="background: white"></th>
									</tr>
								</tfoot> -->
							</table>
						</div>
					</div>
				</div>

				<div class="alert- alert success" role='alert'>
					<i class="fas fa-univeristy"></i> PENGELUARAN NON-RUTIN
				</div>
				<div class="card shadow mb-4">	
					<div class="card-body">

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
									$no=1;
									$jum1=0;
									$jum2=0;
									if(isset($_POST['tampil_data'])){
										$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
									}
									if (isset($_POST['filter'])) {
										$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
										$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
										$data_bulanan = mysqli_query($koneksi, "SELECT * from keuangan_bulanan WHERE tanggal between '$dari_tgl' and '$sampai_tgl'");


									}else{
										$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
									}
									foreach ($data_bulanan as $kb) : 
										if($kb['role_id'] == 4){
											?>
											<tr> 
												<td><?php echo $no++ ?></td>
												<td><?php echo $kb['keterangan'] ?></td>
												<td><?php echo $kb['tanggal']?></td>
												<td><?php echo "Rp ".number_format($kb['debit_bulanan'],2,',',',');  ?></td>
												<td><?php echo "Rp ".number_format($kb['kredit_bulanan'],2,',',','); ?></td>
												<td>
													<a href="<?= site_url('Keuangan_bulanan_control/ubah_bulanan/'.$kb['id_bulanan'])?>" class="btn btn-primary btn-circle mr-2">
														<i class="fas fa-edit"></i>
													</a>
													<button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#Mymodal<?= $kb['id_bulanan'] ?>">
														<i class="fas fa-trash"></i>
													</button>	
												</td>								
											</tr>
											<div class="modal fade" id="Mymodal<?= $kb['id_bulanan']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
															<button class="close" type="button" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
														</div>
														<div class="modal-body">Apakah anda yakin menghapus Keuangan Bulanan ini?</div>
														<div class="modal-footer">
															<button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
															<a id="btn-logout"class="btn btn-primary" href="<?= site_url('Keuangan_bulanan_control/hapus_bulanan_aksi/'.$kb['id_bulanan']);?>">Ya, saya yakin</a>
														</div>
													</div>
												</div>
											</div>
											<?php
										} 
										$jum1 += $kb['debit_bulanan'];
										$jum2 += $kb['kredit_bulanan'];
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
						</div>
					</div>
				</div>

				<div hidden class="container" id="cetak">
					<h3 class="text-center">Laporan Keuangan Bulanan</h3>
					<h3 class="text-center">Masjid AL Ghifari</h3>
					<h4 class="text-center">Tanggal Diunduh: <?= date('d/m/y') ?></h4>


					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th colspan="5">PEMASUKAN RUTIN</th>
									
								</tr>
								<tr>
									<th>No.</th>
									<th>Keterangan</th>
									<th>Tanggal</th>
									<th>Debit</th>
									<th>Kredit</th>


								</tr>
							</thead>
							<tbody>
								<?php 
								$no = 0;
								$jum1=0;
								$jum2=0;
								if(isset($_POST['tampil_data'])){
									$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
								}
								if (isset($_POST['filter'])) {
									$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
									$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
									$data_bulanan = mysqli_query($koneksi, "SELECT * from keuangan_bulanan WHERE tanggal between '$dari_tgl' and '$sampai_tgl'");


								}else{
									$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
								}
								foreach($data_bulanan as $kb){
									if($kb['role_id'] == 1){ 
										$no++;?>
										<?php 
										$jum1 += $kb['debit_bulanan'];
										$jum2 += $kb['kredit_bulanan'];
										?>
										<tr>
											<td scope="row"><?php echo $no ?></td>
											<td><?= $kb['keterangan']; ?></td>
											<td><?= $kb['tanggal']; ?></td>
											<td><?php echo "Rp ".number_format($kb['debit_bulanan'],2,',',',');  ?></td>
											<td><?php echo "Rp ".number_format($kb['kredit_bulanan'],2,',',',');  ?></td>


										</tr>
										<tr>

										</tr>

									<?php } }?>
								</tbody>
								<!-- <tfoot>
									<tr>
										<th colspan="3">Total</th> 
										<th><?= "Rp ".number_format($jum1,2,',',','); ?></th>
										<th><?= "Rp ".number_format($jum2,2,',',','); ?></th> 
									</tr> 
								</tfoot> -->
							</table>
						</div>


						<!-- <div class="alert- alert success" role='alert'>
							<i class="fas fa-univeristy"></i> PEMASUKAN NON-RUTIN
						</div> -->
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th colspan="5">PEMASUKAN NON-RUTIN</th>
										
									</tr>
									<tr>
										<th>No.</th>
										<th>Keterangan</th>
										<th>Tanggal</th>
										<th>Debit</th>
										<th>Kredit</th>

									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 0;
									$jum1=0;
									$jum2=0;
									if(isset($_POST['tampil_data'])){
										$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
									}
									if (isset($_POST['filter'])) {
										$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
										$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
										$data_bulanan = mysqli_query($koneksi, "SELECT * from keuangan_bulanan WHERE tanggal between '$dari_tgl' and '$sampai_tgl'");


									}else{
										$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
									}
									foreach($data_bulanan as $kb){ 
										if($kb['role_id'] == 2){
											$no++;?>
											<?php 
											$jum1 += $kb['debit_bulanan'];
											$jum2 += $kb['kredit_bulanan'];
											?>
											<tr>
												<th scope="row"><?php echo $no ?></th>
												<td><?= $kb['keterangan']; ?></td>
												<td><?= $kb['tanggal']; ?></td>
												<td><?php echo "Rp ".number_format($kb['debit_bulanan'],2,',',',');  ?></td>
												<td><?php echo "Rp ".number_format($kb['kredit_bulanan'],2,',',',');  ?></td>

											</tr>
										<?php }} ?>
									</tbody>
									<tfoot>
										<tr>
											<!-- <th colspan="3">Total</th> -->
											<!-- <th><?= "Rp ".number_format($jum1,2,',',','); ?></th>
												<th><?= "Rp ".number_format($jum2,2,',',','); ?></th> -->
											</tr>
										</tfoot>
									</table>
								</div>
								
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th colspan="5">PENGELUARAN RUTIN</th>
												
											</tr>
											<!-- <div class="alert- alert success" role='alert'>
												<i class="fas fa-univeristy"></i> PENGELUARAN RUTIN
											</div> -->
											<tr>
												<th>No.</th>
												<th>Keterangan</th>
												<th>Tanggal</th>
												<th>Debit</th>
												<th>Kredit</th>

											</tr>
										</thead>
										<tbody>
											<?php 
											$no = 0;
											$jum1=0;
											$jum2=0;
											if(isset($_POST['tampil_data'])){
												$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
											}
											if (isset($_POST['filter'])) {
												$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
												$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
												$data_bulanan = mysqli_query($koneksi, "SELECT * from keuangan_bulanan WHERE tanggal between '$dari_tgl' and '$sampai_tgl'");


											}else{
												$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
											}
											foreach($data_bulanan as $kb){
												if($kb['role_id'] == 3){ 
													$no++;?>
													<?php 
													$jum1 += $kb['debit_bulanan'];
													$jum2 += $kb['kredit_bulanan'];
													?>
													<tr>
														<th scope="row"><?php echo $no ?></th>
														<td><?= $kb['keterangan']; ?></td>
														<td><?= $kb['tanggal']; ?></td>
														<td><?php echo "Rp ".number_format($kb['debit_bulanan'],2,',',',');  ?></td>
														<td><?php echo "Rp ".number_format($kb['kredit_bulanan'],2,',',',');  ?></td>

													</tr>
												<?php } }?>
											</tbody>
											<tfoot>
												<tr>
													<!-- <th colspan="3">Total</th> -->
														<!-- <th><?= "Rp ".number_format($jum1,2,',',','); ?></th>
															<th><?= "Rp ".number_format($jum2,2,',',','); ?></th> -->
														</tr>
													</tfoot>
												</table>
											</div>
											<!-- <div class="alert- alert success" role='alert'>
												<i class="fas fa-univeristy"></i> PENGELUARAN NON-RUTIN
											</div> -->
											<div class="table-responsive">
												<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
													<thead>
														<tr>
															<th colspan="5">PENGELUARAN NON RUTIN</th>
															
														</tr>
														<tr>
															<th>No.</th>
															<th>Keterangan</th>
															<th>Tanggal</th>
															<th>Debit</th>
															<th>Kredit</th>

														</tr>
													</thead>
													<tbody>
														<?php 
														$no = 0;
														$jum1=0;
														$jum2=0;
														if(isset($_POST['tampil_data'])){
															$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
														}
														if (isset($_POST['filter'])) {
															$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
															$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
															$data_bulanan = mysqli_query($koneksi, "SELECT * from keuangan_bulanan WHERE tanggal between '$dari_tgl' and '$sampai_tgl'");


														}else{
															$data_bulanan = mysqli_query($koneksi, "SELECT * FROM keuangan_bulanan");
														}
														foreach($data_bulanan as $kb){
															if($kb['role_id'] == 4){ 
																$no++;?>
																<?php 
																$jum1 += $kb['debit_bulanan'];
																$jum2 += $kb['kredit_bulanan'];
																?>
																<tr>
																	<th scope="row"><?php echo $no ?></th>
																	<td><?= $kb['keterangan']; ?></td>
																	<td><?= $kb['tanggal']; ?></td>
																	<td><?php echo "Rp ".number_format($kb['debit_bulanan'],2,',',',');  ?></td>
																	<td><?php echo "Rp ".number_format($kb['kredit_bulanan'],2,',',',');  ?></td>

																</tr>
															<?php } }?>
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
										<!-- </div>
									</div>
								</div>
							</div>
						</div>  -->





						


						




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


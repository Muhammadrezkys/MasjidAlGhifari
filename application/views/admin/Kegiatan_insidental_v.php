<div class="container-fluid">
	<div class="alert- alert success" role='alert'>
		<i class="fas fa-univeristy"></i> KEGIATAN INSIDENTAL
	</div>
	<div class="card shadow mb-4">	
		<div class="card-body">
			<?php if( $this->session->flashdata('pesan')){ ?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<?= $this->session->flashdata('pesan'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php } ?>
			<a href="<?= site_url('Kegiatan_insidental_control/tambah_kegiatan')?>" class="btn btn-primary btn-icon-split mb-2" 
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
							<th>Judul Kegiatan</th>
							<th>Isi Kegiatan</th>
							<th>Tanggal</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$no=1;
						foreach ($kegiatan as $keg) : ?>
							<tr> 
								<td><?php echo $no++ ?></td>
								<td width="100px" ><figure><img src="<?= base_url(''); ?>uploads/<?= $keg->gambar; ?> " style="width: 300%; float: left;" class="img-fluid"></figure></td>
								<td><?php echo $keg->judul_kegiatan ?></td>
								<td><?php echo $keg->isi_kegiatan ?></td>
								<td><?php echo $keg->tanggal ?></td>
								<td>
									<a href="<?= site_url('Kegiatan_insidental_control/ubah_kegiatan/'.$keg->id_kegiatan)?>" class="btn btn-primary btn-circle mr-2" <?php $this->session->userdata('role_id')==3?print(''):print('hidden');?>>
										<i class="fas fa-edit"></i>
									</a>
									<button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#Mymodal<?= $keg->id_kegiatan ?>" <?php $this->session->userdata('role_id')==3?print(''):print('hidden');?>>
										<i class="fas fa-trash"></i>
									</button>	
								</td>								
							</tr>
							<div class="modal fade" id="Mymodal<?= $keg->id_kegiatan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>
										<div class="modal-body">Apakah anda yakin menghapus kegiatan ini?</div>
										<div class="modal-footer">
											<button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
											<a id="btn-logout"class="btn btn-primary" href="<?= site_url('Kegiatan_insidental_control/hapus_kegiatan_aksi/'.$keg->id_kegiatan);?>">Ya, saya yakin</a>
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

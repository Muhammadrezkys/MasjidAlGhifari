<div class="container-fluid">
	<div class="alert- alert success" role='alert'>
		<i class="fas fa-univeristy"></i> PENGUMUMAN

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
			<a href="<?= site_url('Pengumuman_control/tambah_pengumuman')?>" class="btn btn-primary btn-icon-split mb-2" <?php $this->session->userdata('role_id')==3?print(''):print('hidden');?>>
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
							<th>Judul Pengumuman</th>
							<th>Isi Pengumuman</th>
							<th>Tanggal Pengumuman</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$no=1;
						foreach ($pengumuman as $peng) : ?>
							<tr> 
								<td><?php echo $no++ ?></td>
								<td width="100px" ><figure><img src="<?= base_url(''); ?>uploads/<?= $peng->gambar; ?> " style="width: 300%; float: left;" class="img-fluid"></figure></td>
								<td><?php echo $peng->judul_pengumuman ?></td>
								<td><?php echo $peng->isi_pengumuman ?></td>
								<td><?php echo $peng->tanggal ?></td>
								<td>
									<a href="<?= site_url('Pengumuman_control/ubah_pengumuman/'.$peng->id_pengumuman)?>" class="btn btn-primary btn-circle mr-2" <?php $this->session->userdata('role_id')==3?print(''):print('hidden');?>>
										<i class="fas fa-edit"></i>
									</a>
									<button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#Mymodal<?= $peng->id_pengumuman ?>" <?php $this->session->userdata('role_id')==3?print(''):print('hidden');?>>
										<i class="fas fa-trash"></i>
									</button>	
								</td>								
							</tr>
							<div class="modal fade" id="Mymodal<?= $peng->id_pengumuman ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>
										<div class="modal-body">Apakah anda yakin menghapus pengumuman ini?</div>
										<div class="modal-footer">
											<button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
											<a id="btn-logout"class="btn btn-primary" href="<?= site_url('Pengumuman_control/hapus_pengumuman_aksi/'.$peng->id_pengumuman);?>">Ya, saya yakin</a>
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

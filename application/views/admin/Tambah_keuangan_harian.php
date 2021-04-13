<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> TAMBAH KEUANGAN HARIAN</h2>
	</div>
	<?php if (validation_errors())
	$this->form_validation->set_rules('keterangan_harian', 'Keterangan', 'trim|required');
	$this->form_validation->set_rules('debit_harian', 'Debet Jurnal', 'trim|required');
	$this->form_validation->set_rules('kredit_harian', 'Kredit Jurnal', 'trim|required');
	$this->form_validation->set_rules('tanggal_harian', 'Tanggal', 'trim|required');
	{?>
		<div class="alert-danger">
			<?php echo validation_errors(); ?>
		</div>
		<?php
	} ?>
	<form action="<?php echo base_url()?>Keuangan_harian_control/tambah_harian_aksi" method="post">
		<form class="form-horizontal" method="post" action="<?= site_url('Keuangan_harian_control/tambah_harian_aksi')?>" >
			<div class="form-group">
				<label>Tanggal Harian</label>
				<input onfocus="(this.type='date')" class="form-control" name="tanggal_harian" value="<?= set_value('tanggal_harian')?>">
				<?= form_error('tanggal_harian','<small class="text-danger pl-3">','</small>');?>
			</div>
			
			<div class="form-group">
				<label>Keterangan Harian</label>
				<input type="text" name="keterangan_harian" class="form-control" value="<?= set_value('keterangan_harian')?>">
				<?= form_error('keterangan_harian','<small class="text-danger pl-3">','</small>');?>
			</div>

			<div class="form-group">
				<label>Debit</label>
				<input type="number" name="debit_harian"  class="form-control" value="<?= set_value('debit_harian')?>">
				<?= form_error('debit_harian','<small class="text-danger pl-3">','</small>');?>
			</div>

			<div class="form-group">
				<label>Kredit</label>
				<input type="number" name="kredit_harian"  class="form-control" value="<?= set_value('kredit_harian')?>">
				<?= form_error('kredit_harian','<small class="text-danger pl-3">','</small>');?>
			</div>
			

			<button class="btn btn-primary btn-user btn-block" type="submit">
				Simpan
			</button>
			
		</form> 
	</div>
</div>

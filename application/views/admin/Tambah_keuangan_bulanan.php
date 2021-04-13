<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> TAMBAH KEUANGAN BULANAN</h2>
	</div>
	<div class="container">
		<?php if (validation_errors())
		$this->form_validation->set_rules('keterangan_bulanan', 'Keterangan', 'trim|required');
 		$this->form_validation->set_rules('debit_bulanan', 'Debit bulanan', 'trim|required');
 		$this->form_validation->set_rules('kredit_bulanan', 'Kredit bulanan', 'trim|required');
 		$this->form_validation->set_rules('tanggal_bulanan', 'Tanggal', 'trim|required');
		{?>
			<div class="alert-danger">
				<?php echo validation_errors(); ?>
			</div>
			<?php
		} ?>
	<form class="form-horizontal" method="post" action="<?= site_url('Keuangan_bulanan_control/tambah_bulanan_aksi')?>" >
	<div class="form-group">
			<label>Tanggal Bulanan</label>
			<input onfocus="(this.type='date')" class="form-control" name="tanggal_bulanan" value="<?= set_value('tanggal_bulanan')?>">
			<?= form_error('tanggal_bulanan','<small class="text-danger pl-3">','</small>');?>
		</div>
		
		<div class="form-group">
			<label>Keterangan Bulanan</label>
			<input type="text" name="keterangan_bulanan" class="form-control" value="<?= set_value('keterangan_bulanan')?>">
			<?= form_error('keterangan_bulanan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Debit</label>
			<input type="number" name="debit_bulanan"  class="form-control" value="<?= set_value('debit_bulanan')?>">
			<?= form_error('debit_bulanan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Kredit</label>
			<input type="number" name="kredit_bulanan"  class="form-control" value="<?= set_value('kredit_bulanan')?>">
			<?= form_error('kredit_bulanan','<small class="text-danger pl-3">','</small>');?>
		</div>
		
		<div class="form-group">
			<label>Jenis Keuangan</label>
			<select class= "form-control" style="width: 100%" name="Jenis_keuangan" required>
				<option selected disabled>Pilih</option>
				<option value='1'>Pemasukan Rutin</option>
				<option value='2'>Pemasukan Non-Rutin</option>
				<option value='3'>Pengeluaran Rutin</option>
				<option value='4'>Pengeluaran Non-Rutin</option>
			</select>
			<?= form_error('Jenis_keuangan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<button class="btn btn-primary btn-user btn-block" type="submit">
			Simpan
		</button>
		
	 </form> 
	</div>
</div>
</div>
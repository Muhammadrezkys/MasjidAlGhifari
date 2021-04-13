<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> UBAH KEUANGAN HARIAN</h2>
	</div>
	<form class="form-horizontal" method="post" action="<?= site_url('Keuangan_harian_control/ubah_harian_aksi/'.$keuangan_harian->id_harian)?>" >
		<div class="form-group">
			<label>Tanggal Harian</label>
			<input onfocus="(this.type='date')" required class="form-control" name="tanggal_harian" value="<?= $keuangan_harian->tanggal ?>">
			<?= form_error('tanggal_harian','<small class="text-danger pl-3">','</small>');?>
		</div>
		
		<div class="form-group">
			<label>Keterangan Harian</label>
			<input type="text" name="keterangan_harian" required class="form-control" value="<?= $keuangan_harian->keterangan_harian; ?>">
			<?= form_error('keterangan_harian','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Debit </label>
			<input type="number" name="debit_harian" required class="form-control" value="<?= $keuangan_harian->debit_harian; ?>">
			<?= form_error('debit_harian','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Kredit </label>
			<input type="number" name="kredit_harian" required class="form-control" value="<?= $keuangan_harian->kredit_harian; ?>">
			<?= form_error('kredit_harian','<small class="text-danger pl-3">','</small>');?>
		</div>

		<button class="btn btn-primary btn-user btn-block" type="submit">
			Simpan
		</button>
	</form>
</div>
</div>
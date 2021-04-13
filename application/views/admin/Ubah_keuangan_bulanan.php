<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> UBAH KEUANGAN BULANAN</h2>
	</div>
	<form class="form-horizontal" method="post" action="<?= site_url('Keuangan_bulanan_control/ubah_bulanan_aksi/'.$keuangan_bulanan->id_bulanan)?>" >
		<div class="form-group">
			<label>Tanggal Bulanan</label>
			<input onfocus="(this.type='date')" required class="form-control" name="tanggal_bulanan" value="<?= $keuangan_bulanan->tanggal ?>">
			<?= form_error('tanggal_bulanan','<small class="text-danger pl-3">','</small>');?>
		</div>
		
		<div class="form-group">
			<label>Keterangan Bulanan</label>
			<input type="text" name="keterangan_bulanan" required class="form-control" value="<?= $keuangan_bulanan->keterangan; ?>">
			<?= form_error('keterangan_bulanan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Debit </label>
			<input type="number" name="debit_bulanan" required class="form-control" value="<?= $keuangan_bulanan->debit_bulanan; ?>">
			<?= form_error('debit_bulanan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Kredit </label>
			<input type="number" name="kredit_bulanan" required class="form-control" value="<?= $keuangan_bulanan->kredit_bulanan; ?>">
			<?= form_error('kredit_bulanan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<button class="btn btn-primary btn-user btn-block" type="submit">
			Simpan
		</button>
	</form>
</div>
</div>
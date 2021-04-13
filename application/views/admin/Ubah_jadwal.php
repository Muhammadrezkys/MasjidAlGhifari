<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> UBAH DAFTAR JADWAL SHOLAT</h2>
	</div>
	<form class="form-horizontal" method="post" action="<?= site_url('Jadwal_control/ubah_jadwal_aksi/'.$jadwal->id_jadwal)?>" >


		<div class="form-group">
			<label>Tanggal Jadwal</label>
			<input onfocus="(this.type='date')" required class="form-control" name="tanggal_jadwal" value="<?= $jadwal->tanggal ?>">
			<?= form_error('tanggal_jadwal','<small class="text-danger pl-3">','</small>');?>
		</div>


		<div class="form-group">
			<label>Jadwal Subuh</label>
			<input onfocus="(this.type='time')" required class="form-control" name="jadwal_subuh" value="<?= $jadwal->jadwal_subuh ?>">
			<?= form_error('jadwal_subuh','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Jadwal Zuhur</label>
			<input onfocus="(this.type='time')" required class="form-control" name="jadwal_zuhur" value="<?= $jadwal->jadwal_zuhur ?>">
			<?= form_error('jadwal_zuhur','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Jadwal Asar</label>
			<input onfocus="(this.type='time')" required class="form-control" name="jadwal_asar" value="<?= $jadwal->jadwal_asar ?>">
			<?= form_error('jadwal_asar','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Jadwal Magrib</label>
			<input onfocus="(this.type='time')" required class="form-control" name="jadwal_magrib" value="<?= $jadwal->jadwal_magrib ?>">
			<?= form_error('jadwal_magrib','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Jadwal Isya</label>
			<input onfocus="(this.type='time')" required class="form-control" name="jadwal_isya" value="<?= $jadwal->jadwal_isya ?>">
			<?= form_error('jadwal_isya','<small class="text-danger pl-3">','</small>');?>
		</div>

		<button class="btn btn-primary btn-user btn-block" type="submit">
			Simpan
		</button>
	</form>
</div>
</div>
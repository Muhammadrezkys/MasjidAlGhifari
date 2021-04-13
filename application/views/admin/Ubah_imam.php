<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> UBAH DAFTAR IMAM</h2>
	</div>
	<form class="form-horizontal" method="post" action="<?= site_url('Imam_control/ubah_imam_aksi/'.$imam->id_imam)?>" >


		<div class="form-group">
			<label>Tanggal Imam</label>
			<input onfocus="(this.type='date')" required class="form-control" name="tanggal_imam" value="<?= $imam->tanggal ?>">
			<?= form_error('tanggal_imam','<small class="text-danger pl-3">','</small>');?>
		</div>


		<div class="form-group">
			<label>Imam Subuh</label>
			<input type="text" name="imam_subuh" required class="form-control" value="<?= $imam->imam_subuh; ?>">
			<?= form_error('imam_subuh','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Imam Zuhur</label>
			<input type="text" name="imam_zuhur" required class="form-control" value="<?= $imam->imam_zuhur; ?>">
			<?= form_error('imam_zuhur','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Imam Asar</label>
			<select class= "form-control" style="width: 100%" name="imam_asar" required>
				<option selected><?= $imam->imam_asar; ?></option>
				<option <?php $imam->imam_asar=='Budi'? print_r('hidden'): '' ?>>Budi</option>
				<option <?php $imam->imam_asar=='Burhan'? print_r('hidden'): '' ?>>Burhan</option>
				<option <?php $imam->imam_asar=='Bambang'? print_r('hidden'): '' ?>>Bambang</option>
				<option <?php $imam->imam_asar=='Sutiyoso'? print_r('hidden'): '' ?>>Sutiyoso</option>
			</select>
			<?= form_error('imam_asar','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Imam Magrib</label>
			<select class= "form-control" style="width: 100%" name="imam_magrib" required>
				<option selected><?= $imam->imam_magrib; ?></option>
				<option <?php $imam->imam_magrib=='Budi'? print_r('hidden'): '' ?>>Budi</option>
				<option <?php $imam->imam_magrib=='Burhan'? print_r('hidden'): '' ?>>Burhan</option>
				<option <?php $imam->imam_magrib=='Bambang'? print_r('hidden'): '' ?>>Bambang</option>
				<option <?php $imam->imam_magrib=='Sutiyoso'? print_r('hidden'): '' ?>>Sutiyoso</option>
			</select>
			<?= form_error('imam_magrib','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Imam Isya</label>
			<select class= "form-control" style="width: 100%" name="imam_isya" required>
				<option selected><?= $imam->imam_isya; ?></option>
				<option <?php $imam->imam_isya=='Budi'? print_r('hidden'): '' ?>>Budi</option>
				<option <?php $imam->imam_isya=='Burhan'? print_r('hidden'): '' ?>>Burhan</option>
				<option <?php $imam->imam_isya=='Bambang'? print_r('hidden'): '' ?>>Bambang</option>
				<option <?php $imam->imam_isya=='Sutiyoso'? print_r('hidden'): '' ?>>Sutiyoso</option>
			</select>
			<?= form_error('imam_isya','<small class="text-danger pl-3">','</small>');?>
		</div>

		<button class="btn btn-primary btn-user btn-block" type="submit">
			Simpan
		</button>
	</form>
</div>
</div>
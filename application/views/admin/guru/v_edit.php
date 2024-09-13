<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Form Edit Data Guru
			</div>
			<div class="panel-body">
				<?php

				echo validation_errors('<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' ,'</div>');
				if (isset($error_upload)) {
					echo '<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
					echo $error_upload;
					echo '</div>';
				}
				echo form_open_multipart('guru/edit/' . $guru->id_guru);
				?>
				<div class="form-group">
					<label>NIP</label>
					<input class="form-control" value="<?= $guru->nip ?>" type="number" name="nip" placeholder="NIP">
				</div>
				<div class="form-group">
					<label>Nama Guru</label>
					<input class="form-control" value="<?= $guru->nama_guru ?>" type="text" name="nama_guru" placeholder="Nama Guru">
				</div>
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input class="form-control" value="<?= $guru->tempat_lahir ?>" type="text" name="tempat_lahir" placeholder="Tempat Lahir">
				</div>
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input class="form-control" value="<?= $guru->tgl_lahir ?>" type="date" name="tgl_lahir">
				</div>
				<div class="form-group">
					<label>Mata Pelajaran</label>
					<select name="id_mapel" class="form-control">
						<option value="<?= $guru->id_mapel ?>"><?= $guru->nama_mapel ?></option>
						<?php foreach ($mapel as $key => $value) { ?>
							<option value="<?= $value->id_mapel ?>"><?= $value->nama_mapel ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Pendidikan</label>
					<select name="pendidikan" class="form-control">
						<option value="<?= $guru->pendidikan ?>"><?= $guru->pendidikan ?></option>
						<option value="SMA/SMK">SMA/SMK</option>
						<option value="D1">D1</option>
						<option value="D2">D2</option>
						<option value="D3">D3</option>
						<option value="D4">D4</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
					</select>
				</div>
				<div class="form-group">
					<img src="<?= base_url('foto_guru/' . $guru->foto_guru) ?>" class="img-fluid" width="100px">
					<hr>
					<label>Foto Guru</label>
					<input type="file" class="form-control" type="text" name="foto_guru">
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Simpan</button>
					<a href="<?= base_url('guru') ?>" class="btn btn-info">Kembali</a>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
		<!-- /.col-lg-4 -->
	</div>

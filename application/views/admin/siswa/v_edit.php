<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Form Edit Data Siswa
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
				echo form_open_multipart('siswa/edit/' . $siswa->id_siswa);
				?>
				<div class="form-group">
					<label>NIS</label>
					<input class="form-control" value="<?= $siswa->nis ?>" type="number" name="nis" placeholder="NIS">
				</div>
				<div class="form-group">
					<label>Nama Siswa</label>
					<input class="form-control" value="<?= $siswa->nama_siswa ?>" type="text" name="nama_siswa" placeholder="Nama Siswa">
				</div>
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input class="form-control" value="<?= $siswa->tempat_lahir ?>" type="text" name="tempat_lahir" placeholder="Tempat Lahir">
				</div>
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input class="form-control" value="<?= $siswa->tgl_lahir ?>" type="date" name="tgl_lahir">
				</div>
				<div class="form-group">
					<label>Kelas</label>
					<select name="kelas" class="form-control">
						<option value="<?= $siswa->kelas ?>"><?= $siswa->kelas ?></option>
						<option value="VII">VII</option>
						<option value="VIII">VIII</option>
						<option value="IX">XI</option>
					</select>
				</div>
				<div class="form-group">
					<img src="<?= base_url('foto_siswa/' . $siswa->foto_siswa) ?>" class="img-fluid" width="100px">
					<hr>
					<label>Foto siswa</label>
					<input type="file" class="form-control" type="text" name="foto_siswa">
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Simpan</button>
					<a href="<?= base_url('siswa') ?>" class="btn btn-info">Kembali</a>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
		<!-- /.col-lg-4 -->
	</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Form Tambah Data Siswa
			</div>
			<div class="panel-body">
				<?php

				if (isset($error_upload)) {
					echo '<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
					echo $error_upload;
					echo '</div>';
				}
				echo form_open_multipart('siswa/add');
				?>
				<div class="form-group">
					<label>NIS</label>
					<input class="form-control" type="number" name="nis" placeholder="NIS" required>
				</div>
				<div class="form-group">
					<label>Nama Siswa</label>
					<input class="form-control" type="text" name="nama_siswa" placeholder="Nama siswa" required>
				</div>
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
				</div>
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input class="form-control" type="date" name="tgl_lahir" required>
				</div>
				<div class="form-group">
					<label>Kelas</label>
					<select name="kelas" class="form-control">
						<option value="">-- Pilih kelas --</option>
						<option value="VII">VII</option>
						<option value="VIII">VIII</option>
						<option value="IX">XI</option>
					</select>
				</div>
				<div class="form-group">
					<label>Foto</label>
					<input type="file" class="form-control" type="text" name="foto_siswa" required>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Simpan</button>
					<button class="btn btn-danger" type="reset">Reset</button>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
		<!-- /.col-lg-4 -->
	</div>

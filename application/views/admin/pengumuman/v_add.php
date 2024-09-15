<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Form Tambah Data Pengumuman
			</div>
			<div class="panel-body">
				<?php

				if (isset($error_upload)) {
					echo '<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
					echo $error_upload;
					echo '</div>';
				}
				echo form_open('pengumuman/add');
				?>
				<div class="form-group">
					<label>Judul Pengumuman</label>
					<input class="form-control" type="text" name="judul_pengumuman" placeholder="Judul Pengumuman" required>
				</div>
				<div class="form-group">
					<label>Isi Pengumuman</label>
					<textarea name="isi_pengumuman" class="form-control" rows="10" required></textarea>
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

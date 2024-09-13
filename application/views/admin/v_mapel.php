<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<button type="button" class="btn btn-success btn-xs pt-4" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"> Tambah Data</button></i>
			</div>
			<div class="panel-body">
				<?php
				if ($this->session->flashdata('pesan')) {
					echo '<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
					echo $this->session->flashdata('pesan');
					echo '</div>';
				}
				?>
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>No</th>
							<th>Mata Pelajaran</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($mapel as $key => $value) { ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $value->nama_mapel ?></td>
								<td>
									<button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#edit<?= $value->id_mapel ?>"><i class="fa fa-edit"> Edit</button></i>
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete<?= $value->id_mapel ?>"><i class="fa fa-trash"> Hapus</button></i>
								</td>
							</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- /.col-lg-4 -->
	</div>

	<!-- Modal Add -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Tambah Data Mata Pelajaran</h4>
				</div>
				<div class="modal-body">
					<?php echo form_open('mapel/add'); ?>
					<div class="form-group">
						<label>Mata Pelajaran</label>
						<input class="form-control" type="text" name="nama_mapel" plaseholder="Mata Pelajaran" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php echo form_close(); ?>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Modal Edit -->
	<?php foreach ($mapel as $key => $value) { ?>
		<div class="modal fade" id="edit<?= $value->id_mapel ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Edit Data Mata Pelajaran</h4>
					</div>
					<div class="modal-body">
						<?php echo form_open('mapel/edit/' . $value->id_mapel); ?>
						<div class="form-group">
							<label>Mata Pelajaran</label>
							<input class="form-control" type="text" name="nama_mapel" value="<?= $value->nama_mapel ?>" plaseholder="Mata Pelajaran" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
					<?php echo form_close(); ?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal Edit -->
	<?php } ?>

	<!-- Modal Delete -->

	<?php foreach ($mapel as $key => $value) { ?>
		<div class="modal fade" id="delete<?= $value->id_mapel ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content col-md-10">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Delete Data Mata Pelajaran</h4>
					</div>
					<div class="modal-body">
						<?php echo form_open('mapel/delete/' . $value->id_mapel); ?>
						<div class="form-group">
							<h5>Apakah Anda Yakin Ingin Menghapus Data Mata Pelajaran: <span><b><?= $value->nama_mapel ?></b></span>?</h5>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
					<?php echo form_close(); ?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal Delete -->
	<?php } ?>

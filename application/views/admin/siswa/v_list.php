<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<a href="<?= base_url('siswa/add') ?>" class="btn btn-success btn-xs pt-4"><i class="fa fa-plus"> Tambah Data</a></i>
			</div>
			<div class="panel-body table-responsive">
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
							<th>NIS</th>
							<th>Nama Siswa</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Kelas</th>
							<th>Foto</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($siswa as $key => $value) { ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $value->nis ?></td>
								<td><?= $value->nama_siswa ?></td>
								<td><?= $value->tempat_lahir ?></td>
								<td><?= $value->tgl_lahir ?></td>
								<td><?= $value->kelas ?></td>
								<td><img src="<?= base_url('./foto_siswa/' . $value->foto_siswa) ?>" class="img-fluid" width="50px"></td>
								<td>
									<a href="<?= base_url('siswa/edit/' . $value->id_siswa) ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></a></i>
									<a href="javascript:void(0);"
										class="btn btn-xs btn-danger"
										onclick="confirmDelete(<?= $value->id_siswa ?>)">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- /.col-lg-4 -->
	</div>

	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">Konfirmasi Penghapusan</div>
				<div class="modal-body">Apakah Anda yakin?</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<a href="#" id="deleteConfirmBtn" class="btn btn-danger">Hapus</a>
				</div>
			</div>
		</div>
	</div>

	<script>
		function confirmDelete(id_siswa) {
			$('#deleteModal').modal('show');
			document.getElementById('deleteConfirmBtn').setAttribute('href', '<?= base_url('siswa/delete/') ?>' + id_siswa);
		}
	</script>

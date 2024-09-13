<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<a href="<?= base_url('guru/add') ?>" class="btn btn-success btn-xs pt-4"><i class="fa fa-plus"> Tambah Data</a></i>
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
							<th>NIP</th>
							<th>Nama Guru</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Mata Pelajaran</th>
							<th>Pendidikan</th>
							<th>Foto</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($guru as $key => $value) { ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $value->nip ?></td>
								<td><?= $value->nama_guru ?></td>
								<td><?= $value->tempat_lahir ?></td>
								<td><?= $value->tgl_lahir ?></td>
								<td><?= $value->nama_mapel ?></td>
								<td><?= $value->pendidikan ?></td>
								<td><img src="<?= base_url('./foto_guru/' . $value->foto_guru) ?>" class="img-fluid" width="50px"></td>
								<td>
									<a href="<?= base_url('guru/edit/' . $value->id_guru) ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></a></i>
									<a href="javascript:void(0);"
										class="btn btn-xs btn-danger"
										onclick="confirmDelete(<?= $value->id_guru ?>)">
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
		function confirmDelete(id_guru) {
			$('#deleteModal').modal('show');
			document.getElementById('deleteConfirmBtn').setAttribute('href', '<?= base_url('guru/delete/') ?>' + id_guru);
		}
	</script>

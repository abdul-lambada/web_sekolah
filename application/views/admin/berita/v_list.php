<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<a href="<?= base_url('berita/add') ?>" class="btn btn-success btn-xs pt-4"><i class="fa fa-plus"> Tambah Data</a></i>
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
							<th>Judul Berita</th>
							<th>Slug Berita</th>
							<th>Foto</th>
							<th>Tanggal</th>
							<th>Nama User</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($berita as $key => $value) { ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $value->judul_berita ?></td>
								<td><?= $value->slug_berita ?></td>
								<td><img src="<?= base_url('./foto_berita/' . $value->gambar_berita) ?>" class="img-fluid" width="50px"></td>
								<td><?= $value->tgl_berita ?></td>
								<td><?= $value->nama_user ?></td>
								<td>
									<a href="<?= base_url('berita/edit/' . $value->id_berita) ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></a></i>
									<a href="javascript:void(0);"
										class="btn btn-xs btn-danger"
										onclick="confirmDelete(<?= $value->id_berita ?>)">
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
		function confirmDelete(id_berita) {
			$('#deleteModal').modal('show');
			document.getElementById('deleteConfirmBtn').setAttribute('href', '<?= base_url('berita/delete/') ?>' + id_berita);
		}
	</script>

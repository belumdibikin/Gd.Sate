<table class="table table-hover" id="tableBerkas">
	<thead class="thead text-warning bg-dark">
		<tr>
			<th>#</th>
			<th>Nomor SPP</th>
			<th>Kode Kegiatan</th>
			<th>Nama Kegiatan</th>
			<th>Tanggal Masuk</th>
			<th>Nama Verifikatur</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$idx = 1;
			foreach ($kendali as $kendali_) {
		?>
		<tr>
			<th scope="row"><?php echo $idx; ?></th>
			<td><?php echo $kendali_->spp_nomor; ?></td>
			<td><?php echo $kendali_->kode_kegiatan; ?></td>
			<td><?php echo $kendali_->nama_kegiatan; ?></td>
			<td><?php echo $kendali_->spp_tgl_terima; ?></td>
			<td><?php echo $kendali_->nama_pegawai; ?></td>
			<td><?php echo $kendali_->status; ?></td>
		</tr>
		<?php
			$idx++;
			}
		?>
	</tbody>
</table>
<script type="text/javascript">
	$("#tableBerkas").DataTable({
		"lengthChange": false,
		"searching": false
	});
</script>
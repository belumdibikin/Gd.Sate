<form id="myForm" action="javascript:void(0);">
	<div class="row" style="display: none;">
		<div class="col-md-4 col-form-label">Jenis Verifikasi</div>
		<div class="col-md-8">
			<select class="form-control" id="select_jenis_ver" name="select_jenis_ver" >
				<option value="BL">Verifikasi SPM Belanja Langsung</option>
				<option value="TBL" disabled>Verifikasi SPM Belanja Tidak Lansung</option>
			</select>
		</div>
	</div>
	<div id="form_dokumen_utama"></div>
	<hr>

	<div class="card-header float-right">
		<button class="btn btn-outline-danger" onclick="myFunction()"><span class="mif-loop2"></span> Clear Data</button>
		<button class="btn btn-warning" id="btn_kirim">Kirim</button>
	</div>
</form>
<div class="modal" id="modalKirim">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-dark text-warning">
				<h5 class="modal-title">Kirim Berkas Baru</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Apakah anda sudah yakin dengan data yang diisikan?</p>
				Data tidak dapat dirubah setelah terkirim.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
				<button type="button" class="btn btn-success" onclick="clickKirim()">Ya</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(".LS").hide();
	$('#modalKirim').modal({
		backdrop: "static"
	});
	$('#modalKirim').modal('toggle');
	$('#select_jenis_ver').change(function(event) {
		$.ajax({
			url: "<?php echo base_url('registrator/ajax_tampil_form_verifikasi'); ?>",
			type: 'POST',
			dataType: 'html',
			data: $('#myForm').serialize(),
			success: function(data){
				$('#form_dokumen_utama').html(data);
			}
		});
	});
	$('#select_jenis_ver').change();

	$('#btn_kirim').click(function(event) {
		$('#modalKirim').modal('toggle');
	});

	var clickKirim = function(){
		$.ajax({
			url: "<?php echo base_url('registrator/input_dokumen_reg'); ?>",
			type: 'POST',
			dataType: 'html',
			data: $('#myForm').serialize(),
			success: function(data){
				if(data != "error"){
					window.location = "<?php echo base_url('registrator/index'); ?>";
				}
			}
		});
	};

</script>


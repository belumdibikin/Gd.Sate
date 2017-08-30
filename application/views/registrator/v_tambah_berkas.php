
<!DOCTYPE html>
<html>

<?php $this->load->view('head');?>

<body class="bg-steel">

	<?php $this->load->view('appbar');?>
	<div class="page-content">
		<div class="flex-grid no-responsive-future">
			<div class="row" style="height: 100%">

				<div class="cell auto-size padding20 bg-white" id="cell-content">
					<h1 class="text-light">Tambah Berkas <span class="mif-files-empty place-right"></span></h1>
					<hr class="thin bg-grayLighter">
					<form id="myForm" action="javascript:void(0);">
						<div class="grid">
							<div class="row cells12">
								<div class="cell colspan4">
									<div class="panel">
										<div class="heading">
											<span class="title">JENIS VERIFIKASI</span>
										</div>
										<div class="content">
											<div class="row cells6">
												<div class="cell colspan3">
													Jenis Verifikasi 
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<div class="input-control select">
														<select id="select_jenis_ver" name="select_jenis_ver" >
															<option></option>
															<option value="BL">VERIFIKASI SPM BELANJA LANGSUNG</option>
															<option value="TBL">VERIFIKASI SPM  TIDAK LANGSUNG BELANJA LANGSUNG</option>
															<option value="SPJ">SPJ</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="form_dokumen_utama"></div>
							<hr class="thin bg-grayLighter">
							<button class="button alert" onclick="myFunction()"><span class="mif-loop2"></span> Clear Data</button>
							<button class="button success" onclick="clickSubmit()"><span class="mif-play"></span> Send</button>
						</div>
					</form>

					<hr class="thin bg-grayLighter">
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">


	$(".LS").hide();

	$('#select_jenis_ver').change(function(event) {
		/* Act on the event */



		$.ajax({
			url: "<?php echo base_url('registrator/ajax_tampil_form_verifikasi'); ?>",
			type: 'POST',
			dataType: 'html',
			data: $('#myForm').serialize(),
			success: function(data){
			//console.log(data);
			$('#form_dokumen_utama').html(data);
		}
	});

	});








</script>


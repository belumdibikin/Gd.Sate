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
								<div class="cell colspan5">
									<h5>3Informasi Dokumen</h5>
									<div class="panel">
										<div class="heading">
											<span class="title">Panel Title</span>
										</div>
										<div class="content">
											<div class="row cells6">
												<div class="cell colspan3">
													Bidang 2/ Balai  
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<div class="input-control select">
														<select name="bidang">
															<option></option>
															<option value="bidang 1">1</option>
															<option value="bidang 2">2</option>
															<option value="bidang 3">3</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Jenis Pengajuan
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<div class="input-control select ">

														<select  id="select_jenis_aju" name="select_jenis_aju">
															<option></option>
															<option value="UP">UP</option>
															<option value="GU">GU</option>
															<option value="TU">TU</option>
															<option value="LS">LS</option>
															<option value="SPJ">SPJ</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Tanggal Terima SPP
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<div class="input-control text" data-role="datepicker">
														<input type="text" name="tanggalterima">
														<button class="button"><span class="mif-calendar"></span></button>
													</div>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Tanggal Kendali Verifikasi
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<div class="input-control text" data-role="datepicker">
														<input type="text" name="tanggalkendali">
														<button class="button"><span class="mif-calendar"></span></button>
													</div>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Kode Kegiatan 
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<div class="input-control select">

														<select>
															<option></option>
															<optionvalue="kode 1">1</option>
															<optionvalue="kode 2">2</option>
															<optionvalue="kode 3">3</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Nama Kegiatan 
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<div class="input-control text">
														<input type="text" name="namakeg">
													</div>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Verifikatur
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<div class="input-control select">

														<select>
															<option></option>
															<option value="veri 1">1</option>
															<option value="veri 2">2</option>
															<option value="veri 3">3</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Nilai SPP  
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<div class="input-control text">
														<input type="text" name="nilaispp">
													</div>
												</div>
											</div>
											<div class="row cells6 LS">
												<div class="cell colspan3">

													Nama Penyedia/Perusahaan  
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<div class="input-control text">
														<input type="text" name="namapenyedia">
													</div>
												</div>
											</div>
											<button class="button alert" onclick="myFunction()"><span class="mif-loop2"></span> Clear Data</button>
											<button class="button success" onclick="clickSubmit()"><span class="mif-play"></span> Send</button>
										</div>
									</div>
								</div>

								<div class="cell colspan5">
									
									
									
									<div id="tampil_form"></div>
									<div id="test"></div>

								</div>


							</div>



							<hr class="thin bg-grayLighter">
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
function clickSubmit(){
	//alert("click");
	$.ajax({
		url: "<?php echo base_url('registrator/test'); ?>",
		type: 'POST',
		dataType: 'html',
		data: $('#myForm').serialize(),
		success: function(data){
			//console.log(data);
			$('#test').html(data);
		}
	});
}
$('#select_jenis_aju').change(function(event) {
	/* Act on the event */

	if($('#select_jenis_aju').val() == "LS"){
		$(".LS").show();
	}else{
		$(".LS").hide();
	}

	$.ajax({
		url: "<?php echo base_url('registrator/ajax_tampil_form'); ?>",
		type: 'POST',
		dataType: 'html',
		data: $('#myForm').serialize(),
		success: function(data){
			//console.log(data);
			$('#tampil_form').html(data);
		}
	});

});





</script>
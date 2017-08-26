<div class="row cells12">

	<div class="cell colspan4">
		<div class="panel">
			<div class="heading">
				<span class="title">Dokumen Utama</span>
			</div>
			<div class="content">
				<div class="row cells6">
					<div class="cell colspan3">
						Bidang / Balai  
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
			</div>
		</div>
	</div>
	<div class="cell colspan3">
		<div id="tampil_form"></div>
	</div>
	<div class="cell colspan3">
		<div id="tampil_form_lampiran"></div>
		<!-- <div class="panel">
			<div class="heading">
				<span class="title">Lampiran</span>
			</div>
			<div class="content">
				... panel content ...
			</div>
		</div> -->
	</div>


</div>

<script type="text/javascript">

tampil_form_lampiran
$(".LS").hide();




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

	$.ajax({
		url: "<?php echo base_url('registrator/ajax_tampil_lampiran'); ?>",
		type: 'POST',
		dataType: 'html',
		data: $('#myForm').serialize(),
		success: function(data){
			//console.log(data);
			$('#tampil_form_lampiran').html(data);
		}
	});
});





</script>
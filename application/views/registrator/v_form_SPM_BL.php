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
								<option value="sekertariat">Sekertariat</option>
								<option value="b_anggaran">Bidang Anggaran</option>
								<option value="b_perbendaharaan">Bidang Perbendaharaan</option>
								<option value="b_akun_pel">Bidang Akutansi Dan Pelaporan</option>
								<option value="b_peng_bmd">Bidang Pengelolaan Barang Milik Daerah</option>
								<option value="b_pel_ev_apbd">Bidang Pengelolaan Evaluasi APBD Kab/Kota</option>
								<option value="b_peng_barjas">Bidang Pengadaan Barang dan Jasa</option>
								<option value="b_pel_pem_aset">Bidang Pelayanan dan Pemanfaatan Aset</option>
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

							<select name="kde_kegiatan" id="kde_kegiatan">
								<option></option>
								<?php foreach ($kode_kegiatan as $kode) {
                                                    echo "<option value=".$kode->kode_kegiatan.">".$kode->kode_kegiatan."</option>";
                                                }?>
								
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
							<div id="nama_kegiatan1"></div>

							<!-- <input type="text" name="namakeg"> -->
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="row cells6">
					<div class="cell colspan3">
						Verifikatur
					</div>
					<div class="cell">
						:
					</div>
					<div class="cell colspan2">
						<div class="input-control select">
							<select name ="verifikatur">
								<option></option>
							<?php foreach ($nama_verifikatur as $nama) {
                                                    echo "<option value=".$nama->id_verifikatur.">".$nama->nama_verifikatur."</option>";
                                                }?>
								
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

$(".LS").hide();


$('#kde_kegiatan').change(function(event) {
	/* Act on the event */


	$.ajax({
		url: "<?php echo base_url('registrator/ajax_nama_kegiatan'); ?>",
		type: 'POST',
		dataType: 'html',
		data: $('#myForm').serialize(),
		success: function(data){
			console.log(data);
			$('#nama_kegiatan1').html(data);
		}
	});
});

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
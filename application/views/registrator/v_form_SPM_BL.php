<div class="card card-default">
	<div class="card-header text-warning bg-dark">Dokumen Utama</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-4 col-form-label">Bidang / Balai</div>
			<div class="col-md-8">
				<div class="form-group">
					<select class="form-control" name="bidang" id="bidang">
						<option value="SKT">Sekertariat</option>
						<option value="BA">Bidang Anggaran</option>
						<option value="BP">Bidang Perbendaharaan</option>
						<option value="BAP">Bidang Akutansi Dan Pelaporan</option>
						<option value="BPBMD">Bidang Pengelolaan Barang Milik Daerah</option>
						<option value="BLPEA">Balai Pengelolaan Evaluasi APBD Kab/Kota</option>
						<option value="BLPBJ">Balai Pengadaan Barang dan Jasa</option>
						<option value="BLPPA">Balai Pelayanan dan Pemanfaatan Aset</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-form-label">Jenis Pengajuan</div>
			<div class="col-md-8">
				<div class="form-group">
					<select class="form-control" id="select_jenis_aju" name="select_jenis_aju">
						<option value="UP">UP - Uang Persediaan</option>
						<option value="GUP">GU - Ganti Uang Persediaan</option>
						<option value="TUP">TU - Tambah Uang Persediaan</option>
						<option value="LS">LS - Belanja Langsung</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row LS">
			<div class="col-md-4 col-form-label">Belanja Langsung (LS)</div>
			<div class="col-md-8">
				<div class="form-group">
					<select class="form-control" name="blls" id="blls">
						<option value="BD">Bendahara</option>
						<option value="UM">Uang Muka</option>
						<option value="TM">Termin </option>
						<option value="BJ">Barang Jasa</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-form-label">Nomor SPP</div>
			<div class="col-md-8">
				<div class="form-group">
					<input type="text" class="form-control" name="nomorspp" id="nomorspp">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-form-label">Tanggal Terima SPP</div>
			<div class="col-md-8">
				<div class="form-group">
					<div class='input-group date'>
						<input type='text' class="form-control" name="tanggalterima" id="tanggalterima"/>
						<span class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-form-label">Tanggal Kendali Verifikasi</div>
			<div class="col-md-8">
				<div class="form-group">
					<div class='input-group date'>
						<input type='text' class="form-control" name="tanggalkendali" id="tanggalkendali"/>
						<span class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-form-label">Kode Kegiatan</div>
			<div class="col-md-8">
				<div class="form-group">
					<select class="form-control" name="kde_kegiatan" id="kde_kegiatan">
						<?php foreach ($kode_kegiatan as $kode) {
							echo "<option value='".$kode->kode_kegiatan."' data-name='".$kode->nama_kegiatan."'>".$kode->kode_kegiatan."</option>";
						}?>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-form-label">Kode Kegiatan</div>
			<div class="col-md-8">
				<div class="form-group">
					<textarea class="form-control" name="nama_kegiatan" id="nama_kegiatan" size="5" style="resize: none" readonly>
					</textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-form-label">Nama Verifikatur</div>
			<div class="col-md-8">
				<div class="form-group">
					<select class="form-control" name ="verifikatur" id="verifikatur">
						<?php foreach ($nama_verifikatur as $nama) {
							echo "<option value=".$nama->id_pegawai.">".$nama->nama_pegawai."</option>";
						}?>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-form-label">Nilai SPP</div>
			<div class="col-md-8">
				<div class="form-group">
					<input type="text" class="form-control" name="nilaispp" id="nilaispp">
				</div>
			</div>
		</div>
		<div class="row LS">
			<div class="col-md-4 col-form-label">Nama Penyedia/Perusahaan</div>
			<div class="col-md-8">
				<div class="form-group">
					<input type="text" class="form-control" name="namapenyedia" id="namapenyedia">
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.date > input').datepicker({
		format: 'yyyy-mm-dd',
		autoclose: true,
		todayHighlight: true
	});
	// onfocus="this.size = 5" onblur="this.size = 0" 

	$('#bidang').change(function(event) {
		$.ajax({
			url: "<?php echo base_url('registrator/ajax_kode_kegiatan'); ?>",
			type: 'POST',
			dataType: 'html',
			data: $('#myForm').serialize(),
			success: function(data){
				data = JSON.parse(data);
				select_ = $("#kde_kegiatan");
				select_.html('');

				console.log(data["kegiatan"]);
				data["kegiatan"].forEach(function(kegiatan_){
					select_.append("<option selected value='"+kegiatan_["kode_kegiatan"]+"' data-name='"+kegiatan_["nama_kegiatan"]+"'>"+kegiatan_["kode_kegiatan"]+"</option>");
					console.log("<option selected value='"+kegiatan_["kode_kegiatan"]+"' data-name='"+kegiatan_["nama_kegiatan"]+"'>"+kegiatan_["kode_kegiatan"]+"</option>");
				});
			}
		});
	});

	$(".LS").hide();
	$('#kde_kegiatan').change(function(event) {
		$('#nama_kegiatan').html($("#kde_kegiatan :selected").attr("data-name"));
	});
	$('#kde_kegiatan').change();

	$('#select_jenis_aju').change(function(event) {
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
				$('#tampil_form').html(data);
			}
		});
	});
</script>
<form id="myForm" action="javascript:void(0);">
	<div class="card card-default">
		<div class="card-header text-warning bg-dark">Dokumen Utama</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-4 col-form-label">Bidang / Balai</div>
				<div class="col-md-8">
					<div class="form-group">
						<input type="text" readonly class="form-control" name="bidang" id="bidang" value="<?php echo $berkas->kode_bidang ?>" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-form-label">Jenis Pengajuan</div>
				<div class="col-md-8">
					<div class="form-group">
						<input type="text" readonly class="form-control" id="select_jenis_aju" name="select_jenis_aju" value="<?php echo $berkas->kode_jenis ?>" readonly>
					</div>
				</div>
			</div>
			<div class="row LS">
				<div class="col-md-4 col-form-label">Belanja Langsung (LS)</div>
				<div class="col-md-8">
					<div class="form-group">
						<input type="text" readonly class="form-control" id="blls" name="blls" value="<?php echo $berkas->kode_jenis ?>" readonly>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-form-label">Nomor SPP</div>
				<div class="col-md-8">
					<div class="form-group">
						<input type="text" readonly class="form-control" name="nomorspp" id="nomorspp" value="<?php echo $berkas->spp_nomor ?>" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-form-label">Tanggal Terima SPP</div>
				<div class="col-md-8">
					<div class="form-group">
						<input type="text" class="form-control" name="tanggalterima" id="tanggalterima" value="<?php echo $berkas->spp_tgl_terima ?>" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-form-label">Tanggal Kendali Verifikasi</div>
				<div class="col-md-8">
					<div class="form-group">
						<input type="text" readonly class="form-control" name="tanggalkendali" id="tanggalkendali" value="<?php echo $berkas->tgl_kendali_verifikasi ?>"readonly>				</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-form-label">Kode Kegiatan</div>
					<div class="col-md-8">
						<div class="form-group">
							<input type="text" readonly class="form-control" name="kde_kegiatan" id="kde_kegiatan" value="<?php echo $berkas->kode_kegiatan ?>"readonly>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-form-label">Nama Kegiatan</div>
					<div class="col-md-8">
						<div class="form-group">

							<input type="text" readonly class="form-control" name="nama_kegiatan" id="nama_kegiatan" value="<?php echo $berkas->nama_kegiatan ?>" readonly>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-form-label">Nama Verifikatur</div>
					<div class="col-md-8">
						<div class="form-group">
							<input type="text" readonly class="form-control" name="verifikatur" id="verifikatur" value="<?php echo $berkas->nama_pegawai ?>" readonly>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-form-label">Nilai SPP</div>
					<div class="col-md-8">
						<div class="form-group">
							<input type="text" readonly class="form-control" name="nilaispp" id="nilaispp" value="<?php echo $berkas->spp_nilai ?>" readonly>
						</div>
					</div>
				</div>
				<div class="row LS">
					<div class="col-md-4 col-form-label">Nama Penyedia/Perusahaan</div>
					<div class="col-md-8">
						<div class="form-group">
							<input type="text" readonly class="form-control" name="namapenyedia" id="namapenyedia" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
			&nbsp;
		</div>
		<div class="card card-default">
			<div class="card-header text-warning bg-dark">Kelengkapan Dokumen</div>
			<div class="card-body">
				<div class="row LS">
					<div class="col-md-4 col-form-label"> Nota Permohonan Pengajuan LS (KPA ke Kuasa BUD)</div>
					<div class="col-md-8">
						<div class="form-group">

							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" readonly name="nota_mohon" id="nota_mohon" checked data-toggle="toggle" data-on="Ada" data-off="Tidak Ada" data-onstyle="success" data-offstyle="danger" data-size="small">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-form-label"> SPP1 - Surat Pengantar (BP)</div>
					<div class="col-md-8">
						<div class="form-group">

							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" readonly name="surat_bp" id="surat_bp" checked data-toggle="toggle" data-on="Ada" data-off="Tidak Ada" data-onstyle="success" data-offstyle="danger" data-size="small">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-form-label">SPP 1 - Surat Pengantar (BPP)</div>
					<div class="col-md-8">
						<div class="form-group">
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox"  readonly name="surat_bpp" id="surat_bpp" checked data-toggle="toggle" data-on="Ada" data-off="Tidak Ada" data-onstyle="success" data-offstyle="danger" data-size="small">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row LS">
					<div class="col-md-4 col-form-label">SPP 2 - Ringkasan</div>
					<div class="col-md-8">
						<div class="form-group">
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" readonly name="spp2" id="spp2" checked data-toggle="toggle" data-on="Ada" data-off="Tidak Ada" data-onstyle="success" data-offstyle="danger" data-size="small">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-form-label">SPP 3 - Rincian</div>
					<div class="col-md-8">
						<div class="form-group">
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" readonly name="spp3" id="spp3" checked data-toggle="toggle" data-on="Ada" data-off="Tidak Ada" data-onstyle="success" data-offstyle="danger" data-size="small">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-form-label">Surat Pernyataan Pengajuan</div>
					<div class="col-md-8">
						<div class="form-group">
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" readonly name="srt_aju" id="srt_aju" srt_aju checked data-toggle="toggle" data-on="Ada" data-off="Tidak Ada" data-onstyle="success" data-offstyle="danger" data-size="small">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-form-label">Nota Dinas Pengajuan SPP</div>
					<div class="col-md-8">
						<div class="form-group">

							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" readonly name="nota_aju" id="nota_aju"  nota_ajuchecked data-toggle="toggle" data-on="Ada" data-off="Tidak Ada" data-onstyle="success" data-offstyle="danger" data-size="small">
								</label>
							</div></div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix">
				&nbsp;
			</div>
			<div id="form_khusus"></div>
			<div class="clearfix">
				&nbsp;
			</div>
			<div class="card card-default">
				<div class="card-header text-warning bg-dark">Catatan</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4 col-form-label"> Catatan Verifikatur</div>
						<div class="col-md-8">
							<div class="form-group">
								<div class="form-group">
									<div class="form-group">
										<textarea class="form-control" readonly name="cat_ver" id="cat_veri" size="5" style="resize: none"></textarea>
									</div>

								</div>

							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="card card-default">
				<div class="card-header text-warning bg-dark">Catatan</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4 col-form-label"> Catatan Pimpinan</div>
						<div class="col-md-8">
							<div class="form-group">
								<div class="form-group">
									<div class="form-group">
										<textarea class="form-control" readonly name="cat_ver" id="cat_veri" size="5" style="resize: none"></textarea>
									</div>

								</div>

							</div>
						</div>
					</div>					
				</div>
			</div>
		</form>
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
			<button type="button" class="btn btn-success" onclick="clickKirim()">Ya</button>
		</div>

		<script type="text/javascript">
		$('#select_jenis_aju').change(function(event) {
			if($('#select_jenis_aju').val() == "LS"){
				$(".LS").show();
			}else if($('#select_jenis_aju').val() == "BD"){
				$(".LS").show();
			}else if ($('#select_jenis_aju').val() == "BJ"){
				$(".LS").show();
			}else if ($('#select_jenis_aju').val() == "TM"){
				$(".LS").show();
			}else if ($('#select_jenis_aju').val() == "UM"){
				$(".LS").show();
			}else {

				$(".LS").hide();
			}

			$.ajax({
				url: "<?php echo base_url('verifikatur/ajax_tampil_form_khusus'); ?>",
				type: 'POST',
				dataType: 'html',
				data: $('#myForm').serialize(),
				success: function(data){
					$('#form_khusus').html(data);
				}
			});

		});

		$('#select_jenis_aju').change();

		var clickKirim = function(){
			console.log($('#myForm').serialize());
			// $.ajax({
			// 	url: "<?php echo base_url('verifikatur/input_dokumen_ver'); ?>",
			// 	type: 'POST',
			// 	dataType: 'html',
			// 	data: $('#myForm').serialize(),
			// 	success: function(data){
			// 		if(data != "error"){
			// 			window.location = "<?php echo base_url('verifikatur/index'); ?>";
			// 		}
			// 	}
			// });
		};


		</script>s
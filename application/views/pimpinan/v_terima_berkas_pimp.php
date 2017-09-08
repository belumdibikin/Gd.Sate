<!DOCTYPE html>
<html>

<?php $this->load->view('head');?>

<body class="bg-steel">
 <?php $this->load->view('pimpinan/appbar_pimp');?>
	<div class="page-content">
		<div class="flex-grid no-responsive-future">
			<div class="row" style="height: 100%">

				<div class="cell auto-size padding20 bg-white" id="cell-content">
					<h1 class="text-light">Terima Berkas <span class="mif-files-empty place-right"></span></h1>
					<hr class="thin bg-grayLighter">
					<form id="myForm" action="javascript:void(0);">
						<div class="grid">
							<div class="row cells12">
								<div class="cell colspan4">
									<h5>Informasi Dokumen</h5>
									<div class="panel">
										<div class="heading">
											<span class="title">Panel Title</span>
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
														<select name="bidang" disabled>
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

														<select  id="select_jenis_aju" name="select_jenis_aju" disabled>
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
														<input type="text" name="tanggalterima" disabled>
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
														<input type="text" name="tanggalkendali" disabled>
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

														<select disabled>
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
													<div class="input-control text" >
														<input type="text" name="namakeg" disabled>
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

														<select disabled>
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
														<input type="text" name="nilaispp" disabled>
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
														<input type="text" name="namapenyedia" disabled>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="cell colspan4">
									<h5> Kelengkapan Dokumen</h5>
									<div class="panel">
										<div class="heading">
											<span class="title">Dokumen Umum</span>
										</div>
										<div class="content">
											<div class="row cells6">
												<div class="cell colspan3">
													SPP 1 - Surat Pengantar (BP)  
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													SPP 1 - Surat Pengantar (BPP) 
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													SPP 2 - Ringkasan
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													SPP 2 - Rincian
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Surat Pernyataan Pengajuan
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Nota Dinas Pengajuan SPP 
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
										</div>

									</div>
									<br>				   
									<br>				   
									<div class="panel">
										<div class="heading">
											<span class="title">Dokumen TU</span>
										</div>
										<div class="content">
											<br>
											<div class="row cells10">
												<div class="cell colspan8">
													Surat Persetujuan/Rekomendasi TU
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
											<div class="row cells10">
												<div class="cell colspan8">
													Rencana Penggunaan TU 
												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>					        			
										</div>
									</div>
									<br>				   
									<br>				   
									<div class="panel">
										<div class="heading">
											<span class="title">Catatan Verifikatur</span>
										</div>
										<div class="content">
											<br>
											<div class="row cells10">
												<div class="cell ">
													Catatan Verifikatur
												</div>
												<div class="cell">
													:
												</div>
											</div>					        			
												<div class="input-control textarea " >
													<textarea disabled></textarea>
												</div>
										</div>
									</div>
								</div>
								<div class="cell colspan3">
									<div class="panel">
										<h5> Kelengkapan Lampiran</h5>
										<div class="heading">
											<span class="title">Lampiran</span>
										</div>
										<div class="content">
											<div class="row cells6">
												<div class="cell colspan3">
													Anggaran Kas

												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Check list SPP (tanda tangan PPK-SKPD)

												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													DPA

												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Nota Dinas Permohonan Penerbitan SPM

												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													Rencana Pencairan

												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
											<div class="row cells6">
												<div class="cell colspan3">
													SPD dari BUD

												</div>
												<div class="cell">
													:
												</div>
												<div class="cell colspan2">
													<label class="switch">
														<input type="checkbox">
														<span class="check"></span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<br>
									<br>
									<br>
									<div class="panel">
										<div class="heading">
											<span class="title">Catatan pimpinan</span>
										</div>
										<div class="content">
											<br>
											<div class="row cells10">
												<div class="cell ">
													Catatan Pimpinan
												</div>
												<div class="cell">
													:
												</div>
											</div>					        			
												<div class="input-control textarea " >
													<textarea ></textarea>
												</div>
										</div>
									</div>
								</div>

							</div>
							<button class="button success" onclick="pushMessage('success')"><span class="mif-play"></span> Kirim Ke Pimpinan</button>
							<button class="button alert" onclick="pushMessage('warning')"><span class="mif-loop2"></span> Clear Data</button>
							<button class="button warning" onclick="pushMessage('warning')"><span class="mif-backward"></span> Kembalikan Ke Pengaju</button>



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




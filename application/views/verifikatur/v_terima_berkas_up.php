<!DOCTYPE html>
<html>

<?php $this->load->view('head');?>

<body class="bg-steel">

	<?php $this->load->view('appbar_ver');?>
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

														<select name="kode_keg" disabled>
															<option></option>
															<optionvalue="100.01">100.01</option>
															<optionvalue="100.02">100.02</option>
															<optionvalue="100.03">100.03</option>
															<optionvalue="100.04">100.04</option>
															<optionvalue="100.05">100.05</option>
															<optionvalue="100.06">100.06</option>
															<optionvalue="100.07">100.07</option>
															<optionvalue="100.08">100.08</option>
															<optionvalue="100.09">100.09</option>
															<optionvalue="100.10">100.10</option>
															<optionvalue="100.11">100.11</option>
															<optionvalue="100.12">100.12</option>
															<optionvalue="100.13">100.13</option>
															<optionvalue="100.14">100.14</option>
															<optionvalue="100.15">100.15</option>
															<optionvalue="100.16">100.16</option>
															<optionvalue="100.17">100.17</option>
															<optionvalue="100.18">100.18</option>
															<optionvalue="100.19">100.19</option>
															<optionvalue="100.20">100.20</option>
															<optionvalue="100.21">100.21</option>
															<optionvalue="100.22">100.22</option>
															<optionvalue="100.23">100.23</option>
															<optionvalue="100.24">100.24</option>
															<optionvalue="100.25">100.25</option>
															<optionvalue="100.26">100.26</option>
															<optionvalue="100.27">100.27</option>
															<optionvalue="100.28">100.28</option>
															<optionvalue="100.29">100.29</option>
															<optionvalue="101.01">101.01</option>
															<optionvalue="101.02">101.02</option>
															<optionvalue="101.03">101.03</option>
															<optionvalue="101.04">101.04</option>
															<optionvalue="102.01">102.01</option>
															<optionvalue="102.02">102.02</option>
															<optionvalue="102.03">102.03</option>
															<optionvalue="102.04">102.04</option>
															<optionvalue="102.05">102.05</option>
															<optionvalue="103.01">103.01</option>
															<optionvalue="109.01">109.01</option>
															<optionvalue="109.02">109.02</option>
															<optionvalue="109.03">109.03</option>
															<optionvalue="109.04">109.04</option>
															<optionvalue="109.05">109.05</option>
															<optionvalue="109.05">109.05</option>
															<optionvalue="109.06">109.06</option>
															<optionvalue="109.07">109.07</option>
															<optionvalue="110.01">110.01</option>
															<optionvalue="110.02">110.02</option>
															<optionvalue="110.03">110.03</option>
															<optionvalue="110.04">110.04</option>
															<optionvalue="110.05">110.05</option>
															<optionvalue="110.06">110.06</option>
															<optionvalue="110.07">110.07</option>
															<optionvalue="110.08">110.08</option>
															<optionvalue="111.01">111.01</option>
															<optionvalue="110.02">110.02</option>
															<optionvalue="110.03">110.03</option>
															<optionvalue="110.04">110.04</option>
															<optionvalue="110.05">110.05</option>
															<optionvalue="110.06">110.06</option>
															<optionvalue="110.07">110.07</option>
															<optionvalue="110.08">110.08</option>
															<optionvalue="110.09">110.09</option>
															<optionvalue="110.10">110.10</option>
															<optionvalue="110.11">110.11</option>
															<optionvalue="110.12">110.12</option>
															<optionvalue="110.13">110.13</option>
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
														<select name="verifikatur" disabled>
															<option></option>
															<option value="ver1">Noviyanti, SE., MM.</option>
															<option value="ver2">Setiady, S.ST.</option>
															<option value="ver3">Triyani, SE.</option>
															<option value="ver4">Hendra Hermawan, SE.</option>
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




<!DOCTYPE html>
<html>

    <?php $this->load->view('head');?>

<body class="bg-steel">
       
    <?php $this->load->view('pimpinan/appbar_pimp');?>
<div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
                
                <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light">Pimpinan<span class="mif-clipboard place-right"></span></h1>
                    <hr class="thin bg-grayLighter">
                    
                    <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                        <thead>
                        <tr>
                            <td >
                            	NO
                            </td>
                            <td class="sortable-column sort-asc" >No SPP</td>
                            <td class="sortable-column sort-asc" >Jenis Verivikasi</td>
                            <td class="sortable-column sort-asc" >Pengajuan</td>
                            <td class="sortable-column">Tanggal Penerimaan SPP </td>
                            <td class="sortable-column">Status</td>
                            <td class="sortable-column">Aksi</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>123890723212</td>
                            <td>Belanja Langsung</td>
                            <td>UP</td>
                            <td>11/12/2017</td>
                            <td>Diterima dari Verifikatur</td>
                            <td><a href="<?php echo base_url('pimpinan/terima_berkas_pimpinan');?>">Terima</a></td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>123890723212</td>
                            <td>Belanja Langsung</td>
                            <td>TU</td>
                            <td>Machine number 2</td>
                            <td>Dikembalikan Dari Verifikatur</td>
                            <td><a href="http://virtuals.com/machines/123890723212">Terima</a></td>
                        </tr>
						<tr>
                            <td>
                                3
                            </td>
                            <td>123890723212</td>
                            <td>Belanja Langsung</td>
                            <td>GU</td>
                            <td>Machine number 2</td>
                            <td>Diterima Dari Verifikatur</td>
                            <td><a href="http://virtuals.com/machines/123890723212">Terima</a></td>
                            
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</body>
</html>

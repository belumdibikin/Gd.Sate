<!DOCTYPE html>
<html>

    <?php $this->load->view('head');?>

<body class="bg-steel">
       
    <?php $this->load->view('appbar');?>
<div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
                <?php $this->load->view('content');?>
            </div>
        </div>
</div>
</body>
</html>
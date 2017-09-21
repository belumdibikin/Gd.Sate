<!DOCTYPE html>
<html>
<?php $this->load->view('head');?>
<body>
	<?php $this->load->view('appbar');?>
	<div class="clearfix">
		&nbsp;
	</div>
	<div class="container">
		<h1 id="contentTitle">{title}</h1>
		<div id="content">
			{content}
		</div>
	</div>
</body>
<script type="text/javascript">
	var clickLink = function(url_){
		var url = "<?php echo base_url(); ?>" + url_;
		$.ajax({
			url: url,
			type: 'GET',
			success: function(data){
				data = JSON.parse(data);
				if(data["status"] == "success"){
					$("#contentTitle").html(data["title"]);
					$("#content").html(data["content"]);
				}
			}
		});
	}
</script>
</html>
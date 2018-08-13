
<?php 
foreach($css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>


<div class="container" style="padding-top: 10px;">
	<h2>Data Dokter Langganan Bank Indonesia</h2>
</div>

<div style="padding: 15px">
	<?php echo $output; ?>
</div>

<script>
	function myFunction() {

		var alamat = document.getElementById('alamat_dokter').value
		var urlAPI = "http://dev.virtualearth.net/REST/v1/Locations?q=";
		var key = "&key=AvhAQPPUptrcKR2IWO-tcde3PU6xFcLbpq6PZC6oQeFrcSgDYlZPG982fXnPOgsF";
		
		var test = urlAPI + alamat + key;

		if (alamat.value == null) {
			alert("Alamat tidak boleh kosong");
		}
		else {
			$.ajax({
				type: 'GET',
				url: test,
				success: function(response){
					var lat = response.resourceSets[0].resources[0].point.coordinates[0];
					var lng = response.resourceSets[0].resources[0].point.coordinates[1];
					document.getElementById('lat').value=lat;
					document.getElementById('lng').value=lng;
				},
				error: function(xhr, status, error){
					alert("status: " + status," xhr : " + xhr," error: "+ error);
				}
			});
		}
	}
</script>

<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>


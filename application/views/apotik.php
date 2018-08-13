
<?php 
foreach($css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>


<div class="container" style="padding-top: 10px;">
	<h2>Data Apotik & Klinik Langganan Bank Indonesia</h2>
</div>
<div style="padding: 15px">
	<?php echo $output; ?>
</div>


<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>


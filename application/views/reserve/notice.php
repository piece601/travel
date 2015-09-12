<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<?php foreach ($query as $key => $value): ?>
<div class="row">
	<div class="box animated fadeIn">
		<hr>
			<h2 class="intro-text text-center">
				<?php echo $value->title ?>
			</h2>
		<hr>
		<?php echo $value->content ?>
	</div>
</div>
<?php endforeach ?>
<script>
	_$(function () {
		$("#notice").addClass("act");
	})
</script>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>

<script>
_$(function () {
	$("#product").addClass("act");
	<?php if ( is_array($in) ): ?>
		<?php foreach ($in as $key => $value): ?>
			$("[value=<?php echo $value ?>]").attr("checked", true);
		<?php endforeach ?>
	<?php endif ?>
	<?php if (is_array($minor)): ?>
		<?php foreach ($minor as $key => $value): ?>
			$("[value=<?php echo $value ?>]").attr("checked", true);
		<?php endforeach ?>	
	<?php endif ?>
	<?php if ( isset($fit) ): ?>
		$("[value=fit]").attr("checked", true);
	<?php endif ?>
});
</script>
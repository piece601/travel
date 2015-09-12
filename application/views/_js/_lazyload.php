<script src="<?php echo base_url('assets/js/jquery.lazyload.min.js') ?>"></script>
<script>
	$(function () {
		$("img.lazy").lazyload({
	  	skip_invisible : true,
	  	effect : "fadeIn"
	  });
	})
</script>
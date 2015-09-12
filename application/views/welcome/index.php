<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<?php foreach ($all as $key => $value): ?>
	<div class="row wow fadeInUp">
    <div class="box">
      <div class="col-lg-12">
      	<?php if ($value->title != ''): ?>
  	    	<hr>
  	    	<h2 class="intro-text text-center">
  	    		<strong><?php echo $value->title ?></strong>
  	    	</h2>
  	    	<hr>    		
      	<?php endif ?>
      	<?php echo $value->content ?>
      </div>
    </div>
  </div>
<?php endforeach ?>
<script>
_$(function() {
  $("#welcome").addClass("act");
});
</script>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
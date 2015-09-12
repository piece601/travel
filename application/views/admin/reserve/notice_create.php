<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
	新增
  <p class="lead"></p>
</h1>
<div class="row placeholders">
	<form class="form-horizontal" method="post">
	  <div class="form-group">
	    <label for="title" class="col-sm-2 control-label">標題</label>
	    <div class="col-sm-9">
	      <input type="text" name="title" class="form-control">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="content" class="col-sm-2 control-label">內容</label>
	    <div class="col-sm-9">
	      <textarea name="content" class="form-control" id="" cols="30" rows="30"></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-9 text-center">
	      <input type="submit" class="btn btn-primary btn-lg" value="送出">
	    </div>
	  </div>
	</form>
</div>
<?php require_once VIEWPATH.'_js/_tinymce.php' ?>
<script>
	_$(function () {
		$("#notice").addClass("active");
	});
</script>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>
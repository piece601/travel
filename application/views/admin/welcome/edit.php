<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
	編輯區塊
  <p class="lead"></p>
</h1>
<div class="row placeholders">
	<form action="" method="post">
		<div class="form-group">
			<label for="title">編題</label>
			<input type="text" class="form-control" name="title" value="<?php echo $query->title ?>">
		</div>
		<div class="form-group">
			<label for="content">內容</label>
			<textarea name="content" class="form-control" cols="30" rows="25"><?php echo $query->content ?></textarea>
		</div>
		<?php require_once VIEWPATH.'_components/_immupload.php' ?>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-primary btn-lg" value="送出">
		</div>
	</form>
</div>
<script>
	_$(function () {
		$("#welcome").addClass("active");
	})
</script>
<?php require_once VIEWPATH.'_js/_tinymce.php' ?>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>

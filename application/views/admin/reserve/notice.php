<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
	租借事項
  <p class="lead"></p>
</h1>
<div class="pull-right">
	<a href="<?php echo base_url('admin/reserve/notice_order') ?>" class="btn btn-success btn-lg">排序</a>
	<a href="<?php echo base_url('admin/reserve/notice_create') ?>" class="btn btn-primary btn-lg">新增</a>	
</div>

<div class="clearfix" style="margin: 10px 0"></div>
<div class="row placeholders">
	<?php foreach ($query as $key => $value): ?>
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
				<?php echo $value->title ?>
				<a href="<?php echo base_url('admin/reserve/notice_delete/'.$value->noticeId) ?>" class="btn btn-danger pull-right">刪除</a>
				<a href="<?php echo base_url('admin/reserve/notice_edit/'.$value->noticeId) ?>" class="btn btn-warning pull-right">編輯</a>
				<div class="clearfix"></div>
				</div>
				<div class="panel-body">
				<?php echo $value->content ?>
				</div>
			</div>
		</div>
		<div class="clearfix" style="margin:10px 0"></div>
	<?php endforeach ?>
</div>
<script>
	_$(function () {
		$("#notice").addClass("active");
	});
</script>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>
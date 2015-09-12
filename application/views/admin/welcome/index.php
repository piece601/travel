<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
	首頁管理
  <p class="lead"></p>
</h1>
<div class="row placeholders">
	<div>
		<a href="<?php echo base_url('admin/welcome/create') ?>" class="btn btn-primary btn-lg pull-right">新增區塊</a>
	</div>
	<div class="clearfix" style="margin:0 0 20px;"></div>
	<div class="panel panel-info">
		<div class="panel-heading">區塊</div>
		<table class="table table-hover">
		<?php foreach ($query as $key => $value): ?>
			<tr>
				<td><?php echo $value->title ?></td>
				<td><a href="<?php echo base_url('admin/welcome/edit/'.$value->welcomeId) ?>" class="btn btn-warning">編輯</a></td>
				<td><a href="javascript:if(confirm('確定刪除？'))location.href='<?php echo base_url('admin/welcome/delete/'.$value->welcomeId) ?>'" class="btn btn-danger">刪除</a></td>
			</tr>
		<?php endforeach ?>			
		</table>
	</div>
</div>
<script>
	_$(function () {
		$("#welcome").addClass("active");
	})
</script>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>
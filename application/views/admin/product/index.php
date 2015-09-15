<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
	行李箱管理
  <p class="lead"></p>
</h1>
<div class="pull-right">
	<a href="<?php echo base_url('admin/product/order/'.$major) ?>" class="btn btn-success btn-lg" id="order">
		排序
		<?php if ($major == 'aluminium'): ?>
			<?php echo '鋁鎂合金' ?>
		<?php endif ?>
		<?php if ($major == 'polycarbonate'): ?>
			<?php echo '聚碳酸酯' ?>
		<?php endif ?>
		<?php if ($major == 'fit'): ?>
			<?php echo '配件' ?>
		<?php endif ?>
	</a>
	<a href="<?php echo base_url('admin/product/create') ?>" class="btn btn-primary btn-lg">新增商品</a>	
</div>
<div class="clearfix" style="margin:10px 0;"></div>
<?php $this->load->view('admin/product/_ulnav'); ?>
<div class="clearfix" style="margin: 10px 0;"></div>
<div class="row placeholders">
	<hr>
	<div class="col-md-3">
		<div class="list-group">
			<?php if ($major == 'aluminium'): ?>
			  <a href="<?php echo base_url('admin/product/index/'.$major.'/Topas') ?>" id="Topas" class="list-group-item">TOPAS經典款</a>
			  <a href="<?php echo base_url('admin/product/index/'.$major.'/CF') ?>" id="CF" class="list-group-item">CF復古款</a>
			<?php endif ?>
			<?php if ($major == 'polycarbonate'): ?>
			  <a href="<?php echo base_url('admin/product/index/'.$major.'/SalsaAir') ?>" id="SalsaAir" class="list-group-item">Salsa Air系列</a>
			  <a href="<?php echo base_url('admin/product/index/'.$major.'/Salsa') ?>" id="Salsa" class="list-group-item">Salsa 系列</a>
			  <a href="<?php echo base_url('admin/product/index/'.$major.'/SalsaDeluxe') ?>" id="SalsaDeluxe" class="list-group-item">Salsa Deluxe系列</a>
			  <a href="<?php echo base_url('admin/product/index/'.$major.'/Limbo') ?>" id="Limbo" class="list-group-item">Limbo 系列</a>
			  <a href="<?php echo base_url('admin/product/index/'.$major.'/SalsaSport') ?>" id="SalsaSport" class="list-group-item">Salsa Sport系列</a>				
			<?php endif ?>
			<a href="<?php echo base_url('admin/product/index/'.$major.'/all') ?>" id="all" class="list-group-item">全部</a>
		</div>
	</div>
	<div class="col-md-9">
		<table class="table table-striped">
			<tr class="success">
				<td>商品名稱</td>
				<td>查看</td>
				<td>編輯</td>
				<td>刪除</td>
			</tr>
			<?php foreach ($query as $key => $value): ?>
				<tr>
					<td><?php echo $value->title ?></td>
					<td><a href="<?php echo base_url('admin/product/show/'.$value->productId) ?>" class="btn btn-primary">查看</a></td>
					<td><a href="<?php echo base_url('admin/product/edit/'.$value->productId) ?>" class="btn btn-warning">編輯</a></td>
					<td><a href="javascript:if(confirm('確定刪除？'))location.href='<?php echo base_url('admin/product/delete/'.$value->productId) ?>'" class="btn btn-danger">刪除</a></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>
<script>
	_$(function () {
		$("#product").addClass("active");
		$("#<?php echo $major ?>").addClass("active");
		$("#<?php echo $minor ?>").addClass("active");
	})
</script>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>

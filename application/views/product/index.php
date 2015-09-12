<?php require_once VIEWPATH.'_layouts/_header.php' ?>

<div class="row">
	<div class="box col-md-2" style="border-right:2px dotted rgb(187, 187,187);">
		<?php $this->load->view('product/_aside'); ?>
	</div>
	<div class="box col-md-10" style="min-height: 619px;">
		<?php foreach ($query as $key => $value): ?>
			<div class="col-md-4">
				<a href="<?php echo base_url('product/show/'.$value->productId) ?>"><img src="<?php echo base_url($value->path) ?>" alt="" class="img-responsive"></a>
				<div class="text-center" style="margin:10px 0 0"><?php echo $value->title ?></div>
			</div>
		<?php endforeach ?>
	</div>
</div>
<style>
	li.act {
		background-color: #FFA5A5;
	}
	#sub_nav .box {
		padding: 0;
	}
	#sub_nav ul {
		margin: 0 auto;
		display: table;
		font-size: 1.25em;
		font-weight: 400;
	}
	#sub_nav li {
		display: block;
		float: left;
	}
	#sub_nav li a {
		color: #333;
		display: block;
		padding: 35px;
		text-decoration: none;
	}
</style>
<?php $this->load->view('product/_js'); ?>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>

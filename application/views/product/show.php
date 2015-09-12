<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<div class="row">
	<div class="box">
		<div class="col-md-6">
			<img src="<?php echo base_url($query->path) ?>" alt="" class="img-responsive">
		</div>
		<div class="col-md-6">
			<table class="table table-hover">
	      <tr>
	        <td>商品名稱</td>
	        <td><h3 style="margin:0"><?php echo $query->title ?></h3></td>
	      </tr>
	      <tr>
	        <td>英寸</td>
	        <td><?php echo $query->in ?></td>
	      </tr>
	      <tr>
	        <td>尺寸</td>
	        <td><?php echo $query->size ?></td>
	      </tr>
	      <tr>
	        <td>顏色</td>
	        <td><?php echo $query->color ?></td>
	      </tr>
	      <tr>
	        <td>租金</td>
	        <td><?php echo $query->rent ?></td>
	      </tr>
	      <tr>
	        <td>商品價格</td>
	        <td><?php echo $query->price ?></td>
	      </tr>
	    </table>
		</div>
		<div class="clearfix"></div>
		<hr>
		<section>
			<?php echo $query->content ?>
		</section>
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
<script>
_$(function() {
  $("#product").addClass("act");
  $("#<?php echo $major ?>").addClass("act");
  $("#<?php echo $minor ?>").addClass("act");
});
</script>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>

<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
	行李箱管理
  <p class="lead"></p>
</h1>
<div class="pull-right">
  <a href="<?php echo base_url('admin/product/edit/'.$query->productId) ?>" class="btn btn-warning">編輯</a>
  <a href="javascript:if(confirm('確定刪除？'))location.href='<?php echo base_url('admin/product/delete/'.$query->productId) ?>'" class="btn btn-danger">刪除</a>
</div>
<div class="clearfix" style="margin:20px 0;"></div>
<div class="row placeholders">
  <div class="col-md-6"><img src="<?php echo base_url($query->path) ?>" alt="" class="img-responsive"></div>
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
  <?php echo $query->content ?>
</div>
<script>
_$(function () {
  $("#product").addClass("active");
});
</script>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>

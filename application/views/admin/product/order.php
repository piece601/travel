<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
  行李箱管理 - 排序
  <p class="lead"><?php echo ($major == 'aluminium') ? '鋁鎂合金':'聚碳酸酯' ?></p>
</h1>
<div class="row placeholders">
<div class="panel panel-success">
  <div class="panel-heading">拖曳排序</div>
  <table class="table table-hover">
  <thead>
  <tr>
    <td>#標題</td>
    <td>#英寸</td>
    <td>#類別</td>
  </tr>
    
  </thead>
  <?php foreach ($query as $key => $value): ?>
    <tr id="item-<?php echo $value->productId?>">
      <td><?php echo $value->title ?></td>
      <td><?php echo $value->in ?></td> 
      <td>
        <?php switch ($value->minor) {
          case 'Topas':
            echo "TOPAS經典款";
            break;
          case 'CF':
            echo "CF復古款";
            break;
          case 'SalsaAir':
            echo "Salsa Air系列";
            break;
          case 'Salsa':
            echo "Salsa 系列";
            break;
          case 'SalsaDeluxe':
            echo "Salsa Deluxe系列";
            break;
          case 'Limbo':
            echo "Limbo 系列";
            break;
          case 'SalsaSport':
            echo "Salsa Sport系列";
            break;
        } ?>
      </td>
    </tr>
  <?php endforeach ?> 
</table>
</div>

</div>
<script>
_$(function () {
  $("#product").addClass("active");
  $(function() {
    $( "tbody" ).sortable();
    $( "tbody" ).disableSelection();
  });
  $('tbody').sortable({
    axis: 'y',
    update: function (event, ui) {
      var data = $(this).sortable('serialize');
      // POST to server using $.post or $.ajax
      $.ajax({
          data: data,
          type: 'POST',
          url: "<?php echo base_url('admin/product/ajax_change_position/'.$major.'/'.$this->session->userdata('account').'/'.$this->session->userdata('password')) ?>",
          dataType: 'text',
          success: function(msg) {
            // console.log(msg);
            // window.location.reload(); //拖曳更新完自動刷頁
          }
      })
    }
  });
}); 
</script>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>

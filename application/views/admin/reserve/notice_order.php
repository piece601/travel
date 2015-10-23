<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">注意事項 - 排序</h1>
<div class="row placeholders">
<div class="panel panel-success">
  <div class="panel-heading">拖曳排序</div>
  <table class="table table-hover">
<!--   <thead>
    <tr>
      <td>#標題</td>
    </tr>
  </thead> -->
  <?php foreach ($query as $key => $value): ?>
    <tr id="item-<?php echo $value->noticeId?>">
      <td><?php echo $value->title ?></td>
    </tr>
  <?php endforeach ?> 
</table>
</div>

</div>
<script>
_$(function () {
  $("#notice").addClass("active");
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
          url: "<?php echo base_url('admin/reserve/ajax_notice_change_position/'.$this->session->userdata('account').'/'.$this->session->userdata('password')) ?>",
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

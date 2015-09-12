<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
	訂單管理
  <p class="lead"></p>
</h1>
<?php require_once VIEWPATH.'admin/reserve/_ulnav.php' ?>
<div class="row placeholders">
	<div class="panel panel-warning">
		<div class="panel-heading">未處理</div>
		<table class="table table-hover">
			<tr>
				<td>單號</td>
				<td>訂單送出日</td>
				<td>人名</td>
				<td>查看</td>
				<td>完成處理</td>
			</tr>
			<?php foreach ($query as $key => $value): ?>
				<tr id="<?php echo $value->reserveId ?>">
					<td><?php echo $value->reserveId ?></td>
					<td><?php echo $value->createDate ?></td>
					<td><?php echo $value->name ?></td>
					<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-id="<?php echo $value->reserveId ?>">查看</button></td>
					<td><button type="button" class="btn btn-success" id="btnProc" data-id="<?php echo $value->reserveId ?>">處理</button></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>
<?php require_once VIEWPATH.'admin/reserve/_modal.php' ?>
<script>
	var currentId;
	var	removeTr = function () {
		$("tr#"+currentId).addClass("animated bounceOutRight").delay(500).queue(function () {$(this).remove().dequeue()});
	};
	var	procAjax = function () {
		$.get("<?php echo base_url('admin/reserve/ajax_check')?>/"+currentId+"<?php echo '/'.$this->session->userdata('account').'/'.$this->session->userdata('password') ?>", function (data) {
			if (data.code == '1') {
				removeTr();
			} else {
				alert("處理失敗");
			};
		});
	};
	_$(function () {
		$("#reserve").addClass("active");
		$("#unchecked").addClass("active");
		$("[data-toggle=modal]").click(function () {
			currentId = $(this).attr("data-id");
			$("input").empty();
			$.get("<?php echo base_url('admin/reserve/ajax_select') ?>"+'/'+currentId+"<?php echo '/'.$this->session->userdata('account').'/'.$this->session->userdata('password') ?>", function (data) {
				for (var i in data) {
					$("[name="+i+"]").val(data[i]);
				};
			});
		});
		$("#check").click(function () {
			procAjax()
		});
		$("button#btnProc").click(function () {
			currentId = $(this).attr("data-id");
			procAjax();
		});
	});
</script>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>

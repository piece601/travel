<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
	留言板管理
  <p class="lead"></p>
</h1>
<div class="row placeholders">
</div>
<?php require_once VIEWPATH.'admin/guest/_ulnav.php' ?>
<div class="row placeholders">
	<div class="panel panel-warning">
		<div class="panel-heading">未處理</div>
		<table class="table table-hover">
			<tr>
				<td>留言日期</td>
				<td>名字</td>
				<td>信箱</td>
				<td>電話</td>
				<td>查看</td>
			</tr>
			<?php foreach ($query as $key => $value): ?>
				<tr id="<?php echo $value->guestId ?>">
					<td><?php echo $value->createDate ?></td>
					<td><?php echo $value->name ?></td>
					<td><?php echo $value->email ?></td>
					<td><?php echo $value->telephone ?></td>
					<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-id="<?php echo $value->guestId ?>">查看</button></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>
<?php require_once VIEWPATH.'admin/guest/_modal.php' ?>
<script>
	var currentId;
	var	removeTr = function () {
		$("tr#"+currentId).addClass("animated bounceOutRight").delay(500).queue(function () {$(this).remove().dequeue()});
	};
	var	procAjax = function () {
		$.post("<?php echo base_url('admin/guest/ajax_recontent')?>/"+currentId+"<?php echo '/'.$this->session->userdata('account').'/'.$this->session->userdata('password') ?>", {
			recontent: $("[name=recontent]").val()
		}).done(function (data) {
			if (data.code == '1') {
				removeTr();
			} else {
				alert("留言失敗");
			};
		});
	};
	_$(function () {
		$("#guest").addClass("active");
		$("#unchecked").addClass("active");
		$("[data-toggle=modal]").click(function () {
			currentId = $(this).attr("data-id");
			$("[name=recontent]").val('');
			$.get("<?php echo base_url('admin/guest/ajax_select') ?>"+'/'+currentId+"<?php echo '/'.$this->session->userdata('account').'/'.$this->session->userdata('password') ?>", function (data) {
				for (var i in data) {
					$("[name="+i+"]").text(data[i]);
				};
			});
		});
		$("#check").click(function () {
			procAjax()
		});
	});
</script>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>

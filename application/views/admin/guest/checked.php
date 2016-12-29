<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
	留言板管理
  <p class="lead"></p>
</h1>
<div class="row placeholders">
</div>
<?php require_once VIEWPATH.'admin/guest/_ulnav.php' ?>
<div class="row placeholders">
	<div class="panel panel-success">
		<div class="panel-heading">已回覆</div>
		<table class="table table-hover">
			<tr>
				<td>留言日期</td>
				<td>回覆日期</td>
				<td>名字</td>
				<td>信箱</td>
				<td>電話</td>
				<td>查看</td>
				<td>刪除</td>	
			</tr>
		</table>
	</div>
</div>
<?php require_once VIEWPATH.'admin/guest/_modal.php' ?>
<script>
	var counter = 1;
	var currentId;
	var	removeTr = function () {
		$("tr#"+currentId).addClass("animated bounceOutRight").delay(500).queue(function () {$(this).remove().dequeue()});
	};

	var reloadDOM = function () {
  	$("[data-toggle=modal]").click(function () {
			currentId = $(this).attr("data-id");
			$("textarea").empty();
			$.get("<?php echo base_url('admin/guest/ajax_select/') ?>"+'/'+currentId+"<?php echo '/'.$this->session->userdata('account').'/'.$this->session->userdata('password') ?>", function (data) {
				for (var i in data) {
					$("[name="+i+"]").text(data[i]);
				};
			});
		});
		// 刪除
		$("#delete").click(function () {
			currentId = $(this).attr("data-id");
			$.get("<?php echo base_url('admin/guest/ajax_delete/') ?>"+'/'+currentId+"<?php echo '/'.$this->session->userdata('account').'/'.$this->session->userdata('password') ?>", function (data) {
				if ( data.code == 1 ) {
					$("#"+currentId).addClass("animated bounceOut").delay(500).queue(function () {$(this).remove().dequeue()});
				};
			});
		});
  };

	var insertData = function (counter) {
    $.ajax({
      url: "<?php echo base_url('admin/guest/ajax_load_checked/') ?>"+'/'+counter+"<?php echo '/'.$this->session->userdata('account').'/'.$this->session->userdata('password') ?>",
      crossDomain: true,
      beforeSend: function () {
        // $("#loading").show("slow");
      }
    }).done(function (data) {
      $.each( data, function (key, data) {
        $("table").append(
	      	'<tr id="'+ data.guestId +'">'+
						'<td>'+ data.createDate +'</td>'+
						'<td>'+ data.replyDate +'</td>'+
						'<td>'+ data.name +'</td>'+
						'<td>'+ data.email +'</td>'+
						'<td>'+ data.telephone +'</td>'+
						'<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-id="'+ data.guestId +'">查看</button></td>'+
						'<td><button type="button" class="btn btn-danger" id="delete" data-id="'+ data.guestId + '">刪除</button></td>'+
					'</tr>'
				);
      });
      reloadDOM();
      // $("#loading").hide("slow");
    });
  }; 

	_$(function () {
		$("#guest").addClass("active");
		$("#checked").addClass("active");
		$("button#check").remove();
		insertData(0);
		reloadDOM();		
	});
</script>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>

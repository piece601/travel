<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
	訂單管理
  <p class="lead"></p>
</h1>
<?php require_once VIEWPATH.'admin/reserve/_ulnav.php' ?>
<div class="row placeholders">
	<div class="panel panel-success">
		<div class="panel-heading">已處理</div>
		<table class="table table-hover">
			<tr>
				<td>單號</td>
				<td>訂單送出日</td>
				<td>人名</td>
				<td>查看</td>
			</tr>
		</table>
		<!-- <figure class="text-center"><img src="<?php echo base_url('assets/images/loading.gif')?>" alt="" id="loading" style="display:none;"></figure> -->
	</div>
</div>
<?php require_once VIEWPATH.'admin/reserve/_modal.php' ?>
<script>
	var counter = 1;
	var currentId;

	var reloadDOM = function () {
  	$("[data-toggle=modal]").click(function () {
			currentId = $(this).attr("data-id");
			$("input").empty();
			$.get("<?php echo base_url('admin/reserve/ajax_select') ?>"+'/'+currentId+"<?php echo '/'.$this->session->userdata('account').'/'.$this->session->userdata('password') ?>", function (data) {
				for (var i in data) {
					$("[name="+i+"]").val(data[i]);
				};
			});
		});
  };
	var	removeTr = function () {
		$("tr#"+currentId).addClass("animated bounceOutRight").delay(500).queue(function () {$(this).remove().dequeue()});
	};
	var insertData = function (counter) {
    $.ajax({
      url: "<?php echo base_url('admin/reserve/ajax_load_checked') ?>"+'/'+counter+"<?php echo '/'.$this->session->userdata('account').'/'.$this->session->userdata('password') ?>",
      crossDomain: true,
      beforeSend: function () {
        // $("#loading").show("slow");
      }
    }).done(function (data) {
      $.each( data, function (key, data) {
        $("table").append(
	      	'<tr id="'+ data.reserveId +'">'+
						'<td>'+ data.reserveId +'</td>'+
						'<td>'+ data.createDate +'</td>'+
						'<td>'+ data.name +'</td>'+
						'<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-id="'+ data.reserveId +'">查看</button></td>'+
					'</tr>'
				);
      });
      reloadDOM();
      // $("#loading").hide("slow");
    });
  }; 

	_$(function () {
		insertData(0);
		$("#reserve").addClass("active");
		$("#checked").addClass("active");
		$("button#check").remove();

		// 監視滾輪到底部
		$(window).scroll( function () {
	    if ( $(window).scrollTop() == $(document).height() - $(window).height() ) {
	      insertData(counter++);
	    };
	  });

	});
</script>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>

<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<div class="row">
	<div class="box text-center">
		<a href="<?php echo base_url('guest/create') ?>	" class="btn btn-primary btn-lg animated bounceInRight">我要留言</a>
	</div>
</div>
<div class="sense">
<!-- 	<div class="row">
		<div class="box">
			<hr>
				<h2 class="intro-text text-center">
					姓名
				</h2>
			<hr>
				<p class="text-center">
					內榮
				</p>
			<hr>
				<p class="text-center text-success">
					回覆
				</p>		
		</div>
	</div> -->
</div>
<!-- <figure class="text-center"><img src="<?php echo base_url('assets/images/loading.gif')?>" alt="" id="loading" style="display:none;"></figure> -->
<script>
	var counter = 1;
	var insertData = function (counter) {
    $.ajax({
      url: "<?php echo base_url('guest/ajax_load') ?>"+'/'+counter,
      crossDomain: true,
      beforeSend: function () {
        // $("#loading").show("slow");
      }
    }).done(function (data) {
      $.each( data, function (key, data) {
      	console.log(data);
        $(".sense").append(
        	'<div class="row wow zoomIn">'+
						'<div class="box">'+
							'<hr>'+
								'<h2 class="intro-text text-center text-primary">'+
									data.name+
								'</h2>'+
							'<hr>'+
								'<p class="text-center">'+
									data.content+
								'</p>'+
							'<hr>'+
								'<p class="text-center text-success">'+
									data.recontent+
								'</p>'+
						'</div>'+
					'</div>'
				);
      });
      // $("#loading").hide("slow");
    });
  }; 
	_$(function () {
		$("#guest").addClass("act");
		insertData(0);
		// 監視滾輪到底部
		$(window).scroll( function () {
	    if ( $(window).scrollTop() == $(document).height() - $(window).height() ) {
	      insertData(counter++);
	    };
	  });
	});
</script>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>

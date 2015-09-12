<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<div class="row animated fadeIn">
	<div class="box">
		<hr>
			<h2 class="intro-text text-center">
				預約
			</h2>
		<hr>
		<form class="form-horizontal" method="post">
			<div class="form-group">
		    <label for="title" class="col-sm-3 control-label">箱子款項</label>
		    <div class="col-sm-7">
		      <input type="text" name="box" class="form-control" required maxlength="255">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="title" class="col-sm-3 control-label">顏色</label>
		    <div class="col-sm-7">
		      <input type="text" name="color" class="form-control" placeholder="紅色" maxlength="255">
		    </div>
		  </div>
		  <div class="form-group">
			  <label for="title" class="col-sm-3 control-label">借箱日期</label>
		    <div class="col-sm-2">
		      <input type="date" name="rentDate" class="form-control" maxlength="255" required>
		    </div>
		    <label for="title" class="col-sm-1 control-label">還箱日期</label>
		    <div class="col-sm-2">
		      <input type="date" name="returnDate" class="form-control" maxlength="255" required>
		    </div>
		    <label for="title" class="col-sm-1 control-label">租借天數</label>
		    <div class="col-sm-1">
		    	<select name="day" type="number" class="form-control" required>
		    		<option value=""></option>
		    		<?php for ($i=1; $i < 91; $i++): ?>
		    			<option value="<?php echo $i ?>"><?php echo $i ?></option>
		    		<?php endfor ?>
		    	</select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="title" class="col-sm-3 control-label">姓名</label>
		    <div class="col-sm-3">
		      <input type="text" name="name" class="form-control" placeholder="王曉明" required maxlength="255">
		    </div>
		    <label for="title" class="col-sm-1 control-label">電話</label>
		    <div class="col-sm-3">
		      <input type="tel" name="telephone" class="form-control" placeholder="09XX-XXX-XXX" required maxlength="15" maxlength="255">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="title" class="col-sm-3 control-label">地址</label>
		    <div class="col-sm-7">
		      <input type="text" name="address" class="form-control" placeholder="完整地址" required maxlength="255">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="title" class="col-sm-3 control-label">信箱</label>
		    <div class="col-sm-7">
		      <input type="email" name="email" class="form-control" placeholder="abc@example.com" required maxlength="255">
		    </div>
		  </div>
			<div class="form-group">
		  	<label for="title" class="col-sm-3 control-label">取箱方式</label>
		  	<div class="col-sm-7">
		  	<label class="radio-inline"><input type="radio" name="deliver" value="自取" required>自取</label>
		  	<label class="radio-inline"><input type="radio" name="deliver" value="宅配" required>宅配</label>		  		
		  	</div>
	    </div>
		  <div class="form-group">
		    <label for="content" class="col-sm-3 control-label">備註</label>
		    <div class="col-sm-7">
		      <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
		    </div>
		  </div>
		  <div class="form-group">
			  <label for="content" class="col-sm-3 control-label"></label>
			  <div class="col-sm-7">
			  	<div class="g-recaptcha" data-sitekey="6Lf_AwsTAAAAAHjWY_dw3dq2BwZUBj0ZyBOyhA-q"></div>
			  </div>
		  </div>
		  
		  <div class="form-group">
		    <div class="col-sm-offset-1 col-sm-10 text-center">
		      <input type="submit" class="btn btn-primary btn-lg" value="送出">
		    </div>
		  </div>
		</form>
	</div>
</div>
<script>
	_$(function () {
		$("#reserve").addClass("act");
	})
</script>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>

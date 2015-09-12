<?php require_once VIEWPATH.'_layouts/_header.php' ?>

<div class="row wow bounceIn">
	<div class="box">
		<hr>
			<h2 class="intro-text text-center">
				留言板
			</h2>
		<hr>
		<form class="form-horizontal" method="post">
			<div class="form-group">
		    <label for="title" class="col-sm-3 control-label">姓名</label>
		    <div class="col-sm-7">
		      <input type="text" name="name" class="form-control" placeholder="(必填)" required maxlength="255">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="title" class="col-sm-3 control-label">電話</label>
		    <div class="col-sm-7">
		      <input type="tel" name="telephone" class="form-control" placeholder="(選填, 不會顯示出來)" maxlength="255">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="title" class="col-sm-3 control-label">Email</label>
		    <div class="col-sm-7">
		      <input type="email" name="email" class="form-control" placeholder="(必填)" required maxlength="255">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="content" class="col-sm-3 control-label">內容</label>
		    <div class="col-sm-7">
		      <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
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
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>

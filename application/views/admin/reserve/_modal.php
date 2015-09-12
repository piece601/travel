<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">訂單</h4>
      </div>
      <div class="modal-body">
	      <div class="form-group">
			    <label for="title" class="col-sm-3 control-label">編號</label>
			    <div class="col-sm-7">
			      <input type="text" name="reserveId" class="form-control" required maxlength="255">
			    </div>
			  </div>
				<div class="form-group">
			    <label for="title" class="col-sm-3 control-label">箱子款項</label>
			    <div class="col-sm-7">
			      <input type="text" name="box" class="form-control" required maxlength="255">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="title" class="col-sm-3 control-label">顏色</label>
			    <div class="col-sm-7">
			      <input type="text" name="color" class="form-control" maxlength="255">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="title" class="col-sm-3 control-label">還箱日期</label>
			    <div class="col-sm-7">
			      <input type="date" name="returnDate" class="form-control" maxlength="255" required>
			    </div>
			  </div>
			  <div class="clearfix"></div>
			  <div class="form-group">
			  	<label for="title" class="col-sm-3 control-label">租借天數</label>
			    <div class="col-sm-7">
			    	<input type="text" name="day" class="form-control">
			    </div>
			  </div>
			  <div class="clearfix"></div>
			  <div class="form-group">
			    <label for="title" class="col-sm-3 control-label">姓名</label>
			    <div class="col-sm-7">
			      <input type="text" name="name" class="form-control"  required maxlength="255">
			    </div>
			  </div>
			  <div class="clearfix"></div>
			  <div class="form-group">
			  	<label for="title" class="col-sm-3 control-label">電話</label>
			    <div class="col-sm-7">
			      <input type="tel" name="telephone" class="form-control"  required maxlength="15" maxlength="255">
			    </div>
			  </div>
			  <div class="clearfix"></div>
			  <div class="form-group">
			    <label for="title" class="col-sm-3 control-label">地址</label>
			    <div class="col-sm-7">
			      <input type="text" name="address" class="form-control"  required maxlength="255">
			    </div>
			  </div>
			  <div class="clearfix"></div>
			  <div class="form-group">
			    <label for="title" class="col-sm-3 control-label">信箱</label>
			    <div class="col-sm-7">
			      <input type="email" name="email" class="form-control" required maxlength="255">
			    </div>
			  </div>
				<div class="form-group">
			  	<label for="title" class="col-sm-3 control-label">取相方式</label>
			  	<div class="col-sm-7">
			  		<input type="text" name="deliver" class="form-control">
			  	</div>
		    </div>
			  <div class="form-group">
			    <label for="content" class="col-sm-3 control-label">備註</label>
			    <div class="col-sm-7">
			      <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
			    </div>
			  </div>
				<div class="clearfix"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
        <button type="button" class="btn btn-success" id="check" data-dismiss="modal">確認處理</button>
      </div>
    </div>
  </div>
</div>
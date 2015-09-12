<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" name="createDate"></h4>
      </div>
      <div class="modal-body">
			  <div class="form-group">
			    <label for="title" class="col-sm-3 control-label">名字</label>
			    <div class="col-sm-7">
			    	<p name="name"></p>
			    </div>
			  </div>
			  <div class="clearfix"></div>
			  <div class="form-group">
			    <label for="title" class="col-sm-3 control-label">電話</label>
			    <div class="col-sm-7">
			    	<p name="telephone"></p>
			    </div>
			  </div>
			  <div class="clearfix"></div>
			  <div class="form-group">
			    <label for="title" class="col-sm-3 control-label">信箱</label>
			    <div class="col-sm-7">
			    	<p name="email"></p>
			    </div>
			  </div>
			  <div class="clearfix"></div>
			  <div class="form-group">
			    <label for="content" class="col-sm-3 control-label">留言內容</label>
			    <div class="col-sm-7">
			    	<textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
			    	<!-- <div name="content" style="word-wrap: break-word;"></div> -->
			    </div>
			  </div>
			  <div class="clearfix"></div>
			  <hr>
				<div class="form-group">
			    <label for="content" class="col-sm-3 control-label">回覆</label>
			    <div class="col-sm-7">
			    	<textarea class="form-control" name="recontent" id="" cols="30" rows="10"></textarea>
			    </div>
			  </div>
			  <div class="clearfix"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
        <button type="button" class="btn btn-success" id="check" data-dismiss="modal">送出</button>
      </div>
    </div>
  </div>
</div>
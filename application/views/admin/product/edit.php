<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ?>
<h1 class="page-header">
  行李箱管理 - 編輯
  <p class="lead"></p>
</h1>
<div class="clearfix" style="margin: 10px 0;"></div>
<div class="row placeholders">
<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="userfile" class="col-sm-2 control-label">目前照片</label>
    <div class="col-sm-9">
      <img src="<?php echo base_url($query->path) ?>" alt="" class="img-responsive" onerror="this.src='http://fakeimg.pl/300/?text=^_^'"> 
    </div>
  </div>
  <div class="form-group">
    <label for="userfile" class="col-sm-2 control-label">照片</label>
    <div class="col-sm-9">
      <input type="file" name="userfile" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">主類</label>
    <div class="col-sm-4">
      <select name="major" class="form-control">
        <option value="aluminium">鋁鎂合金</option>
        <option value="polycarbonate">PC聚碳酸酯</option>
        <option value="fit">配件</option>
      </select>
    </div>
    <label for="title" class="col-sm-1 control-label">子類</label>
    <div class="col-sm-4">
      <select name="minor" class="form-control" id="minorBlock">
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">英寸</label>
    <div class="col-sm-4">
      <select name="in" class="form-control">
        <option value="20">20</option>
        <option value="22">22</option>
        <option value="24">24</option>
        <option value="26">26</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="32">32</option>
        <option value="other">其它</option>
      </select>
    </div>
    <label for="title" class="col-sm-1 control-label">尺寸</label>
    <div class="col-sm-4">
      <input type="text" name="size" class="form-control" placeholder="1x1x1" value="<?php echo $query->size ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">顏色</label>
    <div class="col-sm-4">
      <!-- <input type="text" name="color" class="form-control" placeholder="白色,黃色"> -->
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="白色">白色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="黑色">黑色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="消光黑">消光黑
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="灰色">灰色
      </label>
      <div class="clearfix"></div>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="藍色">藍色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="深藍色">深藍色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="淺藍色">淺藍色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="海藍色">海藍色
      </label>
      <div class="clearfix"></div>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="夜藍色">夜藍色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="綠色">綠色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="青綠色">青綠色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="紅色">紅色
      </label>
      <div class="clearfix"></div>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="寶石紅">寶石紅
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="紫色">紫色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="古銅色">古銅色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="銀色">銀色
      </label>
      <div class="clearfix"></div>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="古銅色">古銅色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="棕色">棕色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="石褐色">石褐色
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="color[]" value="鈦金色">鈦金色
      </label>
    </div>
    <label for="title" class="col-sm-1 control-label">重量</label>
    <div class="col-sm-4">
      <input type="text" name="weight" class="form-control" value="<?php echo $query->weight ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">租金</label>
    <div class="col-sm-4">
      <input type="text" name="rent" class="form-control" placeholder="300/天" value="<?php echo $query->rent ?>">
    </div>
    <label for="title" class="col-sm-1 control-label">商品價錢</label>
    <div class="col-sm-4">
      <input type="text" name="price" class="form-control" placeholder="50,000" value="<?php echo $query->price ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">標題</label>
    <div class="col-sm-9">
      <input type="text" name="title" class="form-control" value="<?php echo $query->title ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">說明</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="description" value="<?php echo $query->description ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">內容</label>
    <div class="col-sm-9">
      <textarea name="content" class="form-control" id="" cols="30" rows="30"><?php echo $query->content ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-1 text-center">
      <input type="submit" class="btn btn-primary btn-lg" value="送出">
    </div>
  </div>
</form>
</div>
<?php $this->load->view('_components/_immupload.php'); ?>
<?php $this->load->view('_js/_tinymce.php'); ?>

<script>
  var defaultValue = function () {
    $("[value=<?php echo $query->major ?>]").attr("selected", true);
    changeMinor('<?php echo $query->major ?>');
    $("[value=<?php echo $query->minor ?>]").attr("selected", true);
    $("[value='<?php echo $query->in ?>'").attr("selected", true);
    <?php if ( $query->color != '' ): ?>
      <?php foreach (explode(',',$query->color) as $key => $value): ?>
        $("[value=<?php echo $value ?>]").attr('checked', true);
      <?php endforeach ?>
    <?php endif ?>
  };
  // 改掉子選單
  var changeMinor = function (major) {
    $("[name=minor]").empty();
    if (major == 'aluminium') {
      $('#minorBlock').show();
      $.each({
        Topas: 'TOPAS經典款',
        CF: 'CF復古款'
      }, function (val, text) {
        $("[name=minor]").append(
          $("<option></option>").val(val).html(text)
        );
      });
    };
    if (major == 'polycarbonate') {
      $('#minorBlock').show();
      $.each({
        SalsaAir: 'Salsa Air系列',
        Salsa: 'Salsa 系列',
        SalsaDeluxe: 'Salsa Deluxe系列',
        Limbo: 'Limbo 系列',
        SalsaSport: 'Salsa Sport系列'
      }, function (val, text) {
        $("[name=minor]").append(
          $("<option></option>").val(val).html(text)
        );
      });
    };
    if (major == 'fit') {
      $('#minorBlock').hide();
    };

  };
  _$(function () {
    $("#product").addClass("active");
    $( "[name=major]" )
      .change(function() {
        $( "[name=major] option:selected" ).each(function() {
          changeMinor($(this).val());
        });
      })
      .trigger( "change" );
    defaultValue();
  });
</script>
<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ?>

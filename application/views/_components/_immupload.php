<link rel="stylesheet" href="<?php echo base_url('assets/css/circles.css') ?>">
<div class="well text-center">
  <label for="">立即上傳</label>
  <div class="circles hidden">Loading...</div>
  <input id="immFile" class="form-control" type="file" name="userfile" />
  <p id="immText" class="hidden" style="margin: 30px 0 0">上傳中...</p>
</div>
<script>
_$(function () {
  $.getScript("<?php echo base_url('assets/js/ajaxfileupload.js')?>", function () {
    $('#immFile').on('change', ajaxFileUpload);
    function ajaxFileUpload() {
      $("#immFile").toggleClass('hidden');
      $("#immText").toggleClass('hidden');
      $(".circles").toggleClass('hidden');
      $.ajaxFileUpload({
        url: "<?php echo base_url('admin/ajax/immupload/'.$this->session->userdata('account').'/'.$this->session->userdata('password'))?>",
        secureuri: false,
        fileElementId: 'immFile', //這個是對應到 input file 的 ID
        dataType: 'text',
        success: function(data, status){
          if (data == '') {
            $("#immFile").toggleClass('hidden');
            $("#immText").toggleClass('hidden');
            $(".circles").toggleClass('hidden');
            alert('上傳失敗');
          } else {
            $("#immFile").toggleClass('hidden');
            $("#immText").toggleClass('hidden');
            $(".circles").toggleClass('hidden');
            var content = tinyMCE.activeEditor.getContent() + '<img class="img-responsive" src="<?php echo base_url()?>'+ data +'">';
            tinyMCE.activeEditor.setContent( content, {format : 'raw'});
          };
          $('#immFile').on('change', ajaxFileUpload);
        },
        error: function(data, status, e){
          alert('上傳失敗');
          $('#immFile').on('change', ajaxFileUpload);
        }
      });
    }
  })
});
</script>
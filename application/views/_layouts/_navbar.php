<style>
  @media screen and (max-width: 991px) and (min-width: 768px){
    .nav>li>a {
         padding: 20px 20px;
    }
  }
</style>
<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
      <a class="navbar-brand" href="index.html">租趣玩</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="welcome">
          <a href="<?php echo base_url() ?>">首頁</a>
        </li>
        <li id="product">
          <a href="<?php echo base_url('product') ?>">行李箱</a>
        </li>
        <li id="fit">
          <a href="<?php echo base_url('fit') ?>">配件</a>
        </li>
        <li id="notice">
          <a href="<?php echo base_url('reserve/notice') ?>">租借事項</a>
        </li>
        <li id="reserve">
          <a href="<?php echo base_url('reserve') ?>">預約租借</a>
        </li>
        <li id="guest">
          <a href="<?php echo base_url('guest') ?>">留言板</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>
<script>
_$(function () {
  // $("nav.navbar").scrollToFixed();
});
</script>
  </div>
  <!-- /.container -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <?php date_default_timezone_set("Asia/Taipei") ?>
          <p style="padding: 20px 35px;">Copyright &copy; Piece <?php echo date("Y") ?></p>
        </div>
      </div>
    </div>
  </footer>
  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-scrolltofixed-min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.lazyload.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/wow.min.js') ?>"></script>
  <script>new WOW().init();</script>
  <?php require_once VIEWPATH.'_js/_lazyload.php' ?>
  </main>
  <!-- <script>console.log(document.getElementsByTagName('header')[0])</script> -->
  <script>document.getElementById('main').style.minHeight=window.innerHeight-350+"px";</script>
</body>
</html>
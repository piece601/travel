<?php require_once VIEWPATH.'_layouts/_header.php' ;?>

<div class="alert alert-success text-center"><h3><?php echo $message;?></h3></div> 
<p class="text-info text-center">三秒回前頁</p>
<script>setTimeout("location.href='<?php echo base_url($redirectUrl)?>'", 3000)</script>

<?php require_once VIEWPATH.'_layouts/_footer.php' ;?>
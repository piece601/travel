<?php require_once VIEWPATH.'_layouts/_header.php' ;?>

<div class="alert alert-warning"><h3><?php echo $message;?></h3></div> 
<p class="text-info text-center">三秒回前頁</p>
<script>setTimeout("history.go(-1)", 3000)</script>

<?php require_once VIEWPATH.'_layouts/_footer.php' ;?>
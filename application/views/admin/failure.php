<?php require_once VIEWPATH.'_layouts/_admin/_header.php' ;?>

<div class="alert alert-warning"><h3><?php echo $message;?></h3></div> 
<p class="text-info text-center">一秒回前頁</p>
<script>setTimeout("history.go(-1)", 1000)</script>

<?php require_once VIEWPATH.'_layouts/_admin/_footer.php' ;?>
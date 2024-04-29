
<?php
$url = $_GET["url"]; 
$link = 'https://biloa.website/ok.embed.v2/url.php?id=' .$url;
?>


<a href="<?php echo $link;?>"><img class="imh" src="img.ok.jpg" alt=""></a>
<style>
html, body{
  height: 100%;
  margin: 0;
  display: flex;
  flex-direction: column;
}
.imh{
	width: 100%;
	height: 100%;
 }
</style>
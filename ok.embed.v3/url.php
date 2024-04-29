<?php
$id = $_GET["id"]; 
$text = file_get_contents("https://m.ok.ru/video/" . $id);
echo $text;
?>

<script src="https://loadigital.github.io/movies.biloa/js/jquery.js"></script>
<script type="text/javascript">$(window).load(function(){$("#loader-wrapper").delay(1500).fadeOut("slow");});</script>
<style type="text/css">
    * {
	padding: 0;
	margin: 0;
    }
    html, body{
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
    }
  #container{
    display: none;
  }
  .outLnk{
    color:#000;
  }
 body{
	background:#000;
  }

  /*loading*/
  #loader-wrapper {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1000;
	background: #0c111f
    }

    #preloader {
	display: block;
	position: relative;
	left: 50%;
	top: 50%;
	width: 150px;
	height: 150px;
	margin: -75px 0 0 -75px;
	border-radius: 50%;
	border: 3px solid transparent;
	border-top-color: #dc7612;
	-webkit-animation: spin 2s linear infinite;
	animation: spin 2s linear infinite;
	z-index: 1001
    }

    #preloader:before {
	content: "";
	position: absolute;
	top: 5px;
	left: 5px;
	right: 5px;
	bottom: 5px;
	border-radius: 50%;
	border: 3px solid transparent;
	border-top-color: #dc7612;
	-webkit-animation: spin 3s linear infinite;
	animation: spin 3s linear infinite
    }

    #preloader:after {
	content: "";
	position: absolute;
	top: 15px;
	left: 15px;
	right: 15px;
	bottom: 15px;
	border-radius: 50%;
	border: 3px solid transparent;
	border-top-color: #dc7612;
	-webkit-animation: spin 1.5s linear infinite;
	animation: spin 1.5s linear infinite
    }

    @-webkit-keyframes spin {
	0% {
		-webkit-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		transform: rotate(0deg)
	}
	100% {
		-webkit-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		transform: rotate(360deg)
	}
    }

    @keyframes spin {
	0% {
		-webkit-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		transform: rotate(0deg)
	}
	100% {
		-webkit-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		transform: rotate(360deg)
	}
    }
    .imh{
	width: 100%;
	height: 100%;
    left: 50%;
	top: 50%;
    }
    .main-link{
    width: 100%;
	height: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    }
</style>

<div id="loader-wrapper">
    <div id="preloader"></div>
</div>

<div class="main-link">
<a id="link"  href=""><img class="imh" src="img.ok.jpg" alt="" ></a>
</div>

<script>
    let video = "http://localhost/EN%20DESARROLLO/ok.embed.v3/video.html?url="
    var link = document.querySelector('.vdo a').href;
	var url_video = window.base =btoa(link);
    document.getElementById("link").href = video + url_video;

</script>

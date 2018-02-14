<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Playfair+Display+SC|Prata" rel="stylesheet">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>KUBO: Holding Materials</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

$(document).ready(function(e) {
    initMenu();
});

</script>
<style>

#container {
	padding: 15px;	
	position: relative;
}

.clearit {
	clear: both;	
}

.description {
	border: 1px solid #333;
	display: block;
	position: relative;
	margin-bottom: 25px;
	padding: 15px;
}

</style>

</head>

<body>
<style>
body{
	background-size: 100%;
	background: #ffffff;
}

.menuitem {
	display: block;
	float: left;
	min-width: 20%;
	height: 40px;
	padding: 8px;
	padding-top:5px;
	padding-bottom:5px;
	border-right: solid 2px #020000;
	border-left: solid 2px #020000;
	margin-right: 5px;
	margin-left: 5px;
	margin-bottom: 5px;
	margin-top: 5px;
	text-align: center;
	line-height: 40px;
	cursor: pointer;
	font-family: Playfair Display SC;
	font-weight: bold;
}

.menuitem a {
  position: relative;
  color: #020000;
  text-decoration: none;
}

.menuitem a:before {
  content:"";
  position: absolute;
  width: 100%;
  height: 1px;
  bottom: 0;
  left: 0;
  background-color: #000;
  visibility: hidden;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.menuitem a:hover:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

.submenuitem:hover {
	font-weight: bold;
	color: #f4673d;
}

#about_submenu { display: none; }

.at { background-color: #ffe7d8; }

.clearit {
	clear: both;	
}
.section {
	font-family: Old Standard TT;
}
</style>
<script>
function initMenu() {

		$("#about").click(function(e) {
		$("#about_submenu").show();
    });
		
	$("#about").mouseenter(function(e) {
        $("#about_submenu").show();
    });
	
	$("#about").mouseleave(function(e) {
        $("#about_submenu").hide();
    });
	
	$("#_about").click(function(e) {
		document.location.href="about.php";
	});
	
	$("#the_author").click(function(e) {
		document.location.href="about.php?the_author";
	});
	
	$("#the_work").click(function(e) {
		document.location.href="about.php?the_work";
	});
	
	$("#kyongsong").click(function(e) {
		document.location.href="about.php?kyongsong";
	});
	
		$("#walking_kubo").click(function(e) {
        document.location.href="walking_kubo.php";   
    });
		
		$("#holding_materials").addClass("at");
		
		$("#online_resources").click(function(e) {
        document.location.href="online_resources.php";   
    });
	}
</script>
<div id="menu">
<div class="menuitem" id="about"><span id="_about"><a href="#">ABOUT</a></span><span id="about_submenu"><span class="submenuitem" id="the_author">&nbsp &nbsp<a href="#">The Author </a>&nbsp</span><span class="submenuitem" id="the_work">&nbsp<a href="#">The Work </a>&nbsp</span><span class="submenuitem" id="kyongsong">&nbsp<a href="#">The Kyongsong</a>&nbsp</span></span></div>
<div class="menuitem" id="walking_kubo"><a href="#">WALKING KUBO</a></div>
<div class="menuitem" id="holding_materials"><a href="#">HOLDING MATERIALS</a></div>
<div class="menuitem" id="online_resources"><a href="#">ONLINE RESOURCES</a></div>
</div>
<div class="clearit"></div>
<div id="container">


<div class="section" id="the_author_section">
<h1>Holding Materials</h1>
<div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

<ul>
<li>Lorem Ipsum</li>
<li>Lorem Ipsum</li>
<li>Lorem Ipsum</li>
<li>Lorem Ipsum</li>
<li>Lorem Ipsum</li>
<li>Lorem Ipsum</li>
</ul></div>
</div>
</div>

</body>
</html>

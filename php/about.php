
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Playfair+Display+SC|Prata" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>KUBO: About</title>
<style>
#container {
	padding: 15px;	
	position: relative;
}

.topsection {
	border: 1px solid #333;
	display: block;
	position: relative;
	margin-bottom: 25px;
}

.topsection_image {
	width: 20%;
	margin-right: 10px;
	float: left;
}

.topsection_more {
	width: 75%;
	padding: 10px;
	float: left;
}

.description {
	border: 1px solid #333;
	display: block;
	position: relative;
	margin-bottom: 25px;
	padding: 15px;
}
.clearit {
	clear: both;	
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

$(document).ready(function(e) {
    initMenu();
	<?php if (count($_GET) > 0): ?>
	$(".section").each(function(index, element) {
        $(this).hide();
    });
	<?php if (isset($_GET["the_author"])): ?>$("#the_author_section").show();<? endif; ?>
	<?php if (isset($_GET["the_work"])): ?>$("#the_work_section").show();<? endif; ?>
	<?php if (isset($_GET["kyongsong"])): ?>$("#kyongsong_section").show();<? endif; ?>
	<?php endif; ?>
});
</script>
</head>

<body>

<style>
body{
	background-size: 100%;
	background: #ffffff;
}

#menu {
	min-width: 1550px;
}

.menuitem {
	display: block;
	float: left;
	min-width: 20%;
	height: 40px;
	padding: 10px;
	border-top-style:double;
	border-bottom-style:double;
	border-left-style:double;
	border-right-style:double;
	padding-top:5px;
	padding-bottom:5px;
	border-top-color:#e0a064;
	border-bottom-color:#e0a064;
	border-left-color:#e0a064;
	border-right-color:#e0a064;
	border-top-width:6px;
	border-bottom-width:6px;
	border-left-width:5px;
	border-right-width:5px;
	margin-left: 5px;
	margin-right: 5px;	
	text-align: center;
	line-height: 40px;
	cursor: pointer;
	font-family: Playfair Display SC;
}

.menuitem:hover {
	background-color:#ffe7d8;	
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

		$("#about").addClass("at");
		
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
		
		$("#holding_materials").click(function(e) {
        document.location.href="holding_materials.php";    
    });
		
		$("#online_resources").click(function(e) {
        document.location.href="online_resources.php";   
    });
	}
</script>
<div id="menu">
<div class="menuitem" id="about"><span id="_about">ABOUT</span><span id="about_submenu"><span class="submenuitem" id="the_author">&nbsp;The Author&nbsp;</span><span class="submenuitem" id="the_work">&nbsp;The Work&nbsp;</span><span class="submenuitem" id="kyongsong">&nbsp;The Kyongsong&nbsp;</span></span></div>
<div class="menuitem" id="walking_kubo">WALKING KUBO</div>
<div class="menuitem" id="holding_materials">HOLDING MATERIALS</div>
<div class="menuitem" id="online_resources">ONLINE RESOURCES</div>
</div>
<div class="clearit"></div><div id="container">


<div class="section" id="the_author_section">
<h1>About The Author</h1>
<div class="topsection">
<div class="topsection_image"><img src="images/kubo-portrait.jpg" alt="" style="width: 100%; height: auto;" /></div>
<div class="topsection_more">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
<div class="clearit"></div>
</div>
<div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
</div>

<div class="section" id="the_work_section">
<h1>About The Work</h1>
<div class="topsection"></div>
<div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
</div>

<div class="section" id="kyongsong_section">
<h1>About The Kyongsong</h1>
<div class="topsection">
<div class="topsection_image"><img src="images/kyongsong.jpg" alt="" style="width: 100%; height: auto;" /></div>
<div class="topsection_more">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
<div class="clearit"></div>
</div>
<div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
</div>


</div>
</body>
</html>
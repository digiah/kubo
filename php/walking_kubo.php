
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Playfair+Display+SC|Prata" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>KUBO: Walking Kubo</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

$(document).ready(function(e) {
    initMenu();
});

function switchView(index) {
	var Viewobject = Array(
		{ 
		title: "Hwasin", 
		mapurl: "https://www.google.com/maps/embed/v1/place?key=AIzaSyD3CcK8Leh33T-fXaPz-SA0HTunSfnDXT0&q=Jongno-gu,+Seoul,+South+Korea&center=37.57072617979719,126.98146811531177&zoom=16", 
		description: "A department store located in Insa-dong, Jongro-gu, Seoul. It was founded by Park Heung-sik in 1931, and was the first department store managed by Korean people.", 
		passage: "<p>Kubo now remembers the optical perimeter, which he saw on a small table at the ophthalmologist's during his first visit, when he had gone to complain about his weakened eyesight after two weeks of suffering from fever. The doctor, who himself wore a rather thick pair of glasses, coarsely marked all the scotomata with chalk.</p><p>Despite all this, Kubo crosses two railroad tracks, with a confident gait, and then walks to Hwasin. Before he notices it, his footsteps lead him into the department store.</p><p>A young married couple with a four- or five-year-old boy waits for an elevator. Now they’ll want to enjoy a nice lunch at some restaurant. A desire to show off their happiness to Kubo seems to gleam in the couple’s eyes. For a second, he considers cursing them, but instantly changes his mind and instead gives them his blessing. In fact, he may be envying the couple, who are enjoying this day out together, renewing their sense of happiness, despite several years already of married life together. They clearly have a home, where they must be happy.</p><p>The elevator descends, the door opens, closes, and the young couple disappeared from Kubo’s sight with their boy Luckie or Rich.</p><p>On his way out, Kubo wonders where he would ever find happiness of his own. He follows his feet to the safety zone at a streetcar station, and now, standing there, looks down at his hands. A walking stick in one hand and a notebook in the other—Kubo, of course, cannot find his happiness in them.</p><p>(Park and Gatrall 2010, p.151), (Pak Tʼaewŏn 1989, p.32)</p>",
		images: "http://image.chosun.com/sitedata/image/201607/16/2016071601184_5.jpg,http://image.chosun.com/sitedata/image/201607/16/2016071601184_0.jpg" 
		},
		{ title: "Chosŏn bank", 
		mapurl: "https://www.google.com/maps/embed/v1/place?key=AIzaSyD3CcK8Leh33T-fXaPz-SA0HTunSfnDXT0&q=Bukchang-dong,+Jung-gu,+Seoul,+South+Korea&center=37.5707471,126.974902&zoom=16", 
		description: "A central bank established by the Japanese Empire in the Japanese colonial era.", 
		passage: "<p>Kubo sighs gently. It's no loss that he couldn’t marry her after all. With that kind of woman, he would probably never have gained the chance to know what happiness is. He got off the streetcar at Chosŏ n Bank and headed for Changgokch’ŏnjŏng. Tired of thinking, he’ll now stop at a teahouse to enjoy a cup of tea.</p><p>(Park and Gatrall 2010, p.157), (Pak T'aewŏn 1989, p.39)</p><p>Kubo arrived at the Choso n bank. Feeling as he does now, he doesn't want to go home. Then where now&mdash;. He is again beset by loneliness and fatigue. Shine your shoes. Bewildered, Kubo gazes at the man, who apparently scrutinizes others' shoes and always finds fault with them, however minor. Kubo walks on. Does the man have any right to criticize someone else's shoes? Cursing all kinds of irritations on the street, Kubo suddenly senses the danger of being out alone at a time like this. Anybody would do. With a friend, if with a friend, Kubo might cheer up a bit. Or pretend to be cheerful.</p><p>(Park and Gatrall 2010, p.167), (Pak T'aewŏn 1989, p.50)</p>",
		images: "http://dahi.manoa.hawaii.edu/kubo/images/choson-bank.jpg,http://dahi.manoa.hawaii.edu/kubo/images/choson-bank-2.jpg" },
		{ title: "Kyŏngsŏng Station", 
		mapurl: "https://www.google.com/maps/embed/v1/place?key=AIzaSyD3CcK8Leh33T-fXaPz-SA0HTunSfnDXT0&q=Seoul+Station,+South+Korea&center=37.5543414,126.966667&zoom=16", 
		description: "back to Kyŏngsŏng Station. In 1925, the station was completed. Since November 1946, according to the Charter of Seoul, in which the surrounding area was called Kyungseong-bu Seoul-si, it has been called Seoul Station.", 
		passage: "<p>Feeling lonely, Kubo thinks he wants to go where people are, where crowds are lively. He sees Kyŏngsŏng Station ahead of him. There would certainly be life there. The scent and feel of the ancient capital city. It's only proper that an urban novelist should be well acquainted with the gates of the city. But of course such professional conscientiousness isn’t what’s important. It would be enough for Kubo if he could only escape his loneliness amid the crowd in the third-class waiting room.</p><p>(Park and Gatrall 2010, p.162), (Pak T'aewŏn 1989, p.45)</p>",
		images: "http://archive.museum.seoul.kr:8090/ARCHIVE_DATA/view/6112523/A000000007/view_f880cafc-e44a-4b3e-b0bf-e61139ee99b7.jpg" }
		);
		
		$("#googlemap").attr("src",Viewobject[index].mapurl);
		$("#title").html(Viewobject[index].title);
		$("#description").html(Viewobject[index].description);
		$("#passage").html(Viewobject[index].passage);
		
}

</script>

<style>
#description { border: 1px solid #333; margin-bottom: 10px; padding: 5px;}
#passage { border: 1px solid #333; padding: 5px; }
.topsection {
	border: 1px solid #333;
	display: block;
	position: relative;
	margin-bottom: 10px;
	margin-top: 10px;
	padding: 5px;
}
</style>
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

#about_submenu { 
	display: none; 
}

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
	
		$("#walking_kubo").addClass("at");
		
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
<div class="clearit"></div><!-- 126.98146811531177,37.57072617979719,z17     AIzaSyD3CcK8Leh33T-fXaPz-SA0HTunSfnDXT0-->
<div class="topsection">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
<div id="map">
<a href="#" onclick="switchView(0); return false;">Hwasin</a><br />
<a href="#" onclick="switchView(1); return false;">Chosŏn bank</a>
<div class="description"></div>
<a href="#" onclick="switchView(2); return false;">Kyŏngsŏng Station</a><br />
<div style="float: left; width: 420px; height: auto; padding: 5px;">
<h1 id="title"></h1>
<div id="description">
</div>
<div id="passage">
</div>
</div>
<div style="float: left; margin-top: 50px;">
<img src="images/old-map2.jpg" alt="" width="420" height="590" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="rect" coords="273,189,390,216" href="#" onclick="switchView(0); return false;" alt="" />
  <area shape="rect" coords="191,374,277,403" href="#" onclick="switchView(1); return false;" alt="" />
  <area shape="rect" coords="7,504,128,534" href="#" onclick="switchView(2); return false;" alt="" />
</map>
</div>
<div style="float: left; margin-top: 50px;">
<iframe
id="googlemap"
  width="420"
  height="590"
  frameborder="0" style="border:0" src="" allowfullscreen>
</iframe>
</div>
<div class="clearit"></div>
</div>

<div class="description"></div>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://fonts.googleapis.com/css?family=Elsie|Yeseva+One|Old+Standard+TT|Playfair+Display|Prata" rel="stylesheet">
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
#description { 
	border: none; 
	margin-bottom: 10px; 
	padding: 5px; 
	font-family: Playfair Display;
	font-size: 14px;
}
#passage { 
	 border: none;
	 padding: 5px;
	 font-family: Playfair Display;
	 font-size: 14px;
	}
.topsection {
	font-family: Playfair Display;
	border: 1px solid #fff4ef;
	border-radius: 5px;
	background-color: #fff4ef;
	display: block;
	position: relative;
	margin-bottom: 20px;
	margin-top: 10px;
	padding: 15px;
	font-size: 14px;
}
</style>
</head>

<body>
<style>
@font-face {
	font-family: QumpellkaNo12;
	src: url(http://dahi.manoa.hawaii.edu/kubo/fonts/Gluk\ Qumpellkano/QumpellkaNo12.otf);

	font-family: AntiqueBookCover;
	src: url(http://dahi.manoa.hawaii.edu/kubo/fonts/Antique\ Book\ Cover/antique_book_cover.otf);

	font-family: HaarlemSerif;
	src: url(http://dahi.manoa.hawaii.edu/kubo/fonts/Haarlem\ Serif/Haarlem\ Serif.ttf);
}

body {
	border: none;
	background-size: 100%;
	background: #39363d;
}

.main {
	float: left;
	width: 100%;
    padding: 10px;
    background-color: #39363d;
}

.main iframe, img {
	margin-top: 50px;
}

#description {
	background-color: #fff4ef;
	padding: 15px;
}

#passage {
	background-color: #fff4ef;
	padding: 15px;
}

.map button {
	float: left;
	font-family: 'Elsie', cursive;
	font-size: 14px;
	color: #f27f59;
	text-align: center;
	border-top-left-radius: 6px;
	border-top-right-radius: 6px;
	border: solid 1px #fff4ef;
	margin-left: 10px;
	margin-right: 8px;
	padding: 10px 10px;
	background-color: #fff4ef;
}

.words {
	width: 400px;
	margin-left: 5px;
	margin-right: 10px;
	float: left;
}

.words h1 {
	color: #f2957d;
}

.menu {
	top: 0;
	height: 60px;
	width: 100%;
	padding: 20px;
	background-color: #ff6c4f;
}

.menu li {
	display: inline;
	float: left;
}

.menuitem {
	display: inline-block;
   	min-width: 20%;
   	text-align: center;
    text-decoration:none;  
	cursor: pointer;
	font-family: 'Elsie', cursive;
	font-size: 20px;
}

.menuitem a {
  position: relative;
  color: #ffffff;
  text-decoration: none;
}

.menuitem a:before {
  content:"";
  position: absolute;
  width: 100%;
  height: 1px;
  bottom: 0;
  left: 0;
  background-color: #ffffff;
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

#title {
	font-family: QumpellkaNo12;
	color: #ff6c4f;
}

.topsection {
	margin-top: 10px;
	margin-bottom: 20px;
}

.submenuitem a {
	font-size: 16px;
}

.submenuitem:hover {
	color: #f4673d;
}

#about_submenu { 
	display: none; 
}

.at { }

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
<div class="menu">
	<ul>
		<li class="menuitem" id="about"><span id="_about"><a href="#">ABOUT</a></span><span id="about_submenu"><span class="submenuitem" id="the_author">&nbsp &nbsp<a href="#">The Author </a>&nbsp</span><span class="submenuitem" id="the_work">&nbsp<a href="#">The Work </a>&nbsp</span><span class="submenuitem" id="kyongsong">&nbsp<a href="#">The Kyongsong</a>&nbsp</span></span></li>
		<li class="menuitem" id="walking_kubo"><a href="#">WALKING KUBO</a></li>
		<li class="menuitem" id="holding_materials"><a href="#">HOLDING MATERIALS</a></li>
		<li class="menuitem" id="online_resources"><a href="#">ONLINE RESOURCES</a></li>
	</ul>
</div>
<div class="clearit"></div><!-- 126.98146811531177,37.57072617979719,z17     AIzaSyD3CcK8Leh33T-fXaPz-SA0HTunSfnDXT0-->
<div class="topsection">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
<div class="map">
<button onclick="switchView(0); return false;">HWASIN</button>
<button onclick="switchView(1); return false;">CHOSŎN BANK</button>
<button onclick="switchView(2); return false;">KYŎNGSŎNG STATION</button>
</div>
<div class="description"></div>
<div class="main">
	<div class="words">
		<h1 id="title"></h1>
		<div id="description"></div>
		<div id="passage"></div>
	</div>
<img src="images/old-map2.jpg" alt="" width="420" height="590" margin-top="20px" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="rect" coords="273,189,390,216" href="#" onclick="switchView(0); return false;" alt="" />
  <area shape="rect" coords="191,374,277,403" href="#" onclick="switchView(1); return false;" alt="" />
  <area shape="rect" coords="7,504,128,534" href="#" onclick="switchView(2); return false;" alt="" />
</map>
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
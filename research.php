<!doctype html>
<html>
<head>
	<title>Narayanan C Krishnan's Homepage
	</title>

	<!--
		Importing the css files.
		-->
	<link href = "css/frame.css" rel = "stylesheet" type = "text/css" />
	<link href = "css/bootstrap.min.css" rel = "stylesheet" type = "text/css" />
	<link href = "css/research.css" rel = "stylesheet" type = "text/css" />

	<!--
		Setting The Logo!
		-->
	<link rel="shortcut icon" href="images/icon.png">
</head>
<body>
	<center>
		<div id = "container">

			<div style = "height:8em; width:75%; border:2px solid transparent; margin-top:0.2em; margin-bottom:-1em">
				
				<div id = "top_data" style= "display:inline-block; float: left;">
						<h1 style = "font-family:'Varela'; padding:0em; margin-bottom:0em; padding-left:10px; padding-right:10px;"><a href = "http://www.iitrpr.ac.in" style = "color:black" target = "_blank">Indian Institute of Technology Ropar</a></h1>
					<br><h3 style = "font-family:'Varela';float:left; margin:0em; padding:0em; padding-left:10px;display:inline-block; padding-right:10px">NARAYANAN C KRISHNAN</h3>
				</div>
				<img src = "images/logo.jpg" style = "float:right;height:100%; transform:translateY(0.5em)" />
			</div>	

			<div id = "navbar">
				<br>
				<div id = "navbar_hr">
					<hr width = "75%"/>
				</div>
				<div id = "navbar_options" style= "font-size:1.1em">
						<ul class = "toolbar">
						  <li><a href="./index.php" style= "color:#0000A0">HOME</a></li>
						  <li><a class="active" href="./research.php" style= "color:#0000A0">RESEARCH</a></li>
						  <li><a href="./publications.php" style= "color:#0000A0">PUBLICATIONS</a></li>
						  <li><a href="./teaching.php" style= "color:#0000A0">TEACHING</a></li>
						  <li><a href="./resources.php" style= "color:#0000A0">RESOURCES</a></li>
						</ul>
				</div>
			</div>

			<div id = "main_container">
				<div>
					<div id = "interests" style = "width:40%; display: inline-block; vertical-align:top;">

						<center><h3 style = "font-family:'Varela'; transform:translateX(3.5em);">- <b>AREAS</b> -</h3></center>
						
						Theory:
						<ul>
							<li>Machine Learning</li>
							<li>Data Mining</li>
							<li>Multimedia</li>
						</ul>
						Application:
						<ul>
							<li>Human Activity Recognition</li>
							<li>Ubiquitous Computing</li>
							<li>ICT for Development</li>
						</ul>
					</div>
					<div id = "funding" style = "display:inline-block; float:right; transform:scale(0.9) translateY(0em)">
						<center><h3 style = "font-family:'Varela'"><h3></center>
					</div>
				</div>
				<br>
					<div id = "papers_column">
						<center><h3 style = "font-family:'Varela'">- <b>PROJECTS</b> -</h3></center>


						<div class = "research_project">
							<div class = "research_project_title">
								SpotGarbage: Smartphone App to Detect Garbage Using Deep Learning
							</div>
							<center>
								<div class = "research_project_images">
									<img class = "research_projects_image" src = "images/RP_SpotGarbage/img1.jpg" />
									<br>
								</div>
								<div class = "research_project_abstract" style = "text-align:justify">
									<b>Abstract: </b>
									Maintaining a clean and hygienic civic environment is an indispensable yet formidable task, especially in developing countries. With the aim of engaging citizens to track and report on their neighborhoods, this paper presents a novel smartphone app, called SpotGarbage, which detects and coarsely segments garbage regions in a user-clicked geo-tagged image. The app utilizes the proposed deep architecture of fully convolutional networks for detecting garbage in images. The model has been trained on a newly introduced Garbage In Images (GINI) dataset, achieving a mean accuracy of 87.69%. The paper also proposes optimizations in the network architecture resulting in a reduction of 87.9% in memory usage and 96.8% in prediction time with no loss in accuracy, facilitating its usage in resource constrained smartphones.
								</div>
							</center>
							<br>
							<center>
								<div class = "research_project_citations">
									G Mittal, K B Yagnik, M Garg, and N C Krishnan, Spot Garbage: Smartphone App to Detect Garbage Using Deep Learning, accepted to ACM International Joint Conference on Pervasive and Ubiquitous Computing, 2016.
								</div>
							</center>
						</div>





					</div>

			</div>


			<div id = "footer">
				<br>
				<div id = "footer_hr">
					<hr width = "60%" style = "transform:translateY(0.3em);"/>
				</div>
				<div id = "footer_options">
						<ul class = "toolbar" style = "margin:-1.4em; padding-top:0.5em;display:inline-block">
						  <li><a href="https://www.linkedin.com/in/narayananck">LinkedIn</a></li>
						  <li><a href="#mail" onclick = "alert('E-mail: ckn@iitrpr.ac.in')">Mail</a></li>
						</ul>
						  
				</div>
				<div id = "footer_hr">
					<hr width = "60%" style = "transform:translateY(-0.5em);"/>
					<div id = "tracker" style = "transform:translateY(-0.5em)">
						<script type="text/javascript" src="http://s2.tracemyip.org/tracker/lgUrl.php?stlVar2=1327&amp;rgtype=4684NR-IPIB&amp;pidnVar2=41297&amp;prtVar2=1&amp;scvVar2=12"></script><noscript><a href="http://en.ipwebtracker.com" target="_blank"><img src="http://s2.tracemyip.org/tracker/1327/4684NR-IPIB/41297/1/12/ans/" alt="ip tracker" border="0"></a></noscript>

						&nbsp;
						<span style = "font-size:1.1em">
							Designed by <a href = "https://github.com/ssrp/" style = "color:#888888"><b>Sai Samarth R Phaye</b></a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</center>
	<script src="js/jquery-1.12.4.js"></script>
	<script type = "text/javascript" src = "js/research.js"></script>
</body>
</html>
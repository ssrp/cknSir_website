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
<body onload = "setScreenSize()">
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
						  <li><a href="./people.php" style= "color:#0000A0">PEOPLE</a></li>
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

						<div class = "research_project">
							<div class = "research_project_title">
								Multi-Label Learning for Activity Recognition
							</div>
							<center>
								<div class = "research_project_images">
									<img class = "research_projects_image" src = "images/RP_ActivityRecog/img1.png" />
									<br>
								</div>
								<div class = "research_project_abstract" style = "text-align:justify">
									<b>Abstract: </b>
									Advances in pervasive and ubiquitous computing have resulted in the development of sensors that can be easily deployed in the natural habitat of a human to acquire activity related data. However, inferring meaningful activity information from sensor data is still a challenging problem. This paper addresses the problem of inferring activities that are simultaneously performed by multiple residents in a smart home or single resident performing multiple activities concurrently. The paper formulates this problem as learning multiple activity labels from a sequence of sensor data. It investigates the suitability of multi-label learning algorithms inspired by decision trees as a proposed solution to the problem. The results obtained from the experiments on four benchmarking multi-resident activity datasets clearly indicate the superiority of decision tree ensemble (random forests) based approaches for multi-label learning.
								</div>
							</center>
							<br>
							<center>
								<div class = "research_project_citations">
									R Kumar, I Qamar, J S Virdi and N C Krishnan, Multi-label Learning for Activity Recognition, International Conference on Intelligent Environments, 152-155, 2015.
								</div>
							</center>
						</div>

						<div class = "research_project">
							<div class = "research_project_title">
								Supervised Heterogeneous Domain Adaptation via Random Forests
							</div>
							<center>
								<div class = "research_project_images">
									<img class = "research_projects_image" src = "images/RP_DomainAdapt/img1.png" />
									<br>
								</div>
								<div class = "research_project_abstract" style = "text-align:justify">
									<b>Abstract: </b>
									Heterogeneity of features and lack of correspondence between data points of different domains are the two primary challenges while performing feature transfer. In this paper, we present a novel supervised domain adaptation algorithm (SHDA-RF) that learns the mapping between heterogeneous features of different dimensions. Our algorithm uses the shared label distributions present across the domains as pivots for learning a sparse feature transformation. The shared label distributions and the relationship between the feature spaces and the label distributions are estimated in a supervised manner using random forests. We conduct extensive experiments on three diverse datasets of varying dimensions and sparsity to verify the superiority of the proposed approach over other baseline and state of the art transfer approaches.
								</div>
							</center>
							<br>
							<center>
								<div class = "research_project_citations">
									 Sukhija, N C Krishnan, and G Singh, Supervised Heterogeneous Domain Adaptation via Random Forests, International Joint Conference on Artificial Intelligence, 2039-2045, 2016.
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
	<script src="js/frame.js"></script>
</body>
</html>
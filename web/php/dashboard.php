<?php

?>

<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Profile | girl unity</title>
	<link rel="stylesheet" href="../css/demo.css" />
	<link rel="stylesheet" href="../css/style2.css" />

	<link href="https://fonts.googleapis.com/css?family=Hind+Guntur" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicondrawn.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Content Navigator with CSS3" />
    <meta name="keywords" content="content, navigation, css3, html5, sliding, content" />
    <meta name="author" content="Codrops" />
</head>
<body>
<div class="form">
<h1>girl unity</h1>
<h3>My Profile</h3>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<div class="container">
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="http://tympanus.net/Development/ParallaxContentSlider/">
                   
                </a>
                <span class="right">
					<a href="http://slipsum.com">girl unity</a>
					<a href="http://www.flickr.com/photos/karrienodalo/">Images by girl unity TEAM
					</a>
                    <a href="http://tympanus.net/codrops/2012/03/23/responsive-content-navigator-with-css3/">
                        <strong>girl unity</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			<header>
				<h1 id="Sub">Subjects  </h1>
				
				<nav class="codrops-demos">
					
					<a class="current-demo" href="dashboard.php#slide-main">Explore</a>
					
				</nav>
			</header>
			<!--[if lte IE 9]>
			<p style="font-size: 20px; padding: 50px;">Sorry, this only works in modern browsers...</p>
			<![endif]-->
			<section class="cn-container">
				<div class="cn-slide" id="slide-main">
					<h2>Explore this</h2>
					<nav id="hey">
						<a href="#slide-1">Science</a>							
						<a href="#slide-2">Technology</a>						
						<a href="#slide-3">Engineering</a>
						<a href="#slide-4">Mathematics</a>
						
					</nav>
				</div>
				
				<!-- Slide 1 and Sub-slides -->
				<div class="cn-slide cn-slide-sub" id="slide-1">
					<h2> Science</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<nav>
						<a href="#slide-1-1">Chemistry</a>							
						<a href="#slide-1-2">Biology</a>
						<a href="#slide-1-3">Physics</a>
						<a href="#slide-1-4">Environment</a>
					</nav>
				</div>
				
				<div class="cn-slide" id="slide-1-1">
					<h2>Chemistry</h2>
					<a href="#slide-1" class="cn-back">Back</a>
					<div class="cn-content">
						<p>The lysine contingency - it's intended to prevent the spread of the animals is case they ever got off the island. Dr. Wu inserted a gene that makes a single faulty enzyme in protein metabolism. The animals can't manufacture the amino acid lysine. Unless they're continually supplied with lysine by us, they'll slip into a coma and die. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-1-2">
					<h2>Biology</h2>
					<a href="#slide-1" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-1-3">
					<h2>Physics</h2>
					<a href="#slide-1" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-1-4">
					<h2>Environment</h2>
					<a href="#slide-1" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<!-- Slide 2 and Sub-slides -->
				<div class="cn-slide cn-slide-sub" id="slide-2">
					<h2>Technology</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<nav>
						<a href="#slide-2-1">Software</a>							
						<a href="#slide-2-2">Hardware</a>
						<a href="#slide-2-3">Robotics</a>
						<a href="#slide-2-4">Development</a>
					</nav>
				</div>
				
				<div class="cn-slide" id="slide-2-1">
					<h2>Software</h2>
					<a href="#slide-2" class="cn-back">Back</a>
					<div class="cn-content">
						<p>The lysine contingency - it's intended to prevent the spread of the animals is case they ever got off the island. Dr. Wu inserted a gene that makes a single faulty enzyme in protein metabolism. The animals can't manufacture the amino acid lysine. Unless they're continually supplied with lysine by us, they'll slip into a coma and die. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-2-2">
					<h2>Hardware</h2>
					<a href="#slide-2" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-2-3">
					<h2>Robotics</h2>
					<a href="#slide-2" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-2-4">
					<h2>Virtual Reality</h2>
					<a href="#slide-2" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<!-- Slide 3 and Sub-slides -->
				<div class="cn-slide cn-slide-sub" id="slide-3">
					<h2>Engineering</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<nav>
						<a href="#slide-3-1">Aerospace</a>							
						<a href="#slide-3-2">Agricultural</a>
						<a href="#slide-3-3"> Automotive</a>
						<a href="#slide-3-4">Biological</a>
						<a href="#slide-3-5">Biomedical</a>
						<a href="#slide-3-6">Chemical</a>
						<a href="#slide-3-7">Civil</a>
						<a href="#slide-3-8">Computer</a>
						<a href="#slide-3-9">Electrical</a>
						<a href="#slide-3-10">Mechanical</a>
						<a href="#slide-3-11">Environmental</a>
						<a href="#slide-3-12">Geological</a>
						<a href="#slide-3-13">Material</a>
						<a href="#slide-3-14">Physics</a>
						<a href="#slide-3-15">Systems</a>
						

					</nav>
				</div>
				
				<div class="cn-slide" id="slide-3-1">
					<h2>Poetry</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>The lysine contingency - it's intended to prevent the spread of the animals is case they ever got off the island. Dr. Wu inserted a gene that makes a single faulty enzyme in protein metabolism. The animals can't manufacture the amino acid lysine. Unless they're continually supplied with lysine by us, they'll slip into a coma and die. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-3-2">
					<h2>Prose</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-3-3">
					<h2>Fiction</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-3-4">
					<h2>Non-fiction</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>

			</section>
        </div>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>

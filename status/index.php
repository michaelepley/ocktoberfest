<html>
 <head>
  <title>Mike and Cathy's Ocktoberfest</title>
  <style>
	@font-face {
	  font-family: Bavarian;
	  src: url('fonts/bertholdr-mainzer-fraktur/Bertholdr-Mainzer-Fraktur.ttf');
	}
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    } 
    th, td {
      padding: 5px;
      text-align: left;
    }
	body {
	  background-image: url("images/sbavarian-pattern_640.png");
	  background-repeat: repeat;
	}
	body {
	  
	}
  </style>
</head>
<body>
<h1 style="font-family: Bavarian;">Mike and Cathy's Ocktoberfest</h1>
<br/>
<div style="width: 800px;
	height: 600px;
	background-color: cream;">
<p>
Grab your 1L stein, put on your favorite lederhosen, and bring the kids. Please join us, our friends, family, coworkers, and neighbors for our quasi-annual ocktoberfest get together. We realize its late in the year for "real" ocktoberfest -- but its really just a good excuse!
</p>

<p>
We'll have food, (good, german) beer, lawn/board games, football, smores, moon bounce, and plenty of good times!
</p>

<p>
While we will have some food and drinks, please feel free to bring something (sides, dessert, salads) to share. The more the merrier :)
</p>

<p>
And for the uninitiated, you'll want to <a href="https://www.youtube.com/watch?v=zsbyUdmd8ys" review the basics on how to oktoberfest</a>.
</p>
</div>
<?php
// <!-- Automatically refresh page every few seconds, if the refresh request parameter is provided -->  
if (isset($_GET["refresh"])) {
	$refresh=$_GET["refresh"]; 
	$url=$_SERVER['REQUEST_URI'];
	header("Refresh: $refresh; URL=$url");
}

error_reporting(E_ERROR);

?>
</div>
 </body>
</html>


<html>
 <head>
  <title>Mike and Cathy's Ocktoberfest</title>
  <style>
	@font-face {
	  font-family: Bavarian;
	  src: url('fonts/bertholdr-mainzer-fraktur/Bertholdr-Mainzer-Fraktur.ttf');
	}
    table, th, td {
      border: 0px solid black;
      border-collapse: collapse;
    } 
    th, td {
      padding: 5px;
      text-align: center;
      font-family: sans-serif;
      border:0;
    }
	body {
	  background-image: url("images/bavarian-pattern_640.png");
	  background-repeat: repeat;
	}
  </style>
</head>
<body>
<br/>
<h1 style="text-align:center; font-family: Bavarian;">Mike and Cathy's Ocktoberfest</h1>
<div >
<table style="align: center;   margin: auto; width: 80%;">
<tr>
<td>
<h2>October 27, 2pm-10pm</h2>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
<h2>4407 6th St South, Arlington VA</h2>
</td>
</tr>
</table>
</div>
<br/>
<div style="
  align: center;
  margin: auto;
    width: 80%;
	height: 80px;
	background-color: #00aa00;
	justify-content: center;
	border: darkgreen 5px solid;
	font-size: 20px;
	font-family: sans-serif;
	padding: 10px;
	text-align: center;
	">
<p>
Weather Update: Unfortunately, the weather forecast is not looking great for Sunday with showers (potentially heavy at times) predicted. We are still A GO at the moment, but might move our activities indoors.
</p>
</div>
<div style="height: 40px;">
</div>
<div style="
  align: center;
  margin: auto;
    width: 80%;
	height: 400px;
	background-color: #fffdd0;
	justify-content: center;
	border: darkblue 5px solid;
	font-size: 20px;
	font-family: sans-serif;
	padding: 30px;
	text-align: center;
	">
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
And for the uninitiated, you'll want to <a href="https://www.youtube.com/watch?v=zsbyUdmd8ys"> review the basics on how to oktoberfest</a>.
</p>
</div>
<?php
$refresh=30;
// <!-- Automatically refresh page every few seconds, if the refresh request parameter is provided -->  
if (isset($_GET["refresh"])) {
	$refresh=$_GET["refresh"]; 
	$url=$_SERVER['REQUEST_URI'];
}
header("Refresh: $refresh; URL=$url");

error_reporting(E_ERROR);

?>
</div>
 </body>
</html>
<html>
 <head>
  <title>Barcroft Oktoberfest</title>
  <style>
	@font-face {
	  font-family: Bavarian;
/*	  src: url('fonts/bertholdr-mainzer-fraktur/Bertholdr-Mainzer-Fraktur.ttf');   
	  src: url('fonts/augsburger-schrift-cat/AugsburgerSchriftCAT.ttf');   */
	  src: url('fonts/alte-schwabacher/AlteSchwabacher.ttf');
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
<table style="align: center;   margin: auto; width: 80%;">
<tr>
<td>
<h1 style="font-size: 30px; text-align:right; font-family: Bavarian;">Barcroft</h1>
</td>
<td>
<h1 style="font-size: 100px; text-align:left; font-family: Bavarian;">Oktoberfest</h1>
</td>
</tr>
</table>
<div >
<table style="align: center;   margin: auto; width: 80%;">
<tr>
<td>
<h2>October 8, 2pm-whenever</h2>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
<h2>4407 6th St South, Arlington VA</h2>
</td>
<tr>
<td>Please <a href="mailto:barcroftoktoberfest@gmail.com">RSVP</a> if you can (just to help us plan better) </td>
</tr>
<td>
<h2><em>and</em> 4406 4th St South, Arlington VA</h2>
</td>
</tr>
</table>
</div>
<br/>
</div>
<div style="
	align: center;
	margin: auto;
	width: 80%;
	height: 300px;
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
<div style="height: 40px;">
</div>
<div style="
	align: center;
	margin: auto;
    width: 80%;
	height: 210px;
	background-color: khaki;
	justify-content: center;
	border: darkkhaki 5px solid;
	font-size: 20px;
	font-family: sans-serif;
	padding: 0px;
	text-align: center;
	">
<p>
<ul>
<li>More merrier: Yes, extend the invite to anyone else you like!</li>
<li>Child Friendly:It’s not a beer festival, it’s a harvest festival andit’s fun for the whole family.</li>
<li>Attire: Yes, we will make it as authentic as possible, boys, girls, kids!</li>
<li>Rain: sorry, no rain date is planned :(</li>
<li>Covid: we will be mostly outdoors but no special covid precautions are in place; please be respectful if you are not vaccinated, have tested positive, or recently exposed </li>
<li>Lost Items: Joined up before and lost something? Check out the <a href="https://photos.app.goo.gl/iwA7Z9jW2j50CgqC3">lost and found</a> …send us a note at barcroft.oktoberfest@gmail.com and we’ll get your items back to you. </li>
</ul>
</p>
</div>
<?php
$refresh=30;
$url="";
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
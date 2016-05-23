<?php
include '../includes/config.inc.php';
include '../fcts/hiking.fct.php';
include 'session.php';

$title = "French Riviera Hiking Meetup - Home Page";
$activeMenu = "index";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php
	include 'head.php';
	?>
  </head>
  <body role="document">
  	<?php
	include 'menu.php';
	?>
	
	<div class="container" role="main" style="text-align: center;">
		<h1>Welcome to the French Riviera Hiking Meetup Group website</h1>
		<p>This is a group for anyone interested in hiking through the Alpes Maritimes. There is plenty of very nice hiking circuits in the Alpes Maritimes (06) or near this area where there is some lovely sea and mountains viewpoints.</p>
		<p>It all started in 2013 when I arrived in the area and started to explore using the randoxygene website with some friends where we were all enjoying a walk together and sometimes, a picnic in nature.</p>
		<p>In May 2014, I decided to create this Meetup group in order to meet new international friendly people and enjoy a nice hike together. Month after month, the group has grown and new event organisers decided to help organising events in the group.</p>
		<p>If you are interested by hiking and meeting new international friendly people of every ages, don’t hesitate to join us.</p>
		<p>Click <a href="http://www.meetup.com/French-Riviera-Hiking-Meetup/">here</a> to join the group.</p>
		
		<img src="img/meetup_group.jpeg" class="img-responsive" alt="Meetup Group" />
	</div>
	<?php
	include 'footer.php';
	?>
  </body>
</html>
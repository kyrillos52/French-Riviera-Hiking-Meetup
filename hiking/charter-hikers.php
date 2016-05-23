<?php
include '../includes/config.inc.php';
include '../fcts/hiking.fct.php';
include 'session.php';

$title = "French Riviera Hiking Meetup - Charter hikers";
$activeMenu = "charter-hikers";
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
	
	<div class="container" role="main">
		<h1 style="text-align: center;">Charter hikers</h1>
		<h2>1) For hikers</h2>
		<h3>a) Before registering a hike :</h3>
		<ul>
			<li>Because places are limited for safety reasons, please make sure you are sure to come before registering.</li>
			<li>If for unexpected reasons you can’t attend to the Meetup, please make sure to unregister as soon as possible in order to free your space to someone else and inform the people you are car sharing with and the event organiser.
</li>
			<li>Because near some hikes, spaces to park a car are quite limited, please arrange car sharing as much as possible in order to limit the number of cars.</li>
			<li>Because event organisers are people that are freely organising events on their free time for free (they are not professional hikers), please be kind, cooperative and helpful to the group in order to share a nice time together. It’s the drawback of a free event.
</li>
			<li>Because we don’t belong to any official sportive association, you are aware that you are not covered by any collective insurance and the organiser and event organisers will not be responsible if unfortunate events happen to you. You come at your own risk and no minor will be accepted if not accompanied with their legal guardian.
</li>
		</ul>
		<h4>Equipment mandatory for any hike:</h4>
		<ul>
			<li>Hiking or trail shoes.</li>
			<li>Enough food and water.</li>
			<li>Warm clothes <strong>even in summer</strong>.</li>
			<li>A rain coat <strong>(Weather can change quickly in the mountain and can be unexpected).</strong></li>
			<li>A mobile phone fully charged with the mobile phone number of the event organiser registered.</li>
			<li>A first aid kit (You can found at about 10€ or less in a pharmacy or in a sport shop).</li>
		</ul>
		
		<h4>Equipment not mandatory but quite useful:</h4>
		<ul>
			<li>Another phone battery</li>
			<li>A survival blanket. It's really small and can be found at less than 3 euros in Chullanka.</li>
			<li>A head lamp or flash light when it can become dark.</li>

		</ul>
		<h3>b) During the hike :</h3>
		<ul>
			<li>Be on time. If you are late or finally can’t attend to the hike, please inform the event organiser as soon as possible. The event organiser will not necessarely wait for you if you are too late or don’t inform him that you can be a bit late.</li>
			<li>Make sure you have all the equipment needed (see above). The event organiser can refuse to take you if ever you don't have the essential equipments for the hike.</li>
			<li>Listen carefully to the event organiser instructions and respect his instructions.</li>
			<li>During the walk, wait for the event organisers at each intersection in order to not split the group.</li>
			<li>If you have unexpected issues, please inform the event organiser as soon as possible.</li>
			<li>If you are lost, try to call the event organiser as soon as possible. Don’t go off road alone without alerting other members or the event organiser.</li>
			<li>Don’t wait to be alone to alert that you are being distant.</li>
		</ul>
		<h2>2) For event organisers</h2>
		<h3>a) Before registering a hike :</h3>
		<ul>
			<li>Check with other event organisers and the organiser that there is no problem organising the hike and if accepted, use the form available in the website <a href="http://hiking.cyril-grandjean.fr">http://hiking.cyril-grandjean.fr</a> available after having been logged in the website.</li>
			<li>Fix a reasonable number of participants that you can manage.</li>
			<li>Be careful to choose the appropriate hike level adapted to the average level of the members of the Meetup to avoid situations where people find they lack the necessary physical stamina.</li>
			<li>Phone to the tourism office or the city hall, if there is one, to know the conditions.</li>
			<li>Check the weather forecast.</li>
			<li>Have a look at the map.</li>
			<li>For randoxygene hikes, take a look at the hike in the <a href="http://www.randoxygene.org/index.php">randoxygen website</a>, sometimes, there is warning about the hike.</li>
			<li>Help members by answering questions in the event.</li>
		</ul>
		<h4>Equipment mandatory for any hike :</h4>
		<ul>
			<li>Equipments already defined above.</li>
			<li>The map of the hike.</li>
			<li>A whistle.</li>
			<li>A survival blanket.</li>
			<li>A head lamp or flash light when it can become dark.</li>
		</ul>
		<h3>b) During the hike :</h3>
		<ul>
			<li>Start on time. Explain planned route and basic group approach to safety. Give your phone number to people that have not registered it.</li>
			<li>If in your estimation, participants without the required equipment/clothing risk putting themselves or the group in danger, they will not be allowed to join the hike.</li>
			<li>Head count at start, return and home.</li>
			<li>Stick together ; pace your hike to the slowest person or wait for her at each junction. Frequent regroups on outward AND home leg of the  journey. </li>
			<li>Hikers should never walk alone or make sure they always have someone in sight; if you think you are lost, stop straight away and watch for others to catch up on the path and don’t be afraid to signal straight away.</li>
			<li>If someone is really struggling, unable to make the final part of the journey or unwell, they should be accompanied at least by 2 people and at least one phone.</li>
			<li>Go back, if possible, if the weather changes.</li>
			<li>If something serious happens, make sure you locate a clear marker landmark before it gets dark.</li>
			<li>
				Be aware of :
				<ul>
					<li>hunters : keep on the trail, signal you are there.</li>
					<li>pastoralism : stop or circumvent herds. In case you meet a sheep/guard dog, don’t approach it, don’t try to be nice or give food…</li>
					<li>wind : it triggers fires. Don’t go hiking if it is strong.</li>
					<li>storms : don’t shelter under a tree; avoid metallic objects above your head (umbrellas…-put them down); go away from pylons, posts, fences …and any metallic structure to avoid electrocution; walk 3 meters away from one another; don’t walk with big strides, don’t put legs apart; best position is to wind into a ball on an insulating material; go away from ridges and peaks.</li>
					
				</ul>
			</li>
			<li><strong>Emergency : dial 112. SOS montagne : blow 2 short whistle signals; every 10 to 15 seconds.</strong></li>
		</ul>
		
	</div>
	<?php
	include 'footer.php';
	?>
  </body>
</html>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand">Hiking</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            	<li <?php if($activeMenu == "index") { ?>class="active"<?php }?>><a href="index.php">Home</a></li>
            	<?php
			      if(isAuthenticated()) {
			      ?>
            	<li <?php if($activeMenu == "create-event") { ?>class="active"<?php }?>><a href="create-event.php">Create event</a></li>    
            	<?php
			      }
            	?>
            	<?php
			      if(!isAuthenticated()) {
			      ?>
			      <li><span class="navbar-right"><a href="https://secure.meetup.com/oauth2/authorize?client_id=<?php echo $GLOBALS['meetupKey']; ?>&amp;response_type=code&amp;redirect_uri=<?php echo $GLOBALS['meetupWebsite']; ?>" class="navbar-form navbar-right">
		            <button type="button" class="btn btn-success">Login</button>
		          </a></li></span>
		          <?php
			      } else {
		          ?>
		          	<li><span class="navbar-right">
			          	<img class="navbar-brand" alt="Icon" src="<?php echo $_SESSION['thumb_link']; ?>">
			      		<p class="navbar-text"><?php echo $_SESSION['name']; ?></p>
			      		 <a href="index.php?action=logout" class="navbar-form navbar-right">
			      			<button type="button" class="btn btn-success">Logout</button>
			      		</a>
			      	</span></li>
		          <?php
			      }
		          ?>
	      </ul>
      	</div>
     </div>
</nav>
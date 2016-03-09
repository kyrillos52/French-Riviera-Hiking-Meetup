 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand">Hiking</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav">
            	<li <?php if($activeMenu == "index") { ?>class="active"<?php }?>><a href="index.php">Home</a></li>
            	<li <?php if($activeMenu == "create-event") { ?>class="active"<?php }?>><a href="create-event.php">Create event</a></li>    
	      </ul>
	      <?php
	      if(!isAuthenticated()) {
	      ?>
	      <a href="https://secure.meetup.com/oauth2/authorize?client_id=<?php echo $GLOBALS['meetupKey']; ?>&amp;response_type=code&amp;redirect_uri=<?php echo $GLOBALS['meetupWebsite']; ?>" class="navbar-form navbar-right">
            <button type="button" class="btn btn-success">Login</button>
          </a>
          <?php
	      } else {
          ?>
          	<span class="navbar-right">
	          	<img class="navbar-brand" alt="Icon" src="<?php echo $_SESSION['thumb_link']; ?>">
	      		<p class="navbar-text"><?php echo $_SESSION['name']; ?></p>
	      		 <a href="index.php?action=logout" class="navbar-form navbar-right">
	      			<button type="button" class="btn btn-success">Logout</button>
	      		</a>
	      	</span>
          <?php
	      }
          ?>
      	</div>
     </div>
</nav>
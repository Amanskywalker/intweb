<?php
	// header.php
	/*
		this file contains the header of the body 
		
	*/

?>
<div class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h3><strong>Site name</strong><small>tag line</small></h3>
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <?php
            /*
              this is the default menu (general)
              can be changed according the requirments
            */ 
          ?>
          <a href="index" class="mdl-layout__tab is-active">Home</a>
          <a href="#features" class="mdl-layout__tab">Features</a>
          <a href="#features" class="mdl-layout__tab">Details</a>
          <a href="#features" class="mdl-layout__tab">Technology</a>
          <a href="#features" class="mdl-layout__tab">FAQ</a>
        <?php
          // logout button to be included when user login
          include_once 'functions/islogin.func.php';
          if (islogin()) 
          {
          ?>
            <a href="logout" class="mdl-layout__tab">Logout</a>
          <?php
          }
        ?>
        </div>
      </header>
    </div>
</div>

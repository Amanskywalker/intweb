<?php
  // default landing page
	//index.php
  $page_name="index.php";
	
	$title="Index";

?>
<!doctype html>
<html lang="en-uk">
<?php
	//includind the head tag
	require 'head.php';
?>
<body>
<?php
	// including the header of the document
	require 'header.php';
	// including the blog layout 
?>
<div>
	<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <div class="demo-blog__posts mdl-grid">
         <?php

              include_once 'display/functions/otr.func.php';
              
              for ($i=0; $i <4 ; $i++) 
              { 
                otr('View text','click to view content','entry');
              }

              include_once 'display/functions/amazing.func.php';
              
              for ($i=0; $i <6 ; $i++) 
              { 
                amazing('View content','click to view the content','entry_login');
              }

         ?> 
        </div>
    <?php
    	require 'footer.php';
    ?>
      </main>
      <!--<div class="mdl-layout__obfuscator"></div>-->
    </div>
</div>
</body>
<?php
	require 'script.php';
?>
</html>
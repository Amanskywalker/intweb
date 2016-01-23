<?php
  //entry.php
  $page_name="entry.php";

  include 'core.php';

  $ids=@$_GET['ref'];
  $ids=htmlentities($ids);

  // get the content of this page from the database wher ids is the primary key
  /*
    script/function to fetch the data from database
  */
  // rest of the page
  $title="page title";
  $keywords="page keywaords";
 
?>

<!doctype html>

<html lang="en">
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
    <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <div class="demo-blog__posts mdl-grid">
          <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
            <style>
              .demo-blog--blogpost .demo-blog__posts > .mdl-card .mdl-card__media 
              {
                background-image: url('images/road_big.jpg');
                height: 250px;
              }
            </style>
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3><?php echo "$title" ;?></h3>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              <div class="minilogo"></div>
              <div>
                <strong><?php echo "Author- "; ?></strong>
                <span><?php echo "by line"; ?></span>
              </div>
              <div class="section-spacer"></div>
              <div class="meta__favorites">
                <i class="material-icons" role="presentation">favorite</i>
                <span class="visuallyhidden">favorites</span>
              </div>
              <div>
                <i class="material-icons" role="presentation">bookmark</i>
                <span class="visuallyhidden">bookmark</span>
              </div>
              <div>
                <i class="material-icons" role="presentation">share</i>
                <span class="visuallyhidden">share</span>
              </div>
            </div>
            
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
              <p>
                <?php echo "content of the page";?>
              </p>
            </div>
          </div>
          <!--navigation panel for large database-->
        </div>
    <?php
      require 'footer.php';
    ?>
      </main>
      <!--<div class="mdl-layout__obfuscator"></div>-->
    </div>
    <a href="<?php echo "#" ;?>" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast"><?php echo  "Download";//$bookbo->booktitle;?></a>
    <script src="../../material.min.js"></script>
  </div>
</body>
</html>

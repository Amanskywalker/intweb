<?php
	//otr.func.php
	/*
		this function output the otr style of card display

		prototype
		function otr($heading,$content,$link)

		$heading= text which will be displayed like heading
		$content= content of the display to be display
		$link=	URL to ling the card 
		$images= link to image to be displayed
	*/

	function otr($heading='heading',$content='content goes here',$link='#',$images='road')
	{
		
		$image='images/'.$images.'.jpg';
?>

<div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col">
	<style>
		.demo-blog .on-the-road-again .mdl-card__media 
		{
		  /*background-image: url(<?php echo "$image"; ?>) ! important;*/
		  height: 240px ! important;
		}
	</style>
	<div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php echo "$image"; ?>)">
		<h3><a href=<?php echo "\"$link\"";?>><?php echo "$heading";?></a></h3>
	</div>
	<div class="mdl-color-text--grey-600 mdl-card__supporting-text">
		<?php echo "$content";?>
	</div>
	<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
		<!-- use this iff author name and other stuffs have to be shown
		<div class="minilogo"></div>
		<div>
			<strong>The Newist</strong>
			<span>2 days ago</span>
		</div>-->
	</div>
</div>
<?php
	}
?>
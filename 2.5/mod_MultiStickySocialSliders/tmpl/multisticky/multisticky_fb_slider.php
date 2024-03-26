<?php
/**
* @Copyright Copyright (C) 2010- ... Hiral Padsumbiya
 * @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * mod_socialfancyslider is Commercial software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
**/

// no direct access
if($ms3_options['MSTabPosition']=='Middle' && in_array($ms3_options['MTabDesign'],array(3,6)))
{
	$ms3_fbsHead_position='top: 50%; margin-top: -30px;';
}
if($ms3_options['MSTabPosition']=='Middle' && in_array($ms3_options['MTabDesign'],array(1,2,4,5)))
{
	$ms3_fbsHead_position='top: 50%; margin-top: -78px;';
}
if($ms3_options['MSTabPosition']=='Middle' && in_array($ms3_options['MTabDesign'],array(7,8)))
{
	$ms3_fbsHead_position='top: 50%; margin-top: -45px;';
}
if($ms3_options['MSTabPosition']=='Middle' && in_array($ms3_options['MTabDesign'],array(9)))
{
	$ms3_fbsHead_position='top: 50%; margin-top: -18px;';
}
if($ms3_options['MSTabPosition']=='Top')
{
	$ms3_fbsHead_position='top: 5px;';
}
if($ms3_options['MSTabPosition']=='Bottom')
{	
	$ms3_fbsHead_position='bottom: 5px;';
}
if($ms3_options['MSTabPosition']=='Fixed')
{	
	$ms3_fbsHead_position='top: '.$ms3_options['MSTabPositionPx'].'px;';
}
?>
<div class="ms3_fbookCenterOuter ms3_ms3CenterOuterFb <?php echo ($ms3_options['MSVPosition']=='Fixed' ? 'ms_3fubkbFixed': '')?> fblb<?php echo $ms3_options['Position']?>" style="<?php echo ($ms3_options['MSVPosition']=='Fixed' ? 'margin-top: '.($ms3_options['MSVPositionPx'] ? $ms3_options['MSVPositionPx'] : '0').'px; ': '')?> <?php echo ($ms3_options['Position']=='Left' ? 'left: -'.($ms3_options['Width']+$ms3_options['Border']).'px;' : 'right: -'.($ms3_options['Width']+$ms3_options['Border']).'px;')?><?php echo ($ms3_options['ZIndex'] ? 'z-index: '.$ms3_options['ZIndex'].';': '')?>">
	<div class="ms3_fbkCenterInner">
		<div class="ms3_facebkWrap fblbTheme0 msnewfblbTab<?php echo $ms3_options['MTabDesign']?>">
			<div class="ms3_fbukForm" style="background: <?php echo $ms3_options['BorderColor']?>; height: <?php echo $ms3_options['Height']?>px; width: <?php echo $ms3_options['Width']?>px; padding: <?php echo ($ms3_options['Position']=='Left' ? $ms3_options['Border'].'px '.$ms3_options['Border'].'px '.$ms3_options['Border'].'px 0' : $ms3_options['Border'].'px 0 '.$ms3_options['Border'].'px '.$ms3_options['Border'].'px')?>;">
				<h2 class="ms3_ms3Head" style="<?php echo $ms3_fbsHead_position; ?> <?php echo ($ms3_options['Position']=='Left' ? 'left: '.($ms3_options['Width']+$ms3_options['Border']).'px;' : 'right: '.($ms3_options['Width']+$ms3_options['Border']).'px;')?>">Facebook</h2>
				<div id="ms3newms3newfblbInnerFb" class="ms3newfblbInner ms3_fbkInnerLoading" style="height: <?php echo $ms3_options['Height']?>px; background-color: <?php echo $ms3_options['BackgroundColor']?>;">
					<div class="fb-root" id="fb-root"></div>
					<script>
					jQuery(document).ready(function(){	
					if ( jQuery.browser.msie ) 
					{jQuery('#ms3newms3newfblbInnerFb').removeClass('ms3_fbkInnerLoading');}
					else{jQuery('.fb-like-box').bind('DOMNodeInserted', function(event) { 
					if(event.target.nodeName=='IFRAME'){
					jQuery('.fb-like-box iframe').load(function() 
					{jQuery('#ms3newms3newfblbInnerFb').removeClass('ms3_fbkInnerLoading');
					jQuery('.fb-like-box').unbind('DOMNodeInserted');});
					}});}
					(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) {return;}
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/<?php echo $ms3_options['MSLocale']?>/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));});</script>
					<div class="fb-like-box" <?php if($ms3_options['MSForceWall']==1) { echo 'force_wall="true"'; }?> data-colorscheme="<?php echo $ms3_options['MSColorScheme']?>"  data-border-color="<?php echo $ms3_options['BorderColor']?>" data-href="<?php echo  $ms3_options['MS3FacebookPageURL'] ?>" data-width="<?php echo $ms3_options['Width']?>" data-height="<?php echo $ms3_options['Height']?>" data-show-faces="<?php echo ($ms3_options['MS3ShowFaces'] ? 'true' : 'false')?>" data-stream="<?php echo ($ms3_options['MS3ShowStream'] ? 'true' : 'false')?>" data-header="<?php echo ($ms3_options['MS3ShowHeader'] ? 'true' : 'false')?>"></div>
				</div>
			</div>
		</div>
	</div>
</div>
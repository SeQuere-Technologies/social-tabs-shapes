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
global $wpdb;
if($ms3_options['MS3_GP_MSTabPosition']=='Middle' && in_array($ms3_options['MS3GP_MTabDesign'],array(3,6)))
{
	$multisticky_fb_GP_position='top: 50%; margin-top: -30px;';
}
if($ms3_options['MS3_GP_MSTabPosition']=='Middle' && in_array($ms3_options['MS3GP_MTabDesign'],array(1,2,4,5)))
{
	$multisticky_fb_GP_position='top: 50%; margin-top: -78px;';
}
if($ms3_options['MS3_GP_MSTabPosition']=='Middle' && in_array($ms3_options['MS3GP_MTabDesign'],array(7,8)))
{
	$multisticky_fb_GP_position='top: 50%; margin-top: -45px;';
}
if($ms3_options['MS3_GP_MSTabPosition']=='Middle' && in_array($ms3_options['MS3GP_MTabDesign'],array(9)))
{
	$multisticky_fb_GP_position='top: 50%; margin-top: -18px;';
}
if($ms3_options['MS3_GP_MSTabPosition']=='Top')
{
	$multisticky_fb_GP_position='top: 5px;';
}
if($ms3_options['MS3_GP_MSTabPosition']=='Bottom')
{	
	$multisticky_fb_GP_position='bottom: 5px;';
}
if($ms3_options['MS3_GP_MSTabPosition']=='Fixed')
{	
	$multisticky_fb_GP_position='top: '.$ms3_options['MS3_GP_MSTabPositionPx'].'px;';
}
?>
<div class="ms3_fbookCenterOuter ms3fbCenterOuterGp <?php echo ($ms3_options['MS3GP_MSVPosition'] == 'Fixed' ? 'ms_3fubkbFixed' : '') ?> fblb<?php echo $ms3_options['MS33GP_Position'] ?>" style="<?php echo  ($ms3_options['MS3GP_MSVPosition'] == 'Fixed' ? 'margin-top: ' . ($ms3_options['MS3GP_MSVPositionPx'] ? $ms3_options['MS3GP_MSVPositionPx'] : '0') . 'px; ' : '') ?> <?php echo  ($ms3_options['MS33GP_Position'] == 'Left' ? 'left: -' . ($ms3_options['MS3GP_Width'] + $ms3_options['MS3NGP_Border']) . 'px;' : 'right: -' . ($ms3_options['MS3GP_Width'] + $ms3_options['MS3NGP_Border']) . 'px;') ?><?php echo  ($ms3_options['MS3GP_ZIndex'] ? 'z-index: ' . $ms3_options['MS3GP_ZIndex'] . ';' : '') ?>">
	<div class="ms3_fbkCenterInner">
		<div class="ms3_facebkWrap fblbTheme0 msnewfblbTab<?php echo $ms3_options['MS3GP_MTabDesign'] ?>">
			<div class="ms3_fbukForm" style="background: <?php echo $ms3_options['MSGP_BBorderColor'] ?>; height: <?php echo  $ms3_options['MS3GP_Height'] ?>px; width: <?php echo  $ms3_options['MS3GP_Width'] ?>px; padding: <?php echo  ($ms3_options['MS33GP_Position'] == 'Left' ? $ms3_options['MS3NGP_Border'] . 'px ' . $ms3_options['MS3NGP_Border'] . 'px ' . $ms3_options['MS3NGP_Border'] . 'px 0' : $ms3_options['MS3NGP_Border'] . 'px 0 ' . $ms3_options['MS3NGP_Border'] . 'px ' . $ms3_options['MS3NGP_Border'] . 'px') ?>;">
				<h2 class="ms3_ms3Head" style="<?php echo $multisticky_fb_GP_position; ?> <?php echo  ($ms3_options['MS33GP_Position'] == 'Left' ? 'left: ' . ($ms3_options['MS3GP_Width'] + $ms3_options['MS3NGP_Border']) . 'px;' : 'right: ' . ($ms3_options['MS3GP_Width'] + $ms3_options['MS3NGP_Border']) . 'px;') ?>">Google Plus</h2>
				<div class="ms3newfblbInner" style="background: <?php echo $ms3_options['MS3GP_BackgroundColor']?>; height: <?php echo  $ms3_options['MS3GP_Height'] ?>px;">
					<div style="overflow: hidden; height: 131px;">
						
                        
                       <link href="https://plus.google.com/<?php echo $ms3_options['MSGP_PageID'];?>" rel="publisher" />
		   <script type="text/javascript"   src="https://apis.google.com/js/plusone.js"></script>
			<!--<g:plus href="https://plus.google.com/<?php //echo $ms3_options['MSGP_PageID'];?>" size="smallbadge"></g:plus>-->
            <div class="g-plus" data-width="300" data-height="70" data-href="//plus.google.com/<?php echo $ms3_options['MSGP_PageID'];?>?rel=author"></div>
			<script type="text/javascript">gapi.plus.go();</script>  
                        
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
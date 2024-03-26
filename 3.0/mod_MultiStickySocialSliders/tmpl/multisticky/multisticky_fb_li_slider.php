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
if($ms3_options['MS3_LI_MSTabPosition']=='Middle' && in_array($ms3_options['MS33LI_MTabDesign'],array(3,6)))
{
	$ms3_fb_Head_LI_position='top: 50%; margin-top: -30px;';
}
if($ms3_options['MS3_LI_MSTabPosition']=='Middle' && in_array($ms3_options['MS33LI_MTabDesign'],array(1,2,4,5)))
{
	$ms3_fb_Head_LI_position='top: 50%; margin-top: -78px;';
}
if($ms3_options['MS3_LI_MSTabPosition']=='Middle' && in_array($ms3_options['MS33LI_MTabDesign'],array(7,8)))
{
	$ms3_fb_Head_LI_position='top: 50%; margin-top: -45px;';
}
if($ms3_options['MS3_LI_MSTabPosition']=='Middle' && in_array($ms3_options['MS33LI_MTabDesign'],array(9,10)))
{
	$ms3_fb_Head_LI_position='top: 50%; margin-top: -18px;';
}
if($ms3_options['MS3_LI_MSTabPosition']=='Middle' && in_array($ms3_options['MS33LI_MTabDesign'],array(11,13)))
{
	$ms3_fb_Head_LI_position='top: 50%; margin-top: -54px;';
}
if($ms3_options['MS3_LI_MSTabPosition']=='Middle' && in_array($ms3_options['MS33LI_MTabDesign'],array(12,14)))
{
	$ms3_fb_Head_LI_position='top: 50%; margin-top: -39px;';
}
if($ms3_options['MS3_LI_MSTabPosition']=='Top')
{
	$ms3_fb_Head_LI_position='top: 5px;';
}
if($ms3_options['MS3_LI_MSTabPosition']=='Bottom')
{	
	$ms3_fb_Head_LI_position='bottom: 5px;';
}
if($ms3_options['MS3_LI_MSTabPosition']=='Fixed')
{	
	$ms3_fb_Head_LI_position='top: '.$ms3_options['MS3_LI_MSTabPositionPx'].'px;';
}
?>
<div class="ms3_fbookCenterOuter ms3_msCenterOuterLi <?php echo ($ms3_options['MS3LI_MSVPosition'] == 'Fixed' ? 'ms_3fubkbFixed' : '') ?> fblb<?php echo $ms3_options['MS3LI_Position'] ?>" style="<?php echo ($ms3_options['MS3LI_MSVPosition'] == 'Fixed' ? 'margin-top: ' . ($ms3_options['MS3LI_MSVPositionPx'] ? $ms3_options['MS3LI_MSVPositionPx'] : '0') . 'px; ' : '') ?> <?php echo ($ms3_options['MS3LI_Position'] == 'Left' ? 'left: -' . ($ms3_options['MSLI_Width'] + $ms3_options['MS3LI_BorderColor']) . 'px;' : 'right: -' . ($ms3_options['MSLI_Width'] + $ms3_options['MS3LI_BorderColor']) . 'px;') ?><?php echo ($ms3_options['MS3LI_ZIndex'] ? 'z-index: ' . $ms3_options['MS3LI_ZIndex'] . ';' : '') ?>;">
	<div class="ms3_fbkCenterInner">
		<div class="ms3_facebkWrap fblbTheme0 msnewfblbTab<?php echo $ms3_options['MS33LI_MTabDesign'] ?>">
			<div class="ms3_fbukForm" style="background: <?php echo $ms3_options['MS3LMI_BorderColor'] ?>; height: <?php echo $ms3_options['MSLI_Height'] ?>px; width: <?php echo $ms3_options['MSLI_Width'] ?>px; padding: <?php echo ($ms3_options['MS3LI_Position'] == 'Left' ? $ms3_options['MS3LI_BorderColor'] . 'px ' . $ms3_options['MS3LI_BorderColor'] . 'px ' . $ms3_options['MS3LI_BorderColor'] . 'px 0' : $ms3_options['MS3LI_BorderColor'] . 'px 0 ' . $ms3_options['MS3LI_BorderColor'] . 'px ' . $ms3_options['MS3LI_BorderColor'] . 'px') ?>;">
				<h2 class="ms3_ms3Head" style="<?php echo $ms3_fb_Head_LI_position; ?> <?php echo ($ms3_options['MS3LI_Position'] == 'Left' ? 'left: ' . ($ms3_options['MSLI_Width'] + $ms3_options['MS3LI_BorderColor']) . 'px;' : 'right: ' . ($ms3_options['MSLI_Width'] + $ms3_options['MS3LI_BorderColor']) . 'px;') ?>">LinkedId</h2>
				<div class="ms3newfblbInner" style="overflow: hidden; background: <?php echo $ms3_options['MSLI_BackgroundColor'] ?>; height: <?php echo $ms3_options['MSLI_Height'] ?>px;">				
						<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
						<?php if($ms3_options['MSLI_ShowCompanyProfile']==1 && $ms3_options['MSlLI_Order']==2){
						?>
						<script type="IN/CompanyProfile" data-related="false" data-width="<?php echo $ms3_options['MSLI_Width'] ?>" data-id="<?php echo $ms3_options['MSLI_CompanyID'] ?>" data-format="inline" ></script>
						<?php 
						}
						if($ms3_options['MS3LI_ShowPublicProfile']==1){
						?>
						<script type="IN/MemberProfile" data-related="false" data-width="<?php echo $ms3_options['MSLI_Width'] ?>" data-id="<?php echo $ms3_options['MS3LI_PublicProfile'] ?>" data-format="inline"></script>
						<?php } ?>
						<?php if($ms3_options['MSLI_ShowCompanyProfile']==1 && $ms3_options['MSlLI_Order']==1){
						?>
						<script type="IN/CompanyProfile" data-related="false" data-width="<?php echo $ms3_options['MSLI_Width'] ?>" data-id="<?php echo $ms3_options['MSLI_CompanyID'] ?>" data-format="inline" ></script>
						<?php 
						}
						?>
				</div>
			</div>
		</div>
	</div>
</div>
					
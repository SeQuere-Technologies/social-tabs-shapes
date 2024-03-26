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
if($ms3_options['MS3_TW_MSTabPosition']=='Middle' && in_array($ms3_options['MS3TW_MTabDesign'],array(3,6)))
{
	$ms3_Head_TW_position='top: 50%; margin-top: -30px;';
}
if($ms3_options['MS3_TW_MSTabPosition']=='Middle' && in_array($ms3_options['MS3TW_MTabDesign'],array(1,2,4,5)))
{
	$ms3_Head_TW_position='top: 50%; margin-top: -78px;';
}
if($ms3_options['MS3_TW_MSTabPosition']=='Middle' && in_array($ms3_options['MS3TW_MTabDesign'],array(7,8)))
{
	$ms3_Head_TW_position='top: 50%; margin-top: -45px;';
}
if($ms3_options['MS3_TW_MSTabPosition']=='Middle' && in_array($ms3_options['MS3TW_MTabDesign'],array(9)))
{
	$ms3_Head_TW_position='top: 50%; margin-top: -18px;';
}
if($ms3_options['MS3_TW_MSTabPosition']=='Top')
{
	$ms3_Head_TW_position='top: 5px;';
}
if($ms3_options['MS3_TW_MSTabPosition']=='Bottom')
{	
	$ms3_Head_TW_position='bottom: 5px;';
}
if($ms3_options['MS3_TW_MSTabPosition']=='Fixed')
{	
	$ms3_Head_TW_position='top: '.$ms3_options['MS3_TW_MSTabPositionPx'].'px;';
}
?>
<div class="ms3_fbookCenterOuter ms3fbCenterOuterTw <?php echo  ($ms3_options['MS3TW_MSVPosition'] == 'Fixed' ? 'ms_3fubkbFixed' : '') ?> fblb<?php echo  $ms3_options['MSNTW_Position'] ?>" style="<?php echo  ($ms3_options['MS3TW_MSVPosition'] == 'Fixed' ? 'margin-top: ' . ($ms3_options['MS3TW_MSVPositionPx'] ? $ms3_options['MS3TW_MSVPositionPx'] : '0') . 'px; ' : '') ?> <?php echo  ($ms3_options['MSNTW_Position'] == 'Left' ? 'left: -' . ($ms3_options['MSTW_Width'] + $ms3_options['MSTW_Border']) . 'px;' : 'right: -' . ($ms3_options['MSTW_Width'] + $ms3_options['MSTW_Border']) . 'px;') ?><?php echo  ($ms3_options['MSTW_ZIndex'] ? 'z-index: ' . $ms3_options['MSTW_ZIndex'] . ';' : '') ?>">
	<div class="ms3_fbkCenterInner">
		<div class="ms3_facebkWrap fblbTheme0 msnewfblbTab<?php echo  $ms3_options['MS3TW_MTabDesign'] ?>">
			<div class="ms3_fbukForm" style="background: <?php echo  $ms3_options['MSTW_BorderColor'] ?>; height: <?php echo  $ms3_options['MSTW_Height'] ?>px; width: <?php echo  $ms3_options['MSTW_Width'] ?>px; padding: <?php echo  ($ms3_options['MSNTW_Position'] == 'Left' ? $ms3_options['MSTW_Border'] . 'px ' . $ms3_options['MSTW_Border'] . 'px ' . $ms3_options['MSTW_Border'] . 'px 0' : $ms3_options['MSTW_Border'] . 'px 0 ' . $ms3_options['MSTW_Border'] . 'px ' . $ms3_options['MSTW_Border'] . 'px') ?>;">
				<h2 class="ms3_ms3Head" style="<?php echo $ms3_Head_TW_position; ?> <?php echo  ($ms3_options['MSNTW_Position'] == 'Left' ? 'left: ' . ($ms3_options['MSTW_Width'] + $ms3_options['MSTW_Border']) . 'px;' : 'right: ' . ($ms3_options['MSTW_Width'] + $ms3_options['MSTW_Border']) . 'px;') ?>">Twitter</h2>
				<div id="ms3newfblbInnerTw" class="ms3newfblbInner ms3_fbkInnerLoading" style="height: <?php echo $ms3_options['MSTW_Height']?>px;">
					<div id="ms3tfblbTww"></div>
					<script src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
						jQuery(document).ready(function(){	
						new TWTR.Widget({
							id:	'ms3tfblbTww',
							version: 2,
							type: 'profile',
							rpp: <?php echo  $ms3_options['MSTW_rpp'] ?>,
							interval: <?php echo  $ms3_options['MSTW_interval'] * 1000 ?>,
							width: <?php echo  $ms3_options['MSTW_Width'] ?>,
							height: <?php echo  $ms3_options['MSTW_Height'] - 92 ?>,
							theme: {
								shell: {
									background: '<?php echo  $ms3_options['MSTW_ShellBackground'] ?>',
									color: '<?php echo  $ms3_options['MSTW_ShellText'] ?>'
								},
								tweets: {
									background: '<?php echo  $ms3_options['MSTW_TweetBackground'] ?>',
									color: '<?php echo  $ms3_options['MS3TW_TweetText'] ?>',
									links: '<?php echo  $ms3_options['MSTW_Links'] ?>'
								}
							},
							features: {
								loop: <?php echo  ($ms3_options['MSTW_loop'] ? 'true' : 'false') ?>,
								live: <?php echo  ($ms3_options['MSTW_live'] ? 'true' : 'false') ?>,
								scrollbar: true,
								avatars: true,
								behavior: '<?php echo  $ms3_options['MSTW_behavior'] ?>'				  
							}
						}).render().setUser('<?php echo  $ms3_options['MSTW_Username'] ?>').start();
					   jQuery('#ms3newfblbInnerTw').removeClass('ms3_fbkInnerLoading');
					});
					</script>		
					<?php if($ms3_options['MSTW_ShowFollowButton']){?>
					<div class="ms3fblbFollowTw">
						<a href="https://twitter.com/<?php echo  $ms3_options['MSTW_Username'] ?>" class="twitter-follow-button" data-width="130px" data-show-count="false" data-lang="<?php echo  $ms3_options['MSTW_Language'] ?>">Follow <?php echo  $ms3_options['MSTW_Username'] ?></a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
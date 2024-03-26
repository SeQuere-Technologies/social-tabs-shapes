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
if($ms3_options['MS3_YT_MSTabPosition']=='Middle' && in_array($ms3_options['MSYT_MTabDesign'],array(3,6)))
{
	$ms3_fbHead_YT_position='top: 50%; margin-top: -30px;';
}
if($ms3_options['MS3_YT_MSTabPosition']=='Middle' && in_array($ms3_options['MSYT_MTabDesign'],array(1,2,4,5)))
{
	$ms3_fbHead_YT_position='top: 50%; margin-top: -78px;';
}
if($ms3_options['MS3_YT_MSTabPosition']=='Middle' && in_array($ms3_options['MSYT_MTabDesign'],array(7,8)))
{
	$ms3_fbHead_YT_position='top: 50%; margin-top: -45px;';
}
if($ms3_options['MS3_YT_MSTabPosition']=='Middle' && in_array($ms3_options['MSYT_MTabDesign'],array(9)))
{
	$ms3_fbHead_YT_position='top: 50%; margin-top: -18px;';
}
if($ms3_options['MS3_YT_MSTabPosition']=='Top')
{
	$ms3_fbHead_YT_position='top: 5px;';
}
if($ms3_options['MS3_YT_MSTabPosition']=='Bottom')
{	
	$ms3_fbHead_YT_position='bottom: 5px;';
}
if($ms3_options['MS3_YT_MSTabPosition']=='Fixed')
{	
	$ms3_fbHead_YT_position='top: '.$ms3_options['MS3_YT_MSTabPositionPx'].'px;';
}
?>
<div class="ms3_fbookCenterOuter ms3_CenterOuterYt <?php echo ($ms3_options['MSYT_MSVPosition'] == 'Fixed' ? 'ms_3fubkbFixed' : '') ?> fblb<?php echo $ms3_options['MSYT_Position'] ?>" style="<?php echo ($ms3_options['MSYT_MSVPosition'] == 'Fixed' ? 'margin-top: ' . ($ms3_options['MSYT_MSVPositionPx'] ? $ms3_options['MSYT_MSVPositionPx'] : '0') . 'px; ' : '') ?> <?php echo ($ms3_options['MSYT_Position'] == 'Left' ? 'left: -' . ($ms3_options['MSYT_Width'] + $ms3_options['MSYT_Border']) . 'px;' : 'right: -' . ($ms3_options['MSYT_Width'] + $ms3_options['MSYT_Border']) . 'px;') ?><?php echo ($ms3_options['MSYT_ZIndex'] ? 'z-index: ' . $ms3_options['MSYT_ZIndex'] . ';' : '') ?>;">
	<div class="ms3_fbkCenterInner">
		<div class="ms3_facebkWrap fblbTheme0 msnewfblbTab<?php echo $ms3_options['MSYT_MTabDesign'] ?>">
			<div class="ms3_fbukForm" style="background: <?php echo $ms3_options['MSYT_BorderColor'] ?>; height: <?php echo $ms3_options['MSYT_Height'] ?>px; width: <?php echo $ms3_options['MSYT_Width'] ?>px; padding: <?php echo ($ms3_options['MSYT_Position'] == 'Left' ? $ms3_options['MSYT_Border'] . 'px ' . $ms3_options['MSYT_Border'] . 'px ' . $ms3_options['MSYT_Border'] . 'px 0' : $ms3_options['MSYT_Border'] . 'px 0 ' . $ms3_options['MSYT_Border'] . 'px ' . $ms3_options['MSYT_Border'] . 'px') ?>;">
				<h2 class="ms3_ms3Head" style="<?php echo $ms3_fbHead_YT_position; ?> <?php echo ($ms3_options['MSYT_Position'] == 'Left' ? 'left: ' . ($ms3_options['MSYT_Width'] + $ms3_options['MSYT_Border']) . 'px;' : 'right: ' . ($ms3_options['MSYT_Width'] + $ms3_options['MSYT_Border']) . 'px;') ?>">YouTube</h2>
				<div class="ms3newfblbInner" style="background: <?php echo $ms3_options['MSYT_BackgroundColor'] ?>; height: <?php echo $ms3_options['MSYT_Height'] ?>px;">				
					<div style="overflow: hidden; height: 98px;">
						<iframe id="fblbYTS" src="http://www.youtube.com/subscribe_widget?p=<?php echo $ms3_options['Ms3YT_Channel']; ?>" style="overflow: hidden; height: 98px; width:100%; border: 0;" scrolling="no" frameBorder="0"></iframe>
					</div>
					<div id="ms3newfblbInnerYt" class="ms3_fbkInnerLoading" style="overflow-y: scroll; overflow-x: hidden; height: <?php echo $ms3_options['MSYT_Height']-98?>px;">
						<ul id="ms3nwfbaYtList" class="ms3_facebbookList" style="height: <?php echo $ms3_options['MSYT_Height']-98 ?>px">
						</ul>
						<script type="text/javascript">
						function __fblb_YTGet(data) 
						{
							var MonthNames=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
							if(!data.feed.entry)
							{
							}
							else
							{
								jQuery.each(data.feed.entry, function(i,e) {
									added=new Date(e.published.$t);
									jQuery('#ms3nwfbaYtList').append('<li>' +
									'<a href="' + e.link[0].href +'" class="mssfblbthumb-link"><img src="' + e.media$group.media$thumbnail[1].url + '" alt="" width="61" height="45" class="fblbthumb" /></a>' +
									'<div class="ms3fb3lbbd">' +
									'<a href="' + e.link[0].href +'" class="mssfflbtitle">' + e.title.$t + '</a>' +
									'<span class="ms3fblbinfo">' + (!e.yt$statistics ? '' : 'views: ' + e.yt$statistics.viewCount + ' |' ) + ' added: ' + (added.getDate()) + ' ' + MonthNames[added.getMonth()] + ' ' + added.getFullYear() + '</span>' +
									'</div>' +
									'</li>');
								});
							}
							jQuery('#ms3newfblbInnerYt').removeClass('ms3_fbkInnerLoading');
						}
						jQuery(document).ready(function(){
							jQuery.getScript("http://gdata.youtube.com/feeds/users/<?php echo $ms3_options['Ms3YT_Channel']; ?>/uploads?alt=json-in-script&max-results=10&format=5&callback=__fblb_YTGet");
						});
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
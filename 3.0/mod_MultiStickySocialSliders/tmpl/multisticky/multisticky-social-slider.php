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
require_once(dirname(__FILE__) . '/multisticky_common.inc.php');


DEFINE('FBLB_DEMO',true);

	//print_r($_REQUEST);

	global $ms3_fblb_preview_options;

		require_once(dirname(__FILE__) . '/configuration.php');
		
		$ms3_options = $ms3_multisticky_options;
		if($ms3_options['MSDisableByGetParamN'] && $ms3_options['MSDisableByGetParamV'] && $_GET[$ms3_options['MSDisableByGetParamN']]==$ms3_options['MSDisableByGetParamV'])
		{
			return;
		}
	
	if ($ms3_options['Enable'] == 1 && $ms3_options['MS3FacebookPageURL'])
	{
		require_once(dirname(__FILE__) . '/multisticky_fb_slider.php');
	}
	if ($ms3_options['MSTW_Enable'] == 1 && $ms3_options['MSTW_Username'])
	{
		require_once(dirname(__FILE__) . '/multisticky_tw_slider.php');
	}
	if ($ms3_options['MS3GP_Enable'] == 1 && $ms3_options['MSGP_PageID'])
	{
		require_once(dirname(__FILE__) . '/multisticky_fb_gp_slider.php');
	}
	if ($ms3_options['MS3YT_Enable'] == 1 && $ms3_options['Ms3YT_Channel'])
	{
		require_once(dirname(__FILE__) . '/multisticky_yt_slider.php');
	}
	if ($ms3_options['MS3LI_Enable'])
	{
		require_once(dirname(__FILE__) . '/multisticky_fb_li_slider.php');
	}

?>
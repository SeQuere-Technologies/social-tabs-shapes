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
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once( dirname(__FILE__).DS.'helper.php' );

$ms3_theme_styles = $params->get( 'theme_style', 0 );
$mstop_margin = $params->get( 'top_margin', 0 );

$ms3_fb_s_enable = $params->get( 'ms3_fb_s_enable', 0 );
$ms3_fb_direction = $params->get( 'ms3_fb_direction', 0 );
$ms3_fb_top_margin = $params->get( 'ms3_fb_top_margin', 0 );
$ms3_fb_page_url = $params->get( 'ms3_fb_page_url', 0 );
$ms3_fb_slide_width = $params->get( 'ms3_fb_slide_width', 0 );
$ms3_fb_slide_height = $params->get( 'ms3_fb_slide_height', 0 );
$ms3_fb_faces = $params->get( 'ms3_fb_faces', 0 );
$ms3_fb_header = $params->get( 'ms3_fb_header', 0 );
$ms3_fb_stream = $params->get( 'ms3_fb_stream', 0 );
$ms3_fb_border_size = $params->get( 'ms3_fb_border_size', 0 );
$ms3_fb_border_color = $params->get( 'ms3_fb_border_color', 0 );

$ms3_twitt_s_enable = $params->get( 'ms3_twitt_s_enable', 0 );
$ms3_twitt_direction = $params->get( 'ms3_twitt_direction', 0 );
$ms3_twitt_top_margin = $params->get( 'ms3_twitt_top_margin', 0 );
$ms3_twitt_slide_width = $params->get( 'ms3_twitt_slide_width', 0 );
$ms3_twitt_slide_height = $params->get( 'ms3_twitt_slide_height', 0 );
$ms3_twitt_username = $params->get( 'ms3_twitt_username', 0 );
$ms3_twitt_twitts_number = $params->get( 'ms3_twitt_twitts_number', 0 );
$ms3_twitt_border_size = $params->get( 'ms3_twitt_border_size', 0 );
$ms3_twitt_border_color = $params->get( 'ms3_twitt_border_color', 0 );

$ms3_gplus_s_enable = $params->get( 'ms3_gplus_s_enable', 0 );
$ms3_gplus_direction = $params->get( 'ms3_gplus_direction', 0 );
$ms3_gplus_top_margin = $params->get( 'ms3_gplus_top_margin', 0 );
$ms3_gplus_slide_width = $params->get( 'ms3_gplus_slide_width', 0 );
$ms3_gplus_slide_height = $params->get( 'ms3_gplus_slide_height', 0 );
$ms3_gplus_id = $params->get( 'ms3_gplus_id', 0 );
$ms3_gplus_border_size = $params->get( 'ms3_gplus_border_size', 0 );
$ms3_gplus_border_color = $params->get( 'ms3_gplus_border_color', 0 );

$ms3_ytube_s_enable = $params->get( 'ms3_ytube_s_enable', 0 );
$ms3_ytube_direction = $params->get( 'ms3_ytube_direction', 0 );
$ms3_ytube_top_margin = $params->get( 'ms3_ytube_top_margin', 0 );
$ms3_ytube_slide_width = $params->get( 'ms3_ytube_slide_width', 0 );
$ms3_ytube_slide_height = $params->get( 'ms3_ytube_slide_height', 0 );
$ms3_ytube_id = $params->get( 'ms3_ytube_id', 0 );
$ms3_ytube_border_size = $params->get( 'ms3_ytube_border_size', 0 );
$ms3_ytube_border_color = $params->get( 'ms3_ytube_border_color', 0 );

$ms3_linkedin_s_enable = $params->get( 'ms3_linkedin_s_enable', 0 );
$ms3_linkedin_direction = $params->get( 'ms3_linkedin_direction', 0 );
$ms3_linkedin_top_margin = $params->get( 'ms3_linkedin_top_margin', 0 );
$ms3_linkedin_slide_width = $params->get( 'ms3_linkedin_slide_width', 0 );
$ms3_linkedin_slide_height = $params->get( 'ms3_linkedin_slide_height', 0 );
$ms3_linkdn_public_profile = $params->get( 'ms3_linkdn_public_profile', 0 );
$ms3_linkdn_public_profile_enable = $params->get( 'ms3_linkdn_public_profile_enable', 0 );
$ms3_linkedin_company_profile = $params->get( 'ms3_linkedin_company_profile', 0 );
$ms3_linkedin_company_profile_enable = $params->get( 'ms3_linkedin_company_profile_enable', 0 );
$ms3_linkedin_border_size = $params->get( 'ms3_linkedin_border_size', 0 );
$ms3_linkedin_border_color = $params->get( 'ms3_linkedin_border_color', 0 );



$content = modMultiStickySocialSliders::getStartms3( $params );
require( JModuleHelper::getLayoutPath( 'mod_MultiStickySocialSliders' ) );
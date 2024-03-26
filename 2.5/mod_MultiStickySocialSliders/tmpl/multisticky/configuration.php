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

if($ms3_fb_direction == 1) { $ms3_facebook_c_direction = 'Left'; } else { $ms3_facebook_c_direction = 'Right'; }
if($ms3_twitt_direction == 1) { $ms3_twitter_c_direction = 'Left'; } else { $ms3_twitter_c_direction = 'Right'; }
if($ms3_gplus_direction == 1) { $ms3_gplus_c_direction = 'Left'; } else { $ms3_gplus_c_direction = 'Right'; }
if($ms3_ytube_direction == 1) { $ms3_ytube_c_direction = 'Left'; } else { $ms3_ytube_c_direction = 'Right'; }
if($ms3_linkedin_direction == 1) { $ms3_linkedin_c_direction = 'Left'; } else { $ms3_linkedin_c_direction = 'Right'; }
if($ms3_linkedin_s_enable == 1) { $ms3_linkedin_s_enable = '1'; } else { $ms3_linkedin_s_enable = '0'; }

$ms3_multisticky_options['Enable'] = $ms3_fb_s_enable;
$ms3_multisticky_options['MS3FacebookPageURL'] = $ms3_fb_page_url;
$ms3_multisticky_options['Width'] = $ms3_fb_slide_width;
$ms3_multisticky_options['Height'] = $ms3_fb_slide_height;
$ms3_multisticky_options['MS3ShowFaces'] = $ms3_fb_faces;
$ms3_multisticky_options['MS3ShowStream'] = $ms3_fb_stream;
$ms3_multisticky_options['MSForceWall'] = '';
$ms3_multisticky_options['MS3ShowHeader'] = $ms3_fb_header;
$ms3_multisticky_options['Position'] = $ms3_facebook_c_direction;
$ms3_multisticky_options['MSTabPosition'] = 'Fixed';
$ms3_multisticky_options['MSTabPositionPx'] = $ms3_fb_top_margin;
$ms3_multisticky_options['MTabDesign'] = $ms3_theme_styles;
$ms3_multisticky_options['Border'] = $ms3_fb_border_size;
$ms3_multisticky_options['BorderColor'] = $ms3_fb_border_color;
$ms3_multisticky_options['BackgroundColor'] = '#ffffff';
$ms3_multisticky_options['MSLocale'] = 'en_US';
$ms3_multisticky_options['MSColorScheme'] = 'light';
$ms3_multisticky_options['MSVPosition'] = 'Fixed';
$ms3_multisticky_options['MSVPositionPx'] = '150px';
$ms3_multisticky_options['ZIndex'] = '1000';

$ms3_multisticky_options['MSTW_Enable'] = $ms3_twitt_s_enable;
$ms3_multisticky_options['MSTW_Username'] = $ms3_twitt_username;
$ms3_multisticky_options['MSTW_Width'] = $ms3_twitt_slide_width;
$ms3_multisticky_options['MSTW_Height'] = $ms3_twitt_slide_height;
$ms3_multisticky_options['MSTW_ShowFollowButton'] = '1';
$ms3_multisticky_options['MSNTW_Position'] = $ms3_twitter_c_direction;
$ms3_multisticky_options['MS3_TW_MSTabPosition'] = 'Fixed';
$ms3_multisticky_options['MS3_TW_MSTabPositionPx'] = $ms3_twitt_top_margin;
$ms3_multisticky_options['MS3TW_MTabDesign'] = $ms3_theme_styles;
$ms3_multisticky_options['MSTW_Border'] = $ms3_twitt_border_size;
$ms3_multisticky_options['MSTW_BorderColor'] = $ms3_twitt_border_color;
$ms3_multisticky_options['MSTW_ShellBackground'] = '#33ccff';
$ms3_multisticky_options['MSTW_ShellText'] = '#ffffff';
$ms3_multisticky_options['MSTW_TweetBackground'] = '#ffffff';
$ms3_multisticky_options['MS3TW_TweetText'] = '#000000';
$ms3_multisticky_options['MSTW_Links'] = '#47a61e';
$ms3_multisticky_options['MS3TW_MSVPosition'] = 'Fixed';
$ms3_multisticky_options['MS3TW_MSVPositionPx'] = '160px';
$ms3_multisticky_options['MSTW_ZIndex'] = '1000';
$ms3_multisticky_options['MSTW_live'] = '';
$ms3_multisticky_options['MSTW_behavior'] = 'all';
$ms3_multisticky_options['MSTW_loop'] = '';
$ms3_multisticky_options['MSTW_interval'] = '30';
$ms3_multisticky_options['MSTW_rpp'] = '7';
$ms3_multisticky_options['MSTW_Language'] = 'en';

$ms3_multisticky_options['MS3GP_Enable'] = $ms3_gplus_s_enable;
$ms3_multisticky_options['MSGP_PageID'] = $ms3_gplus_id;
$ms3_multisticky_options['MSGP_ShowFeed'] = '0';
$ms3_multisticky_options['MS3GP_Width'] = $ms3_gplus_slide_width;
$ms3_multisticky_options['MS3GP_Height'] = $ms3_gplus_slide_height;
$ms3_multisticky_options['MS33GP_Position'] = $ms3_gplus_c_direction;
$ms3_multisticky_options['MS3_GP_MSTabPosition'] = 'Fixed';
$ms3_multisticky_options['MS3_GP_MSTabPositionPx'] = $ms3_gplus_top_margin;
$ms3_multisticky_options['MS3GP_MTabDesign'] = $ms3_theme_styles;
$ms3_multisticky_options['MS3NGP_Border'] = $ms3_gplus_border_size;
$ms3_multisticky_options['MSGP_BBorderColor'] = $ms3_gplus_border_color;
$ms3_multisticky_options['MS3GP_BackgroundColor'] = '#ffffff';
$ms3_multisticky_options['MS3GP_MSVPosition'] = 'Fixed';
$ms3_multisticky_options['MS3GP_MSVPositionPx'] = '170px';
$ms3_multisticky_options['MS3GP_ZIndex'] = '1000';
$ms3_multisticky_options['MSGP_Language'] = 'en-US';

$ms3_multisticky_options['MS3YT_Enable'] = $ms3_ytube_s_enable;
$ms3_multisticky_options['Ms3YT_Channel'] = $ms3_ytube_id;
$ms3_multisticky_options['MSYT_Position'] = $ms3_ytube_c_direction;
$ms3_multisticky_options['MS3_YT_MSTabPosition'] = 'Fixed';
$ms3_multisticky_options['MS3_YT_MSTabPositionPx'] = $ms3_ytube_top_margin;
$ms3_multisticky_options['MSYT_MTabDesign'] = $ms3_theme_styles;
$ms3_multisticky_options['MSYT_Width'] = $ms3_ytube_slide_width;
$ms3_multisticky_options['MSYT_Height'] = $ms3_ytube_slide_height;
$ms3_multisticky_options['MSYT_Border'] = $ms3_ytube_border_size;
$ms3_multisticky_options['MSYT_BorderColor'] = $ms3_ytube_border_color;
$ms3_multisticky_options['MSYT_BackgroundColor'] = '#ffffff';
$ms3_multisticky_options['MSYT_MSVPosition'] = 'Fixed';
$ms3_multisticky_options['MSYT_MSVPositionPx'] = '180px';
$ms3_multisticky_options['MSYT_ZIndex'] = '1000';

$ms3_multisticky_options['MS3LI_Enable'] = $ms3_linkedin_s_enable;
$ms3_multisticky_options['MS3LI_ShowPublicProfile'] = $ms3_linkdn_public_profile_enable;
$ms3_multisticky_options['MSLI_ShowCompanyProfile'] = $ms3_linkedin_company_profile_enable;
$ms3_multisticky_options['MS3LI_PublicProfile'] = $ms3_linkdn_public_profile;
$ms3_multisticky_options['MSLI_CompanyID'] = $ms3_linkedin_company_profile;
$ms3_multisticky_options['MSlLI_Order'] = '1';
$ms3_multisticky_options['MS3LI_Position'] = $ms3_linkedin_c_direction;
$ms3_multisticky_options['MS3_LI_MSTabPosition'] = 'Fixed';
$ms3_multisticky_options['MS3_LI_MSTabPositionPx'] = $ms3_linkedin_top_margin;
$ms3_multisticky_options['MS33LI_MTabDesign'] = $ms3_theme_styles;
$ms3_multisticky_options['MSLI_Width'] = $ms3_linkedin_slide_width;
$ms3_multisticky_options['MSLI_Height'] = $ms3_linkedin_slide_height;
$ms3_multisticky_options['MS3LI_BorderColor'] = $ms3_linkedin_border_size;
$ms3_multisticky_options['MS3LMI_BorderColor'] = $ms3_linkedin_border_color;
$ms3_multisticky_options['MSLI_BackgroundColor'] = '#ffffff';
$ms3_multisticky_options['MS3LI_MSVPosition'] = 'Fixed';
$ms3_multisticky_options['MS3LI_MSVPositionPx'] = '200px';
$ms3_multisticky_options['MS3LI_ZIndex'] = '1000';

$ms3_multisticky_options['MSDisableByGetParamN'] = '';
$ms3_multisticky_options['MSDisableByGetParamV'] = '';

$ms3_multisticky_options['MySQL_Host'] = 'localhost';
$ms3_multisticky_options['MySQL_Database'] = '';
$ms3_multisticky_options['MySQL_Username'] = '';
$ms3_multisticky_options['MySQL_Password'] = '';
$ms3_multisticky_options['MySQL_Prefix'] = '';
?>
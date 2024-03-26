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
?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
jQuery.noConflict();
</script>

<link rel="stylesheet" href="<?php echo JURI::root(); ?>modules/mod_MultiStickySocialSliders/style/multisticky-style.css" type="text/css" charset="utf-8"/>
<link rel="stylesheet" href="<?php echo JURI::root(); ?>modules/mod_MultiStickySocialSliders/style/multisticky-style_ie7.css" type="text/css" charset="utf-8"/>
<style>
.fblbRight .ms3_fbukForm {
	/* margin-left: 60px;*/
	margin-top:<?php echo $mstop_margin;?>px;
}
.fblbLeft .ms3_fbukForm {
	/* margin-left: 60px;*/
	margin-top:<?php echo $mstop_margin;?>px;
}
</style>
<script type="text/javascript" src="<?php echo JURI::root(); ?>modules/mod_MultiStickySocialSliders/javascript/multisticky.slid.js"></script>
<script type="text/javascript" src="<?php echo JURI::root(); ?>modules/mod_MultiStickySocialSliders/javascript/multisticky.slid-ie7.js"></script>

<?php 

require_once("multisticky/multisticky-social-slider.php");

?>

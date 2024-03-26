jQuery(document).ready(function(){	
	var fblbFbOrgRight=jQuery('.ms3_ms3CenterOuterFb').css('right');
	var fblbFbOrgLeft=jQuery('.ms3_ms3CenterOuterFb').css('left');
	var fblbFbOrgzIndex=jQuery('.ms3_ms3CenterOuterFb').css('z-index');
	jQuery('.fblbRight.ms3_ms3CenterOuterFb').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3_ms3CenterOuterFb').stop(true,false).animate({
				right: -3
			},function (){});
		},
		function(){
			jQuery(this).parents('.ms3_ms3CenterOuterFb').stop(true,false).animate({
				right: fblbFbOrgRight
			},function (){ jQuery(this).css('z-index',fblbFbOrgzIndex);});
	});
	jQuery('.fblbLeft.ms3_ms3CenterOuterFb').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3_ms3CenterOuterFb').stop(true,false).animate({
				left: -3
			},function (){});
		},
		function(){
			jQuery(this).parents('.ms3_ms3CenterOuterFb').stop(true,false).animate({
				left: fblbFbOrgLeft
			},function (){ jQuery(this).css('z-index',fblbFbOrgzIndex);});
	});	
	var fblbTwOrgRight=jQuery('.ms3fbCenterOuterTw').css('right');
	var fblbTwOrgLeft=jQuery('.ms3fbCenterOuterTw').css('left');
	var fblbTwOrgzIndex=jQuery('.ms3fbCenterOuterTw').css('z-index');
	jQuery('.fblbRight.ms3fbCenterOuterTw').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3fbCenterOuterTw').stop(true,false).animate({
				right: -3
			},function (){ });
		},
		function(){
			jQuery(this).parents('.ms3fbCenterOuterTw').stop(true,false).animate({
				right: fblbTwOrgRight
			},function (){ jQuery(this).css('z-index',fblbTwOrgzIndex);});
	});
	jQuery('.fblbLeft.ms3fbCenterOuterTw').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3fbCenterOuterTw').stop(true,false).animate({
				left: -3
			},function (){ });
		},
		function(){
			jQuery(this).parents('.ms3fbCenterOuterTw').stop(true,false).animate({
				left: fblbTwOrgLeft
			},function (){ jQuery(this).css('z-index',fblbTwOrgzIndex);});
	});	
	var fblbGpOrgRight=jQuery('.ms3fbCenterOuterGp').css('right');
	var fblbGpOrgLeft=jQuery('.ms3fbCenterOuterGp').css('left');
	var fblbGpOrgzIndex=jQuery('.ms3fbCenterOuterGp').css('z-index');
	jQuery('.fblbRight.ms3fbCenterOuterGp').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3fbCenterOuterGp').stop(true,false).animate({
				right: -3
			},function (){});
		},
		function(){
			jQuery(this).parents('.ms3fbCenterOuterGp').stop(true,false).animate({
				right: fblbGpOrgRight
			},function (){ jQuery(this).css('z-index',fblbGpOrgzIndex);});
	});
	jQuery('.fblbLeft.ms3fbCenterOuterGp').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3fbCenterOuterGp').stop(true,false).animate({
				left: -3
			},function (){});
		},
		function(){
			jQuery(this).parents('.ms3fbCenterOuterGp').stop(true,false).animate({
				left: fblbGpOrgLeft
			},function (){ jQuery(this).css('z-index',fblbGpOrgzIndex);});
	});	
	var fblbYtOrgRight=jQuery('.ms3_CenterOuterYt').css('right');
	var fblbYtOrgLeft=jQuery('.ms3_CenterOuterYt').css('left');
	var fblbYtOrgzIndex=jQuery('.ms3_CenterOuterYt').css('z-index');
	jQuery('.fblbRight.ms3_CenterOuterYt').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3_CenterOuterYt').stop(true,false).animate({
				right: -3
			});
		},
		function(){
			jQuery(this).parents('.ms3_CenterOuterYt').stop(true,false).animate({
				right: fblbYtOrgRight
			},function (){ jQuery(this).css('z-index',fblbYtOrgzIndex);});
	});
	jQuery('.fblbLeft.ms3_CenterOuterYt').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3_CenterOuterYt').stop(true,false).animate({
				left: -3
			});
		},
		function(){
			jQuery(this).parents('.ms3_CenterOuterYt').stop(true,false).animate({
				left: fblbYtOrgLeft
			},function (){ jQuery(this).css('z-index',fblbYtOrgzIndex);});
	});
	var fblbViOrgRight=jQuery('.ms3fbCenterOuterVi').css('right');
	var fblbViOrgLeft=jQuery('.ms3fbCenterOuterVi').css('left');
	var fblbViOrgzIndex=jQuery('.ms3fbCenterOuterVi').css('z-index');
	jQuery('.fblbRight.ms3fbCenterOuterVi').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3fbCenterOuterVi').stop(true,false).animate({
				right: -3
			});
		},
		function(){
			jQuery(this).parents('.ms3fbCenterOuterVi').stop(true,false).animate({
				right: fblbViOrgRight
			},function (){ jQuery(this).css('z-index',fblbYtOrgzIndex);});
	});
	jQuery('.fblbLeft.ms3fbCenterOuterVi').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3fbCenterOuterVi').stop(true,false).animate({
				left: -3
			});
		},
		function(){
			jQuery(this).parents('.ms3fbCenterOuterVi').stop(true,false).animate({
				left: fblbViOrgLeft
			},function (){ jQuery(this).css('z-index',fblbYtOrgzIndex);});
	});
	var fblbLiOrgRight=jQuery('.ms3_msCenterOuterLi').css('right');
	var fblbLiOrgLeft=jQuery('.ms3_msCenterOuterLi').css('left');
	var fblbLiOrgzIndex=jQuery('.ms3_msCenterOuterLi').css('z-index');
	jQuery('.fblbRight.ms3_msCenterOuterLi').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3_msCenterOuterLi').stop(true,false).animate({
				right: -3
			},function (){ jQuery('#ms3newfblbInnerLi').removeClass('ms3_fbkInnerLoading');});
		},
		function(){
			jQuery(this).parents('.ms3_msCenterOuterLi').stop(true,false).animate({
				right: fblbLiOrgRight
			},function (){ jQuery(this).css('z-index',fblbLiOrgzIndex);});
	});
	jQuery('.fblbLeft.ms3_msCenterOuterLi').find('.ms3_fbukForm').hover(
		function(){
			jQuery(this).parents('.ms3_fbookCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.ms3_msCenterOuterLi').stop(true,false).animate({
				left: -3
			},function (){ jQuery('#ms3newfblbInnerLi').removeClass('ms3_fbkInnerLoading');});
		},
		function(){
			jQuery(this).parents('.ms3_msCenterOuterLi').stop(true,false).animate({
				left: fblbLiOrgLeft
			},function (){ jQuery(this).css('z-index',fblbLiOrgzIndex);});
	});
	
});
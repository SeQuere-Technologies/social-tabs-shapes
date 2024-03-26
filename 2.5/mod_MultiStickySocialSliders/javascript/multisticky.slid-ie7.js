jQuery(document).ready(function()
{	
		jQuery('.ms3_fbookCenterOuter').each(function(index) {
			if (!jQuery(this).hasClass('ms_3fubkbFixed'))
			{
				var mt=(((jQuery('body').height()/2)-(jQuery(this).height()/2)))*-1;
				jQuery(this).css('margin-top',mt);
			}
		});
});
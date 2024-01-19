$('.v-2').tinaciousFluidVid({
	type: 'youtube',
	id: 'DeWTgSOJ_uE'
});


 


$(document).on('click','.v-click',function(){
	$('.v-content .v-2').remove();
	
	$('.v-content').append('<div class="v-2"></div>');
	$('.v-2').tinaciousFluidVid({
		type: 'youtube',
		id: $(this).data('src')
	});
  
});



services.form_contact('#frm_soporte');

/*Easy-to-use pluginwordpress.org/plugins/easy-to-use/*/jQuery(function($){	$('input[type=checkbox][name=rememberme]').prop('checked', true); // enable 'remember me' by default	$('input[type=checkbox][name=remember]').prop('checked', true); // enable 'remember me' by default	$(document).ajaxComplete(function() {		$('input[type=checkbox][name=rememberme]').prop('checked', true); // enable 'remember me' loaded via ajax		$('input[type=checkbox][name=remember]').prop('checked', true); // enable 'remember me' loaded via ajax	});	//$('input[type=password]').prop('type', 'text'); // unmask all the password inputs	// this method does not work with ajax loaded forms	/*$('input[type=password]').focus(function() { // unmask all the password inputs only on focus		$(this).prop('type', 'text');	});	$('input[type=password]').blur(function() { // mask all the password inputs on blur		$(this).prop('type', 'password');	});*/	// unmask all the password inputs only on focus	$(document).on('focus', 'input[type=password]', function(event){		$(this).prop('type', 'text');		// mask all the password inputs on blur		$(this).on('blur', function(){			$(this).prop('type', 'password');		})	});});
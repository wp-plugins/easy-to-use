/*Easy-to-use pluginwordpress.org/plugins/easy-to-use/*/jQuery(function($){	$('#loginform input#rememberme').prop('checked', true); // enable "remember me" by default	//$('input[type=password]').prop('type', 'text'); // unmask all the password inputs	$('input[type=password]').focus(function() {		$(this).prop('type', 'text');	});	$('input[type=password]').blur(function() {		$(this).prop('type', 'password');	});});
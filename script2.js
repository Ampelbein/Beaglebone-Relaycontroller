$(document).ready(function() {
	$('#relays input').click(function() {
		$('#relay').attr('value', $(this).attr('name'));
		$('form#relays').submit();
	});
});
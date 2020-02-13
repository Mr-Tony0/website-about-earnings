$('input[type="checkbox"]').on('change', function() {
	$('input[type="checkbox"]').not(this).prop('checked', false);
});
$('input[type="radio"]').on('change', function() {
	$('input[type="radio"]').not(this).prop('checked', false);
});

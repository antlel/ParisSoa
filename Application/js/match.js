$('#btn-type').change(function() {
	$("div[class^='type-'],div[class*=' type-']").addClass('hidden');
	$('.type-' + $(this).val()).removeClass('hidden');
});
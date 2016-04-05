$(function () {
			
	var $orders = $('#orders');

	$.ajax({
		type: 'GET',
		url: '/json-delivery.php',
		success: function(orders) {
			console.log('success', orders);
			$.each(orders, function(i, order) {
				$.each(order, function(i, suborder) {
					$orders.append('<li>name: ' + suborder.name + ' --- drink: ' + suborder.drink + '</li>');
				});
			});
		}
	});
});

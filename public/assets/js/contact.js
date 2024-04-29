$( document ).ready(function() {
	$('#cButton').click(function() {
		$.post( "assets/sendmail.php", $( "#cForm" ).serialize() ).done(function(data) {
			$.confirm({
				theme: 'supervan',
				title: 'Thank You!',
				content: 'I appreciate you reaching out to me. I will get back to you as soon as possible.',
				 buttons: {
					close: function () {
						
					}
				}
			});
		});
	});
});
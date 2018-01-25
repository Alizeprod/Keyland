$(document).ready(function() {

	$("#form").submit(function(){
		$.ajax({
			type: "POST",
			url: "send.php",
			data: $(this).serialize()
		}).done(function() {
			alert("Thank you!");

		});
		return false;
	});
});
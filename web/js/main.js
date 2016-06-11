$( document ).ready(function() {
    $(this).on("click","#sendMessage",function () {
    	var url = $(this).attr("value");
    	var userid = $("#userid").attr("value");
    	var conversation = $("#conversation").attr("value");
    	var text = $("#message").val();

    	alert(url);
			$.ajax({
	  		method: "GET",
		 	url: url,
		  	data: { text: text, userid: userid , conversation: conversation}
			})
			.done(function( msg ) {
			});

		/*TODO
			setInterval(function(){ refresh() }, 3000);
		*/
    });
});
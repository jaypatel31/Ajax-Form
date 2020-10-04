
let email="";
//EMAIL CHECK ON KEYPRESS

function typeCheck(event){
	let entered = event.target.value;
	console.log(event.target)
	if(entered==""){
		$(event.target).addClass('is-invalid');
	}
	else{
		$(event.target).addClass('is-valid');
		$(event.target).removeClass('is-invalid');
	}
}
function emailCheck(event){
	let entered = event.target.value;
	//console.log(entered);
	let matches = entered.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
	if(matches==null){
		email="not validate";
		$("#email").addClass('is-invalid');
	}
	else{
		email="validate";
		$("#email").addClass('is-valid');
		$("#email").removeClass('is-invalid');
	}
}

//AJAX QUERY AFTER VALIDATION

$("#my_form").submit(function(event){
	if(email="validate"){
		event.preventDefault(); //prevent default action 
		var post_url = $(this).attr("action"); //get form action url
		var form_data = $(this).serialize(); //Encode form elements for submission
		$("#email").removeClass('is-invalid');
		$("#name").removeClass('is-invalid');
		$("#org").removeClass('is-invalid');
		$("#event").removeClass('is-invalid');
		$("#spinner").show();
		$.post( post_url, form_data, function( response ) {
			console.log( response );
			if( response.success ){
				$("#my_form").html( response.success );
			}
			else{
				if( response.errorEmail ){
					$("#email").addClass('is-invalid');
				}
				else if(response.errorname){
					$("#name").addClass('is-invalid');
				}
				else if(response.errororg){
					$("#org").addClass('is-invalid');
				}
				else if(response.errorevent){
					$("#event").addClass('is-invalid');
				}
			}
			$("#spinner").hide();
		}, "json");
	}	
});
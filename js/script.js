$(document).ready(function(){
	$("#registration-form").validate({
		rules:{
			name:{required:!0,required:!0},
			username:{minlength:6,required:!0},
			password:{required:!0,minlength:6},
			confirm_password:{required:!0,minlength:6,equalTo:"#password"},
			email:{required:!0,email:!0},
			address:{minlength:10,required:!0},
			agree:"required"
			  },
		highlight:function(e){$(e).closest(".control-group").removeClass("success").addClass("error")},
		success:function(e){e.text("OK!").addClass("valid").closest(".control-group").removeClass("error").addClass("success")}})

});

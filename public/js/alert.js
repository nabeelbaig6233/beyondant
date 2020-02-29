function alert_danger(data){
	var alert ='<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fa fa-ban"></i> '+data+'</div>';
	$('body').append(alert);
	$('.alert').fadeIn('slow').delay(3000).fadeOut('slow');
}

function alert_warning(data){
	var alert ='<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fa fa-exclamation-triangle"></i> '+data+'</div>';
	$('body').append(alert);
	$('.alert').fadeIn('slow').delay(3000).fadeOut('slow');
}

function alert_info(data){
	var alert ='<div class="alert alert-info alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fa fa-info-circle"></i> '+data+'</div>';
	$('body').append(alert);
	$('.alert').fadeIn('slow').delay(3000).fadeOut('slow');
}

function alert_success(data){
	var alert ='<div class="alert  alert-success dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fa fa-check"></i> '+data+'</div>';
	$('body').append(alert);
	$('.alert').fadeIn('slow').delay(3000).fadeOut('slow');
}
function js_dele(data){
	swal({   title: "Your data will be deleted permanently!",
    text: "Are you sure to proceed?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, Remove My data!",
    cancelButtonText: "No, I am not sure!",
    closeOnConfirm: false,
    closeOnCancel: false },
    function(isConfirm){
        if (isConfirm)
    {
        swal("Removed Successfully!", data , "success");
        }
        else {
            swal("Hurray", "Account is not removed!", "error");
            } });
}

function js_success(data) {
	swal("Thankyou!", data , "success");
}

function js_update(data){
	swal("Updated Successfully!", data ,"success");
}

function js_error(data){
	swal("warning!", data ,"error");
}

function js_delete(data){
	swal("Deleted Successfully!", data ,"success");
}

function js_login(data){
	swal("Login Successfully!", data ,"success");
}

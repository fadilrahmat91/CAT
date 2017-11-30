

function load_menu_awal()
{
  $.get(url+"home/menu_awal/",function(e){
	  $("#t4_menu_awal").hide().html('').html(e).fadeIn();
  });
  
}

function loading(disini)
{
	$(disini).html("<div id='loading'><center><span class='fa fa-spinner'></span> Loading...</center></div>");
	//$(disini).append('<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>');
	
	
}

function loading_hide(disini)
{
	$(disini).find("#loading").remove();
	
}

function eksekusi_controller(method)
{
	loading(".content-wrapper");
	
	document.title=method;
	
	$.get(url+method,function(e){
				
		$(".content-wrapper").html(e);
		loading_hide(".content-wrapper");
		
	})
	
}


function loading_cool(disini)            
{
	
	$(disini).after('<div class="overlay" id="loading_cool"><i class="fa fa-refresh fa-spin"></i></div>');
	
}

function loading_cool_hide(disini)            
{
	
	$(disini).next(".overlay").remove();
	
}


function hanya_alphanumeric(input)
{
	

	$(input).keypress(function (e) {
		var regex = new RegExp("^[a-zA-Z0-9]+$");
		var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
		if (regex.test(str)) {
			return true;
		}

		e.preventDefault();
		return false;
	});
		
		
}





	





function simpanCCCeklist(){
	if (b==0){

	}else{
		var b= localStorage.getItem("terakhir");
		b--;
	}
	$.ajax({  
        url:"../../../ajax/oprCodingg.php?act=simpanCCCeklist",  
        method:"POST", 
        data:$('#formCeklist'+b).serialize(),  
        success:function(data)  
        {  
            alert(data);  
            // window.location="index.php";
        }  
	});	
}

function simpanCCCatatan(){
	if (b==0){

	}else{
		var b= localStorage.getItem("terakhir");
		b--;
	}
	$.ajax({  
		url:"../../../ajax/oprCodingg.php?act=simpanCCCatatan",  
		method:"POST", 
		data:$('#formCCCatatan'+b).serialize(),  
		success:function(data)  
		{  
			alert(data);  
			// window.location="index.php";
		}  
	});	

}

$(document).ready(function() {
	var b= localStorage.getItem("terakhir");

		  $('#'+b).trigger('click');
  			$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
				  
				var tabCount = navigation.find('li').length;
				var current = index+1;
				var percentDone = (current/tabCount) * 100;
				percent = percentDone.toFixed();
				
				$('#rootwizard').find('#progressBar').css({width:percentDone+'%'}).html(percent+'%');
				$('#rootwizard').find('.last').toggle(current >= tabCount);
				$('#rootwizard').find('.next').toggle(current < tabCount);
			}});
});
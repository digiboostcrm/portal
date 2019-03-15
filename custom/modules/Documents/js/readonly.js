//$("#created_by_name").prop("readonly", true);
var acounts = $("#accounts_contacts_c").val();
var portal_usr= $("#portal_user_c").val();
var acc_id= $("#account_id_c").val();
var cont_id= $("#contact_id_c").val();
var rec_id = $("input[name = record]").val();
console.log(acc_id);
if(portal_usr != '' && rec_id != '' ){
	$('#accounts_contacts_c').attr("disabled", true);
	$('#accounts_contacts_c').parent("div").find('button' , 'input').attr("disabled", true);
	$("#account_id_c").val('');
	//$("#detailpanel_0").closest('div').parent('div').hide();
	$("#contact_list1").parent('div').parent('div').hide();
	console.log("portal user have vlue ");
	
}
else if(acounts != '' && rec_id != '' ){
	$('#portal_user_c').attr("disabled", true);
	$('#portal_user_c').parent("div").find('button' , 'input').attr("disabled", true);
	$("#contact_id_c").val('');
	console.log("Accounts field have vlue ");
}

if(acc_id){
	
	$.ajax({
		method : 'POST',
		url: 'index.php?to_pdf=true&module=Documents&action=contact_account_logic',
		data: {acc_id : acc_id, id: rec_id},
		success: function(response) {
			if(response){
				
				console.log(response);
				var obj = jQuery.parseJSON( response );
				var cont = '<span id="contact_list1"></span>';
				$.each( obj, function(index, value) {
					 cont += '<b><a target="_blank" href="index.php?module=Contacts&return_module=Contacts&action=DetailView&record='+value.cont_id+'">'+value.first_name + ' '+ value.last_name+'</a></b><br/>';
				  
				});
				  //console.log(cont);
				
				$("#contact_list").parent('div').html(cont);
			}else{
				
			}
		
		}
	});
	
	
}


function assign_user(rec_id , assVal){
	
		var ass_id = $("#ass_id").val();
		var ass_name = $("#ass_name").val();
		if(assVal != 'assign'){
			ass_id = '';
		}
			
		$.ajax({
			method : 'POST',
			url: 'index.php?to_pdf=true&module=Documents&action=contact_account_logic',
			data: {user_id : ass_id, id: rec_id},
			success: function(response) {
				if(response){
					
				}else{
					
				}
				console.log(response);
			}
	});
	
}
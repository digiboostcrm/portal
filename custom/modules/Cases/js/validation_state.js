/* validation on bases of state*/
	function check_state(){
		var state = $("#state").val();
		if(state == 'Closed'){
			var date_start = $("#start_date").val();
			var date_end = $("#end_date").val();
			if(!date_start){
				alert ("Please Enter Start Date! ");
				return false;
			}else if( !date_end ){
				alert ("Please Enter End Date!");
				return false;
			}else{
				return true;
			}
		}
		else{
			return true;
		}
	}



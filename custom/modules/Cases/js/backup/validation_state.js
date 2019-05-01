/* valid$ation on bases of state*/
	function check_state(db_start_date , db_end_date , rec_id){
		var resultDate = '';
		var startDate = new Date($("#start_date").val());
		var endDate = new Date ($("#end_date").val());
		if(rec_id ){
			db_end_date = new Date(db_end_date);
			db_end_date.setHours(0,0,0,0);
			db_start_date = new Date(db_start_date);
			db_start_date.setHours(0,0,0,0);
			
			endDate.setHours(0,0,0,0);
			startDate.setHours(0,0,0,0);

			
			if(endDate == db_end_date){
				alert("db start same ");
			}
			
			
		}else{			
			if(startDate != 'Invalid Date'){			
				startDate.setHours(0,0,0,0);
			}
			if(endDate != 'Invalid Date'){
				endDate.setHours(0,0,0,0);
			}
		}
		
		var state = $("#state").val();		
		if(state == 'Closed'){
			/*
			var date_start = $("#start_date").val();
			var date_end = $("#end_date").val();
			*/
			if(startDate == 'Invalid Date'){
				alert ("Start Date Must Be Filled! ");
				return false;
			}else if( endDate == 'Invalid Date'){
				alert ("End Date Must Be Filled!");
			}else{
				var resultDate = date_validation(startDate , endDate);
				if(resultDate == true){
					return true;
				}
				
			}
		}
		else{
			if(startDate == 'Invalid Date' && endDate == 'Invalid Date'){
				return true;
			}
			else if(startDate > db_start_date || startDate < db_start_date){
				resultDate = date_validation(startDate , endDate);
				if(resultDate == true){
					return true;
				}
				
			}else if(endDate > db_end_date || endDate < db_end_date && endDate){
				resultDate = date_validation(startDate , endDate);
				if(resultDate == true){
					return true;
				}
				
			}else if(db_end_date == 'Invalid Date' && endDate != 'Invalid Date'){
				resultDate = date_validation(startDate, endDate );
				if(resultDate == true){
					return true;
				}
			}else{
				
				return true;
			}
			
		}
	}
	
	
	function date_validation(startDate , endDate){
		
		var todayDate = new Date();
		todayDate.setHours(0,0,0,0);

		if(startDate != 'Invalid Date' && endDate != 'Invalid Date'){
			
				/*
			if(startDate < todayDate && state == 'create')
				{
					alert('Start Date Must Be Today OR Future Date !! ');
					return false;
				}
				else 
					*/
				if(startDate > endDate){
					alert("Start Date Must Be Less Than End Date! ");
					return false;
					
				}
				else if(startDate <= endDate)
				{
					var _text = $.trim(tinyMCE.get('update_text').getContent());
					if(_text && _text !== ""){
						return true;
					}else{
						alert('Please Update Text Must Be Filled !! ');
					}
				}
		}else if(startDate != 'Invalid Date' && endDate == 'Invalid Date'){
			return true;
			/*
			if(startDate <= todayDate)
				{
					alert('Start Date Must Be Today OR Future Date !! ');
					return false;
				}
				*/
		}else if(endDate != 'Invalid Date' && startDate == 'Invalid Date'){
					alert('Start Date Must Be Filled! ');
					return false;
			
				}else{
					return true;
				}
		
		
	}
	

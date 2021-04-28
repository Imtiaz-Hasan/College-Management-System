function get(id){
			return document.getElementById(id);
		}
		
		
  
		function validate(){
			refresh();
			var hasError=false;
			var name= get("name");
			var date= get("date");
            var description= get("description");
			
			if(name.value == ""){
				get("err_name").innerHTML = "*Title required";
				get("err_name").style.color = "red";
				hasError = true;
			}
			if(get("date").options.selectedIndex == 0){
				get("err_date").innerHTML = "*Date Required";
				get("err_date").style.color = "red";
				hasError = true;
			}
			if(description.value == ""){
				get("err_description").innerHTML = "*Description Required";
				get("err_description").style.color = "red";
				hasError = true;
			}
			
			
			return !hasError;
				
		}
		
		function refresh(){
			get("err_name").innerHTML = "";
            get("err_date").innerHTML = "";
            get("err_description").innerHTML = ""; 
			
			
			
			
		}
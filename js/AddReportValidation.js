function get(id){
			return document.getElementById(id);
		}
		
		
  
		function validate(){
			refresh();
			var hasError=false;
			var snumber= get("snumber");
			var tnumber= get("tnumber");
			var pass= get("pass");
			var fail= get("fail");
			var deprt= get("deprt");
			var date= get("date");
			
			if(snumber.value == ""){
				get("err_snumber").innerHTML = "*Student number required";
				get("err_snumber").style.color = "red";
				hasError = true;
			}
			
			
			if(tnumber.value == ""){
				get("err_tnumber").innerHTML = "*Teacher number required";
				get("err_tnumber").style.color = "red";
				hasError = true;
			}
			
			if(get("pass").value == ""){
				get("err_pass").innerHTML = "*Students Passed";
				get("err_pass").style.color = "red";
				hasError = true;
			}
			
			if(get("fail").value == ""){
				get("err_fail").innerHTML = "*Student failed";
				get("err_fail").style.color = "red";
				hasError = true;
			}
			
			if(get("deprt").options.selectedIndex == 0){
				get("err_deprt").innerHTML = "*Department Required";
				get("err_deprt").style.color = "red";
				hasError = true;
			}

            if(get("date").options.selectedIndex == 0){
				get("err_date").innerHTML = "*Date Required";
				get("err_date").style.color = "red";
				hasError = true;
			}
			
			
			
			
			return !hasError;
				
		}
		
		function refresh(){
			get("err_snumber").innerHTML = "";
			get("err_tnumber").innerHTML = "";
			get("err_pass").innerHTML = "";
			get("err_fail").innerHTML = "";
			get("err_deprt").innerHTML = "";
			get("err_date").innerHTML = "";
			
			
			
		}
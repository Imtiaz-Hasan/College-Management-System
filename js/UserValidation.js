function get(id){
			return document.getElementById(id);
		}
		function validate(){
			refresh();
			var hasError=false;
			var username= get("username");
			if(username.value == ""){
				get("err_uname").innerHTML = "*Username Required";
				get("err_uname").style.color = "red";
				hasError = true;
			}
			if(get("password").value == ""){
				get("err_pass").innerHTML = "*Password Required";
				get("err_pass").style.color = "red";
				hasError = true;
			}
			
			return !hasError;
				
		}
		function refresh(){
			get("err_uname").innerHTML = "";
			get("err_pass").innerHTML = "";
			
			
		}
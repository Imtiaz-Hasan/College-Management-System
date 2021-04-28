function get(id){
			return document.getElementById(id);
		}
		
		
  
		function validate(){
			refresh();
			var hasError=false;
			var name= get("name");
			var username= get("username");
			var email= get("email");
			var pass= get("password");
			var address= get("address");
			var gender= get("gender");
			if(name.value == ""){
				get("err_name").innerHTML = "*Name Required";
				get("err_name").style.color = "red";
				hasError = true;
			}
			else if(name.value.length<6){
				get("err_name").innerHTML = "*Name more then 6 charecters required";
				get("err_name").style.color = "red";
				hasError = true;
			}
			
			if(username.value == ""){
				get("err_uname").innerHTML = "*Username Required";
				get("err_uname").style.color = "red";
				hasError = true;
			}
			
			else if(username.value.length<6){
				get("err_uname").innerHTML = "*Username more then 6 charecters required";
				get("err_uname").style.color = "red";
				hasError = true;
			}
			
			if(get("password").value == ""){
				get("err_pass").innerHTML = "*Password Required";
				get("err_pass").style.color = "red";
				hasError = true;
			}
			 else if(pass.value.length<8){
				get("err_pass").innerHTML = "*Password must be 8 charcters long";
				get("err_pass").style.color = "red";
				hasError = true;
			}
			
			else if(!SpecialChar(pass.value)){
				get("err_pass").innerHTML = "*Password must have '-' or '.' ";
				get("err_pass").style.color = "red";
				hasError = true;
			}
			
			else if(Space(pass.value)){
				get("err_pass").innerHTML = "*Password must not have any space";
				get("err_pass").style.color = "red";
				hasError = true;
			}
			
			
			if(get("email").value == ""){
				get("err_mail").innerHTML = "*Email Required";
				get("err_mail").style.color = "red";
				hasError = true;
			}
			else if(!AtTheRate(mail.value)){
				get("err_mail").innerHTML = "*'@' required";
				get("err_mail").style.color = "red";
				hasError = true;
			}
			
			if(get("address").value == ""){
				get("err_address").innerHTML = "*Address Required";
				get("err_address").style.color = "red";
				hasError = true;
			}
			
			if(get("gender").value == ""){
				get("err_gender").innerHTML = "*Gender Required";
				get("err_gender").style.color = "red";
				hasError = true;
			}
			
			
			
			return !hasError;
				
		}
			
		function refresh(){
			get("err_name").innerHTML = "";
			get("err_uname").innerHTML = "";
			get("err_pass").innerHTML = "";
			get("err_mail").innerHTML = "";
            get("err_address").innerHTML = "";
			get("err_gender").innerHTML = "";
			
			
		}
		
		function SpecialChar(h) {
       if(h.indexOf('-') >= 0 ||h.indexOf(".") >=0){
        return true;
        }
        else{
        return false;
        }
       }
  
       function AtTheRate(h) {
       return h.indexOf('@') >= 0;
       }
        function Space(h) {
       return h.indexOf(' ') >= 0;
       }
		
		function checkUsername(username){
		//alert(username.value);
		var name = username.value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				var rs = this.responseText;
				if(rs == "true"){
					document.getElementById("err_uname").innerHTML = "";
				}
				else document.getElementById("err_uname").innerHTML = "Not a valid Username";
			}
		};
		xhttp.open("GET","checkusername.php?username="+name,true);
		xhttp.send();
	}
	
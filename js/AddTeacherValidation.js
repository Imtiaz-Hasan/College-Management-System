function get(id){
			return document.getElementById(id);
		}
		
		
  
		function validate(){
			refresh();
			var hasError=false;
			var name= get("name");
			var uname= get("uname");
			var pass= get("pass");
			var cpass= get("cpass");
			var deprt= get("deprt");
			var mail= get("mail");
			var phone= get("phone");
            var date= get("date");
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
			
			if(uname.value == ""){
				get("err_uname").innerHTML = "*Username Required";
				get("err_uname").style.color = "red";
				hasError = true;
			}
			else if(uname.value.length<6){
				get("err_uname").innerHTML = "*User name more then 6 charecters required";
				get("err_uname").style.color = "red";
				hasError = true;
			}
			
			if(get("pass").value == ""){
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
			
			
			if(get("cpass").value == ""){
				get("err_cpass").innerHTML = "*Password Not Matched";
				get("err_cpass").style.color = "red";
				hasError = true;
			}
			
			
			if(get("mail").value == ""){
				get("err_mail").innerHTML = "*Email Required";
				get("err_mail").style.color = "red";
				hasError = true;
			}
			else if(!AtTheRate(mail.value)){
				get("err_mail").innerHTML = "*'@' required";
				get("err_mail").style.color = "red";
				hasError = true;
			}
			
			
			if(get("phone").value == ""){
				get("err_phone").innerHTML = "*Phone Required";
				get("err_phone").style.color = "red";
				hasError = true;
			}
			/*else if(phone.value.length<11){
				get("err_phone").innerHTML = "*11 numbers required";
				get("err_phone").style.color = "red";
				hasError = true;
			}*/
			
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
			if((!get("male").checked) && (!get("female").checked)){
				get("err_gender").innerHTML = "*Gender Required";
				get("err_gender").style.color = "red";
				hasError = true;
			}
			
			return !hasError;
				
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
		
		function refresh(){
			get("err_name").innerHTML = "";
			get("err_uname").innerHTML = "";
			get("err_pass").innerHTML = "";
			get("err_cpass").innerHTML = "";
			get("err_deprt").innerHTML = "";
			get("err_mail").innerHTML = "";
			get("err_phone").innerHTML = "";
            get("err_date").innerHTML = "";
			get("err_gender").innerHTML = "";
			
			
		}
		
		function checkUsername(uname){
		//alert(uname.value);
		var name = uname.value;
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
		xhttp.open("GET","checkTeacherUname.php?uname="+name,true);
		xhttp.send();
	}
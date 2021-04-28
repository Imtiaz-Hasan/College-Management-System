

function get(id)
        {
			return document.getElementById(id);
		}
		function validate()
		{
			refresh();
			var hasError=false;
			
			var uname= get("uname");
			
			if(uname.value == "")
			{
				get("err_uname").innerHTML = "*Username Required";
				get("err_uname").style.color = "blue";
				hasError = true;
			}
			if(get("pass").value == "")
			{
				get("err_pass").innerHTML = "*Password Required";
				get("err_pass").style.color = "blue";
				hasError = true;
			}
			
			return !hasError;
				
		}
		function refresh(){
			get("err_uname").innerHTML = "";
			get("err_pass").innerHTML = "";
			
			
		}
		function checkUsername(uname){
	
		var name = uname.value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				var rs = this.responseText;
				if(rs == "true"){
					document.getElementById("err_uname").innerHTML = "Not a valid username";
				}
				else document.getElementById("err_uname").innerHTML = "";
			}
		};
		xhttp.open("GET","checkusername_tr.php?uname="+name,true);
		xhttp.send();
	}
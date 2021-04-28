

function get(id)
		{
			return document.getElementById(id);
		}
		function validate()
		{
			refresh();
			var hasError=false;
			
			var department= get("department");
			var subject= get("subject");
			var section= get("section");
			var title= get("title");
			var description= get("description");
			var date= get("date");
			
			
			if(department.value == "")
			{
				get("err_department").innerHTML = "*Selection Must";
				get("err_department").style.color = "orange";
				hasError = true;
			}
			if(get("subject").options.selectedIndex == 0)
			{
				get("err_subject").innerHTML = "*Selection Must";
				get("err_subject").style.color = "orange";
				hasError = true;
			}
			
			if((!get("A").checked) && (!get("B").checked)){
				get("err_section").innerHTML = "*Selection Must";
				get("err_section").style.color = "orange";
				hasError = true;
			}
			
			if(get("title").value == "")
			{
				get("err_title").innerHTML = "*Selection Must";
				get("err_title").style.color = "orange";
				hasError = true;
			}
			
			if(description.value == "")
			{
				get("err_description").innerHTML = "*Selection Must";
				get("err_description").style.color = "orange";
				hasError = true;
			}
			
			if(get("date").options.selectedIndex == 0)
			{
				get("err_date").innerHTML = "*Selection Must";
				get("err_date").style.color = "orange";
				hasError = true;
			}
			
			return !hasError;
				
		}
		function refresh()
		{
			get("err_department").innerHTML = "";
			get("err_subject").innerHTML = "";
			get("err_section").innerHTML = "";
			get("err_title").innerHTML = "";
			get("err_description").innerHTML = "";
			get("err_date").innerHTML = "";
			
			
		}
		
		function checkTitle(title)
		{
		var name = title.value;
		var xhttp = new XMLHttpRequest();
		
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				var rs = this.responseText;
				if(rs == "true")
				{
					document.getElementById("err_title").innerHTML = "";
				}
				else document.getElementById("err_title").innerHTML = "Not a valid Title";
			}
		};
		xhttp.open("GET","checknoticetitle_tr.php?title="+name,true);
		xhttp.send();
	}
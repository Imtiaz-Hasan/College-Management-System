

function get(id)
		{
			return document.getElementById(id);
		}
		function validate()
		{
			refresh();
			var hasError=false;
			
			
			
			
			if(get("date").options.selectedIndex == 0)
			{
				get("err_date").innerHTML = "*Selection Must";
				get("err_date").style.color = "orange";
				hasError = true;
			}
			
			
			var department= get("department");
			
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
			
			if(get("section").value == "")
			{
				get("err_section").innerHTML = "*Selection Must";
				get("err_section").style.color = "orange";
				hasError = true;
			}
			
			if(get("topic").value == "")
			{
				get("err_topic").innerHTML = "*Selection Must";
				get("err_topic").style.color = "orange";
				hasError = true;
			}
			
			if(get("description").value == "")
			{
				get("err_description").innerHTML = "*Selection Must";
				get("err_description").style.color = "orange";
				hasError = true;
			}
			
			
			
			return !hasError;
				
		}
		function refresh()
		
		{
			get("err_date").innerHTML = "";
			get("err_department").innerHTML = "";
			get("err_subject").innerHTML = "";
			get("err_section").innerHTML = "";
			get("err_topic").innerHTML = "";
			get("err_description").innerHTML = "";
			
			
			
			
		}
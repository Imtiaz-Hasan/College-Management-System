

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
			var passed= get("passed");
			var failed= get("failed");
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
			
			if(get("section").value == "")
			{
				get("err_section").innerHTML = "*Selection Must";
				get("err_section").style.color = "orange";
				hasError = true;
			}
			
			if(get("passed").value == "")
			{
				get("err_passed").innerHTML = "*Selection Must";
				get("err_passed").style.color = "orange";
				hasError = true;
			}
			
			if(get("failed").value == "")
			{
				get("err_failed").innerHTML = "*Selection Must";
				get("err_failed").style.color = "orange";
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
			get("err_passed").innerHTML = "";
			get("err_failed").innerHTML = "";
			get("err_date").innerHTML = "";
			
		}
		
		
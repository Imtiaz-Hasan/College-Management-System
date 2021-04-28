

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
			var present= get("present");
			var absent= get("absent");
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
			
			if(get("present").value == "")
			{
				get("err_present").innerHTML = "*Selection Must";
				get("err_present").style.color = "orange";
				hasError = true;
			}
			
			if(absent.value == "")
			{
				get("err_absent").innerHTML = "*Selection Must";
				get("err_absent").style.color = "orange";
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
			get("err_present").innerHTML = "";
			get("err_absent").innerHTML = "";
			get("err_date").innerHTML = "";
			
			
		}
		
		
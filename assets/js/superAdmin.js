function showEmployeeList(event, element)
{
  if(element.value == 'executive')
  {
    $('#managerList').hide();
	$('#executiveList').show();	 
    $("#managerList").prop("selectedIndex", 0);
  }
  else if(element.value == 'manager')
  {
	$('#executiveList').hide();
	$('#managerList').show();  
    $("#executiveList").prop("selectedIndex", 0); 
  }
}


function submitForm(event)
 {
   if(document.getElementById('countries').value === '-----------------------------------------------' 
   {
     alert("Select your country");
	 event.preventDefault();	 
   }  
 }
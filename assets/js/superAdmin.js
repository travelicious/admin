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
      || document.getElementById('countries').value === 'Select Country' 
	  || document.getElementById('domain').value === 'Select Domain' 
	  || document.getElementById('source').value === 'Select Source' 
	  || document.getElementById('hotel_category').value === 'Select Hotel Category')
   {
     event.preventDefault();	 
   }  
 }
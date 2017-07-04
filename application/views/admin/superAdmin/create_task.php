<?php
if(!empty($message))
{
  echo $message;	
}
?>

   <!-- Main content -->
   
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo base_url('admin/superAdmin/create-task'); ?>" method="post"> 
          
<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label"></label>
<div class="col-xs-4">
<input type="hidden" name="id" class="form-control" value="<?php echo (!empty($id)?$id:''); ?>"/>
</div>
</div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Name</label>
<div class="col-xs-4">
<input type="text" name="name" class="form-control" required="true" value="<?php echo (!empty($name)?$name:''); ?>"/>
</div>
</div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Email</label>
<div class="col-xs-4">
<input type="email" name="email" class="form-control" required="true" value="<?php echo (!empty($email)?$email:''); ?>"/>
</div></div>


<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Country</label>
<div class="col-xs-4">
  <select name="country" id="countries">
  </select>
</div>
</div>

<script type="text/javascript">

var countries = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", 
                    "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", 
					"Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", 
					"Denmark", "Djibouti", "Dominica", "Dominican Republic", 
					"East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", 
					"Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", 
					"Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", 
					"Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", 
					"Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", 
					"Jamaica", "Japan", "Jordan", 
					"Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", 
					"Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", 
					"Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", 
					"Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", 
					"Oman", 
					"Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", 
					"Qatar", 
					"Reunion", "Romania", "Russian Federation", "Rwanda", 
					"Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", 
					"Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", 
					"Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", 
					"Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", 
					"Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"];
					
var mainCountries = ['Afghanistan', 'Australia', 'Brazil', 'China', 'Canada', 
                     'India', 'Russia', 'South Africa', 'Turkey', 'United States of America'];

var i=0;

for(i=0; i<mainCountries.length; i++)
{
  var optionElement = document.createElement('option');	
  var countrySelectElement = document.getElementById('countries');
  optionElement.textContent = mainCountries[i];
  optionElement.value = mainCountries[i].toLowerCase();
  countrySelectElement.appendChild(optionElement);
}

i=0;
var optionElement = document.createElement('option');
optionElement.textContent = '-----------------------------------------------';
document.getElementById('countries').appendChild(optionElement);					

				
for(i=0; i<countries.length; i++)
{
  var optionElement = document.createElement('option');	
  var countrySelectElement = document.getElementById('countries');
  optionElement.textContent = countries[i];
  optionElement.value = countries[i].toLowerCase();
  
  <?php
    if(!empty($country))
	{
	  //echo "<script>";
	  echo "if('$country' == countries[i].toLowerCase())";
	  echo "{";
	  echo "  optionElement.selected = true;";
	  echo "}";
	  //echo "</script>";
	}
  ?>	
	countrySelectElement.appendChild(optionElement);
}	


</script>


<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Phone</label>
<div class="col-xs-4">
<input type="text" name="phone" class="form-control" required="true" value="<?php echo (!empty($phone)?$phone:''); ?>"/>
</div>
</div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Destination</label>
<div class="col-xs-4">
<input type="text" name="destination" class="form-control" required="true" value="<?php echo (!empty($destination)?$destination:''); ?>"/>
</div>
</div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Arrival Date</label>
<div class="col-xs-4">
<input type="text" data-provide="datepicker" data-data-autoclose="true" data-date-format="yyyy-mm-dd hh:mm:ss" name="arrival_date" class="form-control" required="true" value="<?php echo (!empty($arrival_date)?$arrival_date:''); ?>"/>
</div>
</div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Duration</label>
<div class="col-xs-4">
<input type="text" name="duration" class="form-control" required="true" value="<?php echo (!empty($duration)?$duration:''); ?>"/>
</div>
</div>


<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Adults</label>
<div class="col-xs-4">
<input type="text" name="no_of_adults" class="form-control" required="true" value="<?php echo (!empty($no_of_adults)?$no_of_adults:''); ?>"/>
</div>
</div>


<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Kids</label>
<div class="col-xs-4">
<input type="text" name="no_of_kids" class="form-control" required="true" value="<?php echo (!empty($no_of_kids)?$no_of_kids:''); ?>"/>
</div>
</div>


<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Hotel Category</label>
<div class="col-xs-4">
<select name="hotel_category">
 
 <option value="3Star" <?php echo (!empty($hotel_category) && $hotel_category == '3Star'?'selected':null); ?> >3 Star</option>
 <option value="4Star" <?php echo (!empty($hotel_category) && $hotel_category == '4Star'?'selected':null); ?> >4 Star</option>
 <option value="5Star" <?php echo (!empty($hotel_category) && $hotel_category == '5Star'?'selected':null); ?> >5 Star</option>

 </select>
</div>
</div>

<div class="form-group row"> 
<label for="domain" class="col-xs-1 col-form-label">Domain</label>
<div class="col-xs-4">
<select name="domain" id="domain">
</select>
</div>
</div>

<script type="text/javascript">
var domain = ['agratourbookings.com', 'goldentriangleindiapackage.com', 'grouptoursofindia.com', 'holidaystonorthindia.com', 
              'holidaystosouthindia.com', 'honeymoonindiatrip.com', 'indiatourbookings.com', 'jaipurtourbookings.com',  
              'keralaindiatrip.com', 'luxuryindiatrain.com', 'luxuryindiatravel.in', 'luxuryrajasthantrip.com',  
			  'rajasthanindiatrip.com', 'rajasthanindiatrip.us', 'tajmahalindiatrip.com', 'traveliciousholiday.com', 
			  'traveliciousholidays.in'];
			  
i=0;
for(i=0; i<domain.length; i++)
{
  var optionElement = document.createElement('option');	
  optionElement.textContent = domain[i];
  optionElement.value = domain[i].toLowerCase();
 
   <?php
    if(!empty($domain))
	{
	  //echo "<script>";
	  echo "if('$domain' == domain[i].toLowerCase())";
	  echo "{";
	  echo "  optionElement.selected = true;";
	  echo "}";
	  //echo "</script>";
	}
   ?>	
   document.getElementById('domain').appendChild(optionElement);
}
	
</script>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Lead Source</label>
<div class="col-xs-4">
<select name="source" class="form-control" required="true" value="<?php echo (!empty($source)?$source:''); ?>"/>
  <option>Please Select Source</option>
  <option value="adword" <?php echo (!empty($source) && ($source == 'adword')?'selected':null); ?> >Adword</option>
  <option value="facebook" <?php echo (!empty($source) && ($source == 'facebook')?'selected':null); ?> >Facebook</option>
</select>
</div>
</div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Requirement</label>
<div class="col-xs-4">
<textarea name="customer_requirement" rows="10" class="form-control"> <?php echo (!empty($customer_requirement)?$customer_requirement:''); ?> </textarea>
</div>
</div>


<?php
  if(empty($edit_task))
  {
?>
<h5 style="color:red">Tick Checkbox If You Want To Assigned Task To Employee OR Untick Otherwise</h5>
<input type="checkbox" name="assign" value="true"/>
<label>Assign to</label>&nbsp;
<input type="radio" name="assignTo" value="manager" onchange="showEmployeeList(event, this)"/>&nbsp;
Manager
&nbsp;<input type ="radio" name="assignTo" value="executive" onchange="showEmployeeList(event, this)"/>&nbsp;
Executive
<br><br>

<select name="managerList" id="managerList" style="display:none">
   <option value="">Select Manager</option>
 <?php 
   if(!empty($managerList))
   {
	 foreach($managerList as $manager)
	 {
    ?>
	   <option value="<?php echo $manager->id ?>"> <?php echo $manager->name .' ('.$manager->email.')'; ?> </option>   
    <?php  	
	 }	 
   }	   
 ?>
</select>

<select id="executiveList" name="executiveList" style="display:none">
   <option value="">Select executive</option>
 <?php 
   if(!empty($executiveList))
   {
	 foreach($executiveList as $executive)
	 {
    ?>
	   <option value="<?php echo $executive->id ?>" ><?php echo $executive->name.' ('.$executive->email.')' ?></option>   
    <?php  	
	 }	 
   }	   
 ?>
</select>
<?php
  }
?>

<input type="submit" class="btn btn-primary" name="Create Task" value="Create Task"/>
</form>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

<script src="<?php echo base_url('assets/js/superAdmin.js');?> "> </script>









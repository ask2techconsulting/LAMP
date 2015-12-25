<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script type="text/javascript" src="//platform.linkedin.com/in.js">
	api_key:   75stk8lceoawcb
	onLoad:    onLinkedInLoad
	authorize: false
	lang:      en_US
  </script>
  <script src="alljs.js"></script>
</head>
<body>
<div class="container">
	<h2>Online Job Application</h2>
	<div class="panel panel-default">
		<div class="panel-heading">Apply using Social Network</div>
		<div class="panel-body">
			<button class="btn btn-primary" onclick="myFacebookLogin()"><span class="fa fa-facebook"></span> Apply with Facebook</button>
			<br><br>
			<script type="in/Login"></script>
		</div>
		
		<div class="panel-heading">Applicant's Details</div>
		<div class="panel-body">
			<div class="panel panel-default">
				<div class="panel-heading">Personal Information</div>
				<div class="panel-body">
					  <form role="form" action="summary.php" method="POST">
						<div class="form-group">
						  <label for="fname">First Name:*</label>
						  <input required type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name"> 	
						</div>
						<div class="form-group">
						  <label for="lname">Last Name:*</label>
						  <input required type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name">
						</div>
						<div class="form-group">
						  <label for="email">Email:*</label>
						  <input required type="email" class="form-control" id="email" name="email" placeholder="Enter email">
						</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Address</div>
				<div class="panel-body">
						<div class="form-group">
						  <label for="addr1">Street Address 1:*</label>
						  <input required type="text" class="form-control" id="addr1" name="addr1">
						</div>
						<div class="form-group">
						  <label for="addr2">Street Address 2:</label>
						  <input type="text" class="form-control" id="addr2" name="addr2">
						</div>
						<div class="form-group">
						  <label for="Suburb">Suburb:*</label>
						  <input required type="text" class="form-control" id="suburb" name="suburb">
						</div>
						<div class="form-group">
						  <label for="postcode">Postal Code:*</label>
						  <input required type="text" class="form-control" id="postcode" name="postcode">
						</div>						
						<div class="form-group">
						  <label for="country">Country:*</label>
						  <select required class="form-control" id="country" name="country">
							<option selected >Australia</option>
							<option>New Zealand</option>
							<option>United Kingdom</option>
							<option>United States</option>
							<option>Canada</option>
							<option>-------</option>
							<option>Afghanistan</option>
							<option>Albania</option>
							<option>Algeria</option>
							<option>American Samoa</option>
							<option>Andorra</option>
							<option>Angola</option>
							<option>Anguilla</option>
							<option>Antarctica</option>
							<option>Antigua and Barbuda</option>
							<option>Argentina</option>
							<option>Armenia</option>
							<option>Aruba</option>
							<option>Austria</option>
							<option>Azerbaijan</option>
							<option>Bahamas</option>
							<option>Bahrain</option>
							<option>Bangladesh</option>
							<option>Barbados</option>
							<option>Belarus</option>
							<option>Belgium</option>
							<option>Belize</option>
							<option>Benin</option>
							<option>Bermuda</option>
							<option>Bhutan</option>
							<option>Bolivia</option>
							<option>Bosnia and Herzegovina</option>
							<option>Botswana</option>
							<option>Bouvet Island</option>
							<option>Brazil</option>
							<option>British Indian Ocean Territory</option>
							<option>Brunei Darussalam</option>
							<option>Bulgaria</option>
							<option>Burkina Faso</option>
							<option>Burundi</option>
							<option>Cambodia</option>
							<option>Cameroon</option>
							<option>Cape Verde</option>
							<option>Cayman Islands</option>
							<option>Central African Republic</option>
							<option>Chad</option>
							<option>Chile</option>
							<option>China</option>
							<option>Christmas Island</option>
							<option>Cocos Islands</option>
							<option>Colombia</option>
							<option>Comoros</option>
							<option>Congo</option>
							<option>Congo, Democratic Republic of the</option>
							<option>Cook Islands</option>
							<option>Costa Rica</option>
							<option>Cote d'Ivoire</option>
							<option>Croatia</option>
							<option>Cuba</option>
							<option>Cyprus</option>
							<option>Czech Republic</option>
							<option>Denmark</option>
							<option>Djibouti</option>
							<option>Dominica</option>
							<option>Dominican Republic</option>
							<option>Ecuador</option>
							<option>Egypt</option>
							<option>El Salvador</option>
							<option>Equatorial Guinea</option>
							<option>Eritrea</option>
							<option>Estonia</option>
							<option>Ethiopia</option>
							<option>Falkland Islands</option>
							<option>Faroe Islands</option>
							<option>Fiji</option>
							<option>Finland</option>
							<option>France</option>
							<option>French Guiana</option>
							<option>French Polynesia</option>
							<option>Gabon</option>
							<option>Gambia</option>
							<option>Georgia</option>
							<option>Germany</option>
							<option>Ghana</option>
							<option>Gibraltar</option>
							<option>Greece</option>
							<option>Greenland</option>
							<option>Grenada</option>
							<option>Guadeloupe</option>
							<option>Guam</option>
							<option>Guatemala</option>
							<option>Guinea</option>
							<option>Guinea-Bissau</option>
							<option>Guyana</option>
							<option>Haiti</option>
							<option>Heard Island and McDonald Islands</option>
							<option>Honduras</option>
							<option>Hong Kong</option>
							<option>Hungary</option>
							<option>Iceland</option>
							<option>India</option>
							<option>Indonesia</option>
							<option>Iran</option>
							<option>Iraq</option>
							<option>Ireland</option>
							<option>Israel</option>
							<option>Italy</option>
							<option>Jamaica</option>
							<option>Japan</option>
							<option>Jordan</option>
							<option>Kazakhstan</option>
							<option>Kenya</option>
							<option>Kiribati</option>
							<option>Kuwait</option>
							<option>Kyrgyzstan</option>
							<option>Laos</option>
							<option>Latvia</option>
							<option>Lebanon</option>
							<option>Lesotho</option>
							<option>Liberia</option>
							<option>Libya</option>
							<option>Liechtenstein</option>
							<option>Lithuania</option>
							<option>Luxembourg</option>
							<option>Macao</option>
							<option>Madagascar</option>
							<option>Malawi</option>
							<option>Malaysia</option>
							<option>Maldives</option>
							<option>Mali</option>
							<option>Malta</option>
							<option>Marshall Islands</option>
							<option>Martinique</option>
							<option>Mauritania</option>
							<option>Mauritius</option>
							<option>Mayotte</option>
							<option>Mexico</option>
							<option>Micronesia</option>
							<option>Moldova</option>
							<option>Monaco</option>
							<option>Mongolia</option>
							<option>Montenegro</option>
							<option>Montserrat</option>
							<option>Morocco</option>
							<option>Mozambique</option>
							<option>Myanmar</option>
							<option>Namibia</option>
							<option>Nauru</option>
							<option>Nepal</option>
							<option>Netherlands</option>
							<option>Netherlands Antilles</option>
							<option>New Caledonia</option>
							<option>Nicaragua</option>
							<option>Niger</option>
							<option>Nigeria</option>
							<option>Norfolk Island</option>
							<option>North Korea</option>
							<option>Norway</option>
							<option>Oman</option>
							<option>Pakistan</option>
							<option>Palau</option>
							<option>Palestinian Territory</option>
							<option>Panama</option>
							<option>Papua New Guinea</option>
							<option>Paraguay</option>
							<option>Peru</option>
							<option>Philippines</option>
							<option>Pitcairn</option>
							<option>Poland</option>
							<option>Portugal</option>
							<option>Puerto Rico</option>
							<option>Qatar</option>
							<option>Romania</option>
							<option>Russian Federation</option>
							<option>Rwanda</option>
							<option>Saint Helena</option>
							<option>Saint Kitts and Nevis</option>
							<option>Saint Lucia</option>
							<option>Saint Pierre and Miquelon</option>
							<option>Saint Vincent and the Grenadines</option>
							<option>Samoa</option>
							<option>San Marino</option>
							<option>Sao Tome and Principe</option>
							<option>Saudi Arabia</option>
							<option>Senegal</option>
							<option>Serbia</option>
							<option>Seychelles</option>
							<option>Sierra Leone</option>
							<option>Singapore</option>
							<option>Slovakia</option>
							<option>Slovenia</option>
							<option>Solomon Islands</option>
							<option>Somalia</option>
							<option>South Africa</option>
							<option>South Georgia</option>
							<option>South Korea</option>
							<option>Spain</option>
							<option>Sri Lanka</option>
							<option>Sudan</option>
							<option>Suriname</option>
							<option>Svalbard and Jan Mayen</option>
							<option>Swaziland</option>
							<option>Sweden</option>
							<option>Switzerland</option>
							<option>Syrian Arab Republic</option>
							<option>Taiwan</option>
							<option>Tajikistan</option>
							<option>Tanzania</option>
							<option>Thailand</option>
							<option>The Former Yugoslav Republic of Macedonia</option>
							<option>Timor-Leste</option>
							<option>Togo</option>
							<option>Tokelau</option>
							<option>Tonga</option>
							<option>Trinidad and Tobago</option>
							<option>Tunisia</option>
							<option>Turkey</option>
							<option>Turkmenistan</option>
							<option>Tuvalu</option>
							<option>Uganda</option>
							<option>Ukraine</option>
							<option>United Arab Emirates</option>
							<option>United States Minor Outlying Islands</option>
							<option>Uruguay</option>
							<option>Uzbekistan</option>
							<option>Vanuatu</option>
							<option>Vatican City</option>
							<option>Venezuela</option>
							<option>Vietnam</option>
							<option>Virgin Islands, British</option>
							<option>Virgin Islands, U.S.</option>
							<option>Wallis and Futuna</option>
							<option>Western Sahara</option>
							<option>Yemen</option>
							<option>Zambia</option>
							<option>Zimbabwe</option>
						  </select>
						</div>
				</div>	  
			</div>
				<div class="form-group">
				</div>
				<input type="hidden" name="fb_id" id="fb_id">
				<input type="hidden" name="in_id" id="in_id">
				<button type="submit" class="btn btn-primary">Submit Application</button>
				<button type="reset" class="btn btn-default">Reset Form</button>
			  </form>			
		</div>
		</div>
	</div>	
</div>	
</body>
</html>

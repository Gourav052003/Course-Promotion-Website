<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v10 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="country_state_city_dropdown.js"></script> 
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="index.php" method="post" id="myform">
				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-row">
						<select name="course_level">
						    <option class="option" value="Course level">Course level</option>
						    <option class="option" value="School level">School level</option>
						    <option class="option" value="University level">University level</option>
						    <option class="option" value="Competitive Exams">Competitive Exams</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-row">
						<select name="instructor_qualification">
						    <option value="Qualification of instructor">Instructor Qualifiction</option>
						    <option value="Bachelors">Bachelors</option>
						    <option value="Masters">Masters</option>
						    <option value="PhD">PhD</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<input type="text" name="course_name" class="course_name" id="course_name" placeholder="Course name" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="course_link" class="course_link" id="course_link" placeholder="Course link" required>
						</div>
						<div class="form-row form-row-4">
							<select name="course_language">
							    <option value="Language">Language</option>
							    <option value="Afrikaans">Afrikaans</option>
  								<option value="Albanian">Albanian</option>
  								<option value="Arabic">Arabic</option>
  								<option value="Armenian">Armenian</option>
  								<option value="Basque">Basque</option>
  								<option value="Bengali">Bengali</option>
  								<option value="Bulgarian">Bulgarian</option>
  								<option value="Catalan">Catalan</option>
  								<option value="Cambodian">Cambodian</option>
  								<option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
  								<option value="Croatian">Croatian</option>
  								<option value="Czech">Czech</option>
  								<option value="Danish">Danish</option>
  								<option value="Dutch">Dutch</option>
  								<option value="English">English</option>
  								<option value="Estonian">Estonian</option>
  								<option value="Fiji">Fiji</option>
  								<option value="Finnish">Finnish</option>
  								<option value="French">French</option>
  								<option value="Georgian">Georgian</option>
  								<option value="German">German</option>
  								<option value="Greek">Greek</option>
  								<option value="Gujarati">Gujarati</option>
  								<option value="Hebrew">Hebrew</option>
  								<option value="Hindi">Hindi</option>
  								<option value="Hungarian">Hungarian</option>
  								<option value="Icelandic">Icelandic</option>
  								<option value="Indonesian">Indonesian</option>
  								<option value="Irish">Irish</option>
  								<option value="Italian">Italian</option>
  								<option value="Japanese">Japanese</option>
  								<option value="Javanese">Javanese</option>
  								<option value="Korean">Korean</option>
  								<option value="Latin">Latin</option>
  								<option value="Latvian">Latvian</option>
  								<option value="Lithuanian">Lithuanian</option>
  								<option value="Macedonian">Macedonian</option>
  								<option value="Malay">Malay</option>
  								<option value="Malayalam">Malayalam</option>
  								<option value="Maltese">Maltese</option>
  								<option value="Maori">Maori</option>
  								<option value="Marathi">Marathi</option>
  								<option value="Mongolian">Mongolian</option>
  								<option value="Nepali">Nepali</option>
  								<option value="Norwegian">Norwegian</option>
  								<option value="Persian">Persian</option>
  								<option value="Polish">Polish</option>
  								<option value="Portuguese">Portuguese</option>
  								<option value="Punjabi">Punjabi</option>
  								<option value="Quechua">Quechua</option>
  								<option value="Romanian">Romanian</option>
  								<option value="Russian">Russian</option>
  								<option value="Samoan">Samoan</option>
  								<option value="Serbian">Serbian</option>
  								<option value="Slovak">Slovak</option>
  								<option value="Slovenian">Slovenian</option>
  								<option value="Spanish">Spanish</option>
  								<option value="Swahili">Swahili</option>
  								<option value="Swedish ">Swedish </option>
  								<option value="Tamil">Tamil</option>
  								<option value="Tatar">Tatar</option>
  								<option value="Telugu">Telugu</option>
  								<option value="Thai">Thai</option>
  								<option value="Tibetan">Tibetan</option>
  								<option value="Tonga">Tonga</option>
  								<option value="Turkish">Turkish</option>
  								<option value="Ukrainian">Ukrainian</option>
  								<option value="Urdu">Urdu</option>
  								<option value="Uzbek">Uzbek</option>
  								<option value="Vietnamese">Vietnamese</option>
  								<option value="Welsh">Welsh</option>
  								<option value="Xhosa">Xhosa</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>
					<div class="form-row">
						<input type="text" name="street" class="street" id="street" placeholder="Street + Nr" required>
					</div>
					<div class="form-row">
						<input type="password" name="password" class="password" id="password" placeholder="Password" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="zip_code" class="zip_code" id="zip_code" placeholder="Zip Code" required>
						</div>
						<div class="form-row form-row-2">
							<select name="country" id="country">
							    <option value="country">country</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
					<div class="form-row">
						<select name="state" id="state">
						    <option value="state">state</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<select name="City" id="city">
						    <option value="City">City</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="phone_code" class="phone_code" id="phone_code" placeholder="Code +" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone_number" class="phone_number" id="phone_number" placeholder="Phone Number" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
					</div>
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register Badge">
					</div>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<html>
<head>
<form name="newad" method="post" enctype="multipart/form-data" action="">
<title>Registration</title>

<style type="text/css">
	form h1 {
		color: white;
		text-align: center;
	}
	form {
		font-size: 22px;
		color: white;
	}
	input {
		display: block;
		clear: both;
	}
	fieldset {
		margin: 1em 180;
		background-color: pink;
	}
	label input {
		display: block;
		color: red;
	}
	body {
		background: lightgray;
	}
</style>
</head>

<body>
	SERVICE PROVIDER PROFILE

	
	<tr><td><input type="file" name="image" ></td></tr>
	<tr><td><input name="Submit" type="submit" value="Upload image"></td></tr>
	<img style="margin-left:25px;" src="upload2/avatar.png" width="200" height="200" />

</form>
	<fieldset>
	<h2>Member details</color></h2>

	<label for="ptin">Current TIN Of Business Owner</label>
	<input type="text" name="ptin">
	</p>
	<p>
	<label for="fullname">Full Name</label>
	<input type="text" name="name"
	</p>
	<p>
	<label for="dob">Date Of Birth</label>
	<input type="datetime-local">
	</p>
	<p>
	<label for="address">Residential Address</label>
	<input type="textarea" name="address">
	</p>
	<p>
	<label for="full name">Personal Phone Number </label>
	<input type="tel" name="tel">
	</p>
	</fieldset>
	<fieldset>
	<h2>Business Information</h2>
	<p>
	<label for="ptin">Current Company TIN </label>
	<input type="text" name="ptin">
	</p>
	<p>
	<label for="bname">Business Name</label>
	<input type="text" name="bname">
	</p>
	<label for="full baddress">Address Of Current Business Location </label>
	<input type="textarea" name="baddress">
	</p>
	<p>
	<label for="option">Revenue Sector</label>
	<select>
	<option id="sector">
	<option value="edu">Education</option>
	<option value="env">Environment</option>
	<option value="agric">Agriculture</option>
	<option value="tourism">Tourism Beaureu</option>
	<option value="tourism">#</option>
	<option value="tourism">#</option>
	</select>
	</p>
	<p>
	<label for="option">Revenue Lot</label>
	<select>
	<option id="rlot">
	<option value="l1">Lot 1</option>
	<option value="l2">Lot 2</option>
	<option value="l3">Lot 3</option>
	<option value="l4">Lot 4</option>
	<option value="l4">Lot #</option>
	<option value="l4">Lot #</option>
	</select>
	</fieldset>
	<button type="submit">Add Payer</button>
</form>
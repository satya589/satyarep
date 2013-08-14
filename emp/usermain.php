<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
<!--
.style2 {color: #FF0000}
.style3 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #2A1FAA;
}
.style7 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
#form1 input {
	margin-right: 40px;
}
#formwrap {
	font: 14px Arial, Helvetica, sans-serif;
	color: #000000;
	width: 550px;
	border: 1px solid #FFEAB3;
	margin-right: auto;
	margin-left: auto;
}
#Layer3 #rightcolumn {
	font: 14px Arial, Helvetica, sans-serif;
	float: right;
	width: 157px;
	margin-left: 5px;
	border: 1px solid #DEDEE0;
	background: #E6FFFF;
}
.style2 {color: #FF0000}
#Layer3 #formwrap #form1 input {
	margin-right: 40px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #2A1FAA;
}
-->
</style>
</head>

<body background="1013844_440835516015136_1258738333_n.jpg">

<?php
echo("hello world");
?>
<div id="formwrap">Content for New Div Tag Goes Here  
  <form action="user2.php" method="post" enctype="multipart/form-data" name="form1" target="_self" id="form1">
    <table width="100%" cellspacing="5" cellpadding="3">
      <tr>
        <td colspan="2" bgcolor="#FFEFC6"><span class="style3">All fields marked with  &quot; </span><span class="style7"><font color="#ff0000">* </font></span><span class="style3">&quot; are required.</span> </td>
      </tr>
      <tr>
        <td bgcolor="#FFF3D5">Name:</td>
        <td align="left" bgcolor="#FFF3D5"><input name="Name" type="text" id="Name" size="40" />
            <span class="style2">*</span></td>
      </tr>
      <tr>
        <td bgcolor="#FFF3D5">Email:</td>
        <td bgcolor="#FFF3D5"><input name="Email" type="text" id="Email" size="40" />
            <span class="style2">*</span></td>
      </tr>
      <tr>
        <td bgcolor="#FFF3D5">Address:</td>
        <td bgcolor="#FFF3D5"><input name="Address" type="text" id="Address" value="" size="40" /></td>
      </tr>
      <tr>
        <td bgcolor="#FFF3D5">Country:</td>
        <td bgcolor="#FFF3D5"><select name="Country" id="Country">
            <option value="">Please, select your country</option>
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
            <option>Australia</option>
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
            <option>Brunei</option>
            <option>Bulgaria</option>
            <option>Burkina Faso</option>
            <option>Burundi</option>
            <option>Cambodia</option>
            <option>Cameroon</option>
            <option>Canada</option>
            <option>Cape Verde</option>
            <option>Cayman Islands</option>
            <option>Central African Republic</option>
            <option>Chad</option>
            <option>Chile</option>
            <option>China</option>
            <option>Christmas Island</option>
            <option>Cocos ( Keeling ) Islands</option>
            <option>Colombia</option>
            <option>Comoros</option>
            <option>Congo</option>
            <option>Cook Islands</option>
            <option>Costa Rica</option>
            <option>C&ocirc;te d ' Ivoire</option>
            <option>Croatia ( Hrvatska )</option>
            <option>Cuba</option>
            <option>Cyprus</option>
            <option>Czech Republic</option>
            <option>Congo ( DRC )</option>
            <option>Denmark</option>
            <option>Djibouti</option>
            <option>Dominica</option>
            <option>Dominican Republic</option>
            <option>East Timor</option>
            <option>Ecuador</option>
            <option>Egypt</option>
            <option>El Salvador</option>
            <option>Equatorial Guinea</option>
            <option>Eritrea</option>
            <option>Estonia</option>
            <option>Ethiopia</option>
            <option>Falkland Islands ( Islas Malvinas )</option>
            <option>Faroe Islands</option>
            <option>Fiji Islands</option>
            <option>Finland</option>
            <option>France</option>
            <option>French Guiana</option>
            <option>French Polynesia</option>
            <option>French Southern and Antarctic Lands</option>
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
            <option>Hong Kong SAR</option>
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
            <option>Korea</option>
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
            <option>Macao SAR</option>
            <option>Macedonia, Former Yugoslav Republic of</option>
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
            <option>New Zealand</option>
            <option>Nicaragua</option>
            <option>Niger</option>
            <option>Nigeria</option>
            <option>Niue</option>
            <option>Norfolk Island</option>
            <option>North Korea</option>
            <option>Northern Mariana Islands</option>
            <option>Norway</option>
            <option>Oman</option>
            <option>Pakistan</option>
            <option>Palau</option>
            <option>Panama</option>
            <option>Papua New Guinea</option>
            <option>Paraguay</option>
            <option>Peru</option>
            <option>Philippines</option>
            <option>Pitcairn Islands</option>
            <option>Poland</option>
            <option>Portugal</option>
            <option>Puerto Rico</option>
            <option>Qatar</option>
            <option>Reunion</option>
            <option>Romania</option>
            <option>Russia</option>
            <option>Rwanda</option>
            <option>Samoa</option>
            <option>San Marino</option>
            <option>S&atilde;o Tom&eacute; and Pr&igrave;ncipe</option>
            <option>Saudi Arabia</option>
            <option>Senegal</option>
            <option>Serbia and Montenegro</option>
            <option>Seychelles</option>
            <option>Sierra Leone</option>
            <option>Singapore</option>
            <option>Slovakia</option>
            <option>Slovenia</option>
            <option>Solomon Islands</option>
            <option>Somalia</option>
            <option>South Africa</option>
            <option>South Georgia and the South Sandwich Islands</option>
            <option>Spain</option>
            <option>Sri Lanka</option>
            <option>St. Helena</option>
            <option>St. Kitts and Nevis</option>
            <option>St. Lucia</option>
            <option>St. Pierre and Miquelon</option>
            <option>St. Vincent and the Grenadines</option>
            <option>Sudan</option>
            <option>Suriname</option>
            <option>Svalbard and Jan Mayen</option>
            <option>Swaziland</option>
            <option>Sweden</option>
            <option>Switzerland</option>
            <option>Syria</option>
            <option>Taiwan</option>
            <option>Tajikistan</option>
            <option>Tanzania</option>
            <option>Thailand</option>
            <option>Togo</option>
            <option>Tokelau</option>
            <option>Tonga</option>
            <option>Trinidad and Tobago</option>
            <option>Tunisia</option>
            <option>Turkey</option>
            <option>Turkmenistan</option>
            <option>Turks and Caicos Islands</option>
            <option>Tuvalu</option>
            <option>Uganda</option>
            <option>Ukraine</option>
            <option>United Arab Emirates</option>
            <option>United Kingdom</option>
            <option>United States</option>
            <option>United States Minor Outlying Islands</option>
            <option>Uruguay</option>
            <option>Uzbekistan</option>
            <option>Vanuatu</option>
            <option>Vatican City</option>
            <option>Venezuela</option>
            <option>Viet Nam</option>
            <option>Virgin Islands ( British )</option>
            <option>Virgin Islands</option>
            <option>Wallis and Futuna</option>
            <option>Yemen</option>
            <option>Zambia</option>
            <option>Zimbabwe</option>
          </select>
            <span class="style2">*</span></td>
      </tr>
      <tr>
        <td bgcolor="#FFF3D5">Zip Code: </td>
        <td bgcolor="#FFF3D5"><input name="ZipCode" type="text" id="ZipCode" size="40" /></td>
      </tr>
      <tr>
        <td bgcolor="#FFF3D5">Phone:</td>
        <td bgcolor="#FFF3D5"><input name="Phone" type="text" id="Phone" size="40" /></td>
      </tr>
      <tr>
        <td bgcolor="#FFF3D5">Message:</td>
        <td bgcolor="#FFF3D5"><textarea name="Message" cols="30" rows="5"></textarea>
            <span class="style2"> *</span></td>
      </tr>
      <tr>
        <td colspan="2" align="center" bgcolor="#FFEFC6"><input type="submit" name="Submit" value="Submit" />
            <input type="reset" name="Submit2" value="Reset" /></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
  </form>
</div>  
</body>
</html>
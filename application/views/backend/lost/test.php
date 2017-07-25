<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sign Up</title>
<meta name="Generator" content="Serif WebPlus X6">
<meta name="viewport" content="width=650">
<meta name="copyright" content="©2013">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<script type="text/javascript">
function validate_form_28( form )
{
    if( ltrim(rtrim(form.elements['name'].value,' '),' ')=="" ) { alert("Please provide your full names"); form.elements['name'].focus(); return false; }
    if( ltrim(rtrim(form.elements['id_number'].value,' '),' ')=="" ) { alert("please provide id/passport number"); form.elements['id_number'].focus(); return false; }
    if( ltrim(rtrim(form.elements['address'].value,' '),' ')=="" ) { alert("Please provide your address"); form.elements['address'].focus(); return false; }
    if(!ValidateEmail(form.elements['email'].value)) { alert("Please provide your e-mail address"); form.elements['email'].focus(); return false; }
    if( ltrim(rtrim(form.elements['gender'].value,' '),' ')=="" ) { alert("please select one"); form.elements['gender'].focus(); return false; }
    if( ltrim(rtrim(form.elements['level'].value,' '),' ')=="" ) { alert("Please select a type of login"); form.elements['level'].focus(); return false; }
    if( ltrim(rtrim(form.elements['myusername'].value,' '),' ')=="" ) { alert("please provide your username"); form.elements['myusername'].focus(); return false; }
    if( ltrim(rtrim(form.elements['password'].value,' '),' ')=="" ) { alert("please provide your password"); form.elements['password'].focus(); return false; }
    if( ltrim(rtrim(form.elements['repassword'].value,' '),' ')=="" ) { alert("please re-type your password"); form.elements['repassword'].focus(); return false; }
    return true;
}
</script>
<style type="text/css">
body{margin:0;padding:0;}
.Body-C
{
    font-family:"Cambria", serif; font-size:13.0px; line-height:1.15em;
}
</style>
<link rel="stylesheet" href="wpscripts/wpstyles.css" type="text/css"></head>

<body text="#000000" style="background:#ffffff; height:400px;">
<div style="background-color:transparent;margin-left:auto;margin-right:auto;position:relative;width:650px;height:400px;">
<form id="form_28" name="sign" onsubmit="return validate_form_28(this)" action="inc/signup.php" method="post" target="_self" enctype="application/x-www-form-urlencoded" style="margin:0;position:absolute;left:19px;top:8px;width:612px;height:384px;">
<div style="position:absolute;left:8px;top:8px;width:81px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="edit_19"><span class="Body-C">Full Name (s)</span></label></p>
</div>
<input type="text" id="edit_19" name="name" value="" required style="position:absolute; left:144px; top:8px; width:222px;">
<div style="position:absolute;left:8px;top:38px;width:120px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="edit_37"><span class="Body-C">ID/Passport Number</span></label></p>
</div>
<input type="text" id="edit_37" name="id_number" value="" required style="position:absolute; left:144px; top:38px; width:173px;">
<div style="position:absolute;left:8px;top:68px;width:50px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="edit_20"><span class="Body-C">Address</span></label></p>
</div>
<input type="text" id="edit_20" name="address" value=""required  style="position:absolute; left:144px; top:68px; width:174px;">
<div style="position:absolute;left:8px;top:98px;width:111px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="edit_21"><span class="Body-C">Telephone Number</span></label></p>
</div>
<input type="text" id="edit_21" name="Tel" value="" required style="position:absolute; left:144px; top:98px; width:174px;">
<div style="position:absolute;left:8px;top:128px;width:41px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="edit_22"><span class="Body-C">E-<wbr>Mail</span></label></p>
</div>
<input type="text" id="edit_22" name="email" value=""  style="position:absolute; left:144px; top:128px; width:174px;">
<div style="position:absolute;left:8px;top:158px;width:44px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="combo_26"><span class="Body-C">Gender</span></label></p>
</div>
<select id="combo_26" name="gender" size="1" required style="position:absolute; left:144px; top:158px;">
    <option value="">----&nbsp;select&nbsp;one&nbsp;----</option>
    <option value="Female">Female</option>
    <option value="Male">Male</option>
</select>
<div style="position:absolute;left:8px;top:188px;width:76px;height:18px;overflow:hidden;">
<p class="Wp-Body-P"><label for="combo_27"><span class="Body-C">Login As</span></label></p>
</div>
<select id="combo_27" name="level" size="1" required style="position:absolute; left:144px; top:188px;">
    <option value="">----&nbsp;select&nbsp;one&nbsp;----</option>
    <option value="LandLord">LandLord</option>
    <option value="Client">Client</option>
</select>
<div style="position:absolute;left:8px;top:218px;width:60px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="edit_25"><span class="Body-C">Username</span></label></p>
</div>
<input type="text" id="edit_25" name="myusername" value="" required style="position:absolute; left:144px; top:218px; width:122px;">
<div style="position:absolute;left:8px;top:248px;width:59px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="edit_23"><span class="Body-C">Password</span></label></p>
</div>
<input type="password" id="edit_23" name="password" required value="" style="position:absolute; left:144px; top:248px; width:122px;">
<div style="position:absolute;left:8px;top:278px;width:109px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="edit_24"><span class="Body-C">RE-<wbr>Type Password</span></label></p>
</div>
<input type="password" id="edit_24" name="repassword" value=""  required style="position:absolute; left:144px; top:278px; width:122px;">
<input type="submit" style="position:absolute; left:144px; top:308px; width:81px; height:22px;" value="Submit">
<input type="reset" style="position:absolute; left:233px; top:308px; width:76px; height:22px;" value="Reset">
</form>
<script type="text/javascript" src="wpscripts/jsValidation.js"></script>
</div>
</body>
</html>
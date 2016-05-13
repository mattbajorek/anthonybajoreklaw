<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23068072-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<script>
function validateForm()
{
	var errNum = 0;
	var obj = document.contactForm;
	var mess = "Warning: Required Field(s) Missing\n\nThe following form fields are required:\n";
	
	if(obj.name.value == "")
	{	
		mess += "\n- Name";
		errNum++;
	}
		if(obj.email.value == "")
	{	
		mess += "\n- Email";
		errNum++;
	}
		if(obj.phone.value == "")
	{	
		mess += "\n- Phone";
		errNum++;
	}
		if(obj.message.value == "")
	{	
		mess += "\n- Message";
		errNum++;
	}
	mess += "\n\nPlease complete these fields and try to submit again.";
	if(errNum > 0)
	{	
		alert(mess);
		return false;
	}
	
	//now check the email address
	errNum = 0;
	
	if(!checkEmail(obj.email.value))
    {
        mess = "Warning: Invalid Email Address\n\nThe email address entered does not appear to be valid.\nPlease correct this and try again.";
        alert(mess);
        obj.email.focus();
        return false;
    }
	
	return true;
}

function checkEmail(email) 
{
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
	{
		return (true)
	}
	
	else
	{	return (false)	}
}
</script>




<body id="page6" onload="new ElementMaxHeight()">
<div class="top_bg">
<div id="main">
	<!-- header  -->
<?php
include("include/header.html");
?>

	<!-- content -->
	<div id="content">
		<div class="content_indent">
			<div class="width">
				<div class="col_1 line_y maxheight">
				  <div class="indent_1 line_x">
					<img src="images/page6_title1.gif" alt="" class="title" /><br />
					<center><p><strong>Law Office of Anthony G. Bajorek, LLC</strong></p>
					<p><br />
					  3 Auer Court #G<br />
					  East Brunswick, New Jersey 08816</p>
					<p>Telephone: <span>+1 732 672 9790<br />
					</span>FAX: +1 732 432 0453<br />
					  E-mail: <a class="link" href="#">anthonybajorek@gmail.com</a></p>
					<p>&nbsp;</p>
                      
                      
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.3458911571224!2d-74.39158459999997!3d40.423339199999745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3cf70534db10b%3A0xbcb078008fead44!2s3+Auer+Ct!5e0!3m2!1sen!2sus!4v1397524148607" width="400" height="350" frameborder="0" style="border:0"></iframe><br />
                       <small>&nbsp;<a href="https://www.google.com/maps/place/3+Auer+Ct/@40.4233392,-74.3915846,17z/data=!4m2!3m1!1s0x89c3cf70534db10b:0xbcb078008fead44" style="color:#0000FF;text-align:left"> View Larger Map</a></small>
</center>
				  </div>
					<div class="width">
					  <div class="clear"></div>
					</div>
				</div>
				<div class="col_2 maxheight">
					<form name="contactForm" action="actions/mailer.php" method="post" onsubmit="return validateForm()" >
                    <input type="hidden" name="formName" value="contactForm">
					<div class="indent">
					<img src="images/page6_title4.gif" alt="" class="title" /><br />
					<h5 class="font_2">Contact Us For a Free Consultation.</h5>
					<p>Please provide us with your contact information and as  much detail as possible. We will contact you within 24 hours</p>
<p class="p1">&nbsp;</p>
					Enter your name<br />
					<div class="div_input"><input name="name"  type="text" /></div>
					Enter your e-mail<br />
					<div class="div_input"><input name="email" type="text" /></div>
					Enter your telephone number<br />
					<div class="div_input"><input name="phone" type="text" /></div>
					Enter your message<br />
					<textarea name="message" cols="0" rows="0"></textarea>
                    <input type="submit" class="submitButton" value="Submit">
									<input type="reset" class="submitButton" value="Clear">
					
					</div></form>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>	
</div>
<!-- footer -->
<<!-- footer -->
<div id="footer">
Anthony G. Bajorek, LLC &copy; 2012 | Attorney Advertising | Site Maintained By <a href="http://www.eastcypress.com">East Cypress</a> 
</div>
</body>
</html>
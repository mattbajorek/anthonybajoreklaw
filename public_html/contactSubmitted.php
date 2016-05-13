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
		if(obj.company.value == "")
	{	
		mess += "\n- Company";
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
					<p>Central Jersey's Polish Speaking Attorney<br />
					  2053 Woodbridge Avenue<br />
					  Edison, New Jersey 08817</p>
					<p>Telephone: <span>+1 732 672 9790<br />
					</span>FAX: +1 732 432 0369<br />
					  E-mail: <a class="link" href="#">anthonybajorek@gmail.com</a></p>
					<p>&nbsp;</p>
                      
                      
                       <iframe width="400" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2053+Woodbridge+Avenue,+Edison,+NJ&amp;aq=0&amp;oq=2053+woodbridge&amp;sll=37.0625,-95.677068&amp;sspn=79.379181,77.607422&amp;ie=UTF8&amp;hq=&amp;hnear=2053+Woodbridge+Ave,+Edison,+New+Jersey+08817&amp;t=m&amp;ll=40.500421,-74.399929&amp;spn=0.022843,0.019312&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                       <small>&nbsp;<a href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=2053+Woodbridge+Avenue,+Edison,+NJ&amp;aq=0&amp;oq=2053+woodbridge&amp;sll=37.0625,-95.677068&amp;sspn=79.379181,77.607422&amp;ie=UTF8&amp;hq=&amp;hnear=2053+Woodbridge+Ave,+Edison,+New+Jersey+08817&amp;t=m&amp;ll=40.500421,-74.399929&amp;spn=0.022843,0.019312&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left"> View Larger Map</a></small>
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
					<h5 class="font_2">Your inquiry has been submitted successfully. We will contact you shortly.</h5>
					</div>
					</form>
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
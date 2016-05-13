<%


' Global Variable Section - main setup
formName = Request.Form("formName")
mailComp = "CDOSYS"
'smtpServer = "mail.scarletcs.com"
smtpServer = "smtp.scarletcs.com"

fromAddr = Request.Form("email")
'fromAddr = "eaton@scarletcs.com"
replyAddr = Request.Form("email")
'replyAddr = "eaton@scarletcs.com"
toAddr = ""
subject = ""
msgBody = ""


'Keep the SPAM monkeys away
referer = Request.ServerVariables("HTTP_REFERER")
refererKey = "selfreportedtranscript"

if formName = "contactForm" then
	mailForm = "../contact.html"
	returnPage = "../contactSubmitted.html"
	subject = "[scarletcs.com] Website Contact Form Submission"
	toAddr = "info@scarletcs.com"
end if




' --- Page Functions ---
function SendMail()

     dim mailObj, cdoMessage, cdoConfig
     dim addrList


     'Send email (CDOSYS version).
     if mailComp = "CDOSYS" then
       set cdoMessage = Server.CreateObject("CDO.Message")
       set cdoConfig = Server.CreateObject("CDO.Configuration")
       cdoConfig.Fields("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2
       cdoConfig.Fields("http://schemas.microsoft.com/cdo/configuration/smtpserver") = smtpServer
	   cdoConfig.Fields("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25
       cdoConfig.Fields("http://schemas.microsoft.com/cdo/configuration/smtpconnectiontimeout") = 60
       cdoConfig.Fields.Update
       set cdoMessage.Configuration = cdoConfig
       cdoMessage.From =  fromAddr
       cdoMessage.ReplyTo = replyAddr
       cdoMessage.To = toAddr
       cdoMessage.Subject = subject
       cdoMessage.HtmlBody = msgBody
       on error resume next
       cdoMessage.Send
       if Err.Number <> 0 then
         Response.Redirect("../contactSubmitted.html")
       end if
       set cdoMessage = Nothing
       set cdoConfig = Nothing
       exit function
     end if




   end function
' --- End Page Functions --- '



' --- Security Checks --- '
'if instr(lcase(referer),refererKey) = 0 and instr(lcase(referer),"localhost") = 0 then
'	Response.Redirect(mailForm & "?sc=false&rc=badref")
'end if

if isNull(Request.Form("name")) OR isNull(Request.Form("email")) then
	Response.Redirect("../contactError.html")
end if
' --- End Security Checks --- '


' --- Message Setup --- '
' GET ALL POSSIBLE FORM VALUES HERE - THE MESSAGE BODY WILL INCLUDE ONLY APPROPRIATE ONES '

fullname = Request.Form("name")
company = Request.Form("company")
email = Request.Form("email")
message = Request.Form("message")




msgBody = "<html>" &_
"<body>" &_
"<table width='600' border='0'>" &_
"<tr><td colspan='2'>" &_
"The following information has been submitted via the ScarletCS web site contact form." &_
"</td></tr>" &_

"<tr><td colspan='2'>&nbsp;</td></tr>" &_
"<tr>" &_
"<td width='30%'>Name:</td>" &_
"<td width='70%'>" & fullname & "</td>" &_
"</tr>" &_

"<tr><td colspan='2'>&nbsp;</td></tr>" &_
"<tr>" &_
"<td width='30%'>Company:</td>" &_
"<td width='70%'>" & company & "</td>" &_
"</tr>" &_

"<tr><td colspan='2'>&nbsp;</td></tr>" &_
"<tr>" &_
"<td width='30%'>Email:</td>" &_
"<td width='70%'>" & email & "</td>" &_
"</tr>" &_

"<tr><td colspan='2'>&nbsp;</td></tr>" &_
"<tr>" &_
"<td width='30%'>Message:</td>" &_
"<td width='70%'>" & message & "</td>" &_
"</tr>" &_


"</table>" &_
"</body>" &_
"</html>"


' --- Message Delivery --- '
on error resume next
SendMail()


' --- End Message Delivery --- '



' --- FailSafe Catch --- '
Response.Redirect(returnPage)





















%>


<HTML>
 <BODY>
 MailHandler v1.1 (c) 2008 CampUSA InterActive Incorporated
 <br><br>
 Visit us on the web @ http://www.1campusa.com
 </BODY>
</HTML>
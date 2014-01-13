<!-- This is the html needed for the mailer script -->
<html>
 
<head>
  <title>Contact Form</title>
</head>
 <body>
<center>
<font size="5">
<b>
Contact form
</b>
        <br />
        <br />
</font>
<form method="POST" action="mailer.php">
Subject:
<input type="text" name="subject" size="20">
        <br />
        <br />
Name:
<input type="text" name="name" size="20">
        <br />
        <br />
E-mail:
<input type="text" name="email" size="20">
        <br />
        <br />
Message:<br>
<textarea rows="9" name="message" cols="30">
</textarea>
        <br />
        <br />
<input type="submit" value="Send" name="submit">
</form>
</center>
</body>

</html>

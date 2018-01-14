<html>
 <head>
  <title>Alpha Group Guest book</title>
 </head>

 <body>
    <table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td><h2>Alpha Group Guestbook </h2></td>
      </tr>
    </table>
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <form id="form1" name="form1" method="post" action="addguestbook.php">
          <td>
            <table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
              <tr>
                <td width="117">Name</td>
                <td width="14">:</td>
                <td width="357"><input name="name" type="text" id="name" size="40" /></td>
              </tr>
              <tr>
                <td>Address</td>
                <td>:</td>
                <td><input name="address" type="text" id="address" size="40" /></td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td><input name="email" type="text" id="email" size="40" /></td>
              </tr>
              <tr>
                <td valign="top">Message</td>
                <td valign="top">:</td>
                <td><textarea name="message" cols="40" rows="3" id="message"></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
              </tr>
            </table>
          </td>
        </form>
      </tr>
    </table>

    <table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td><strong><a href="viewguestbook.php">View Guestbook</a> </strong></td>
      </tr>
    </table>
  </body>
</html>

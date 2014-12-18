<html>
<head><title>Log in</title></head>
<body>
<?php
include 'header.php';
?>

<h2 >LOG IN</h2>

<form action='exer.php' method="post">
  <table>
    <tr>
      <td><b>University Roll No. :</b></td>
<td>
      <input type=text name="roll" size=11 maxlength=11 align=LEFT>
</td>
    </tr>
    
    <tr>
     <td> <b>Password:</b></td>
<td>
      <input type=password name="password">
</td>
    </tr>
   <tr><td> <input type=submit>
</td> <td>
 <a href="http://localhost:12345/jobhai/cat.php?">Register here</a></td></tr>
</table>
</form>  
</body>
</html>
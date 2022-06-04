


<!DOCTYPE html>
<html>
  <head>
    <title>Prijava</title>
    <link href="login.css" rel="stylesheet">
    <style>


    </style>
  </head>
  <body>
    <form class="forma" method="post" target="_self">
      <h1>Prijavi se</h1><br>
      <label for="user">Korisnik</label><br>
      <input type="text" name="user" required/><br>
      <label for="password">Lozinka</label><br>
      <input type="password" name="password" required/>
    <!--  <input type="submit" value="Sign In"/>--> 
 </form>
 <br><br><br>
<button id="myButton">Prijava</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "ponuda.html";
    };
</script>



 </body>
</html>
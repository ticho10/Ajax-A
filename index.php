<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
     } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
             }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
  </head>
  <body>

    <form>
    <select name="users" onchange="showUser(this.value)">
      <option value="">Select a person:</option>
      <option value="1">Peter Griffin</option>
      <option value="2">Lois Griffin</option>
      <option value="3">John Doe</option>
      <option value="4">Bat Man</option>
      <option value="5">Media College       AaAaA</option>
      </select>
    </form>
    <br>
    <div id="txtHint"><b>Person info will be listed here...</b></div>

    </body>
    </html>

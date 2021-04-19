<!DOCTYPE html>
<html>
<body>
<label>Produktet me te shitura jane :</label><br/>
<select name="products" onchange="showUser(this.value)" id="agency">
  <option value="">Select a product:</option>
  <option value="23">Expresso</option>
  <option value="24">Latte</option>
  <option value="32">Mint Tea</option>
  <option value="29">Camomile Tea</option>
  <option value="25">Tiramisu</option>
  </select><br>
<div id="txtHint"></div>
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
        xmlhttp.open("GET","yll2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</body>
</html>
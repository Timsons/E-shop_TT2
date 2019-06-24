<!DOCTYPE html>
<html>
	<body>
    <h2>We will edit this product.</h2>

    <table>
      <tr>
      	<td>Product category<td>
      	<td>:</td>
      	<td><input type="text" id="product_category"></td>
      </tr>
      <tr>
    	   <td>Product name<td>
    	   <td>:</td>
    	   <td><input type="text" id="product_name"></td>
       </tr>
       <tr>
    	   <td>Product price<td>
    	   <td>:</td>
    	   <td><input type="text" id="product_price"></td>
       </tr>
       <tr>
    	   <td>Product code<td>
    	   <td>:</td>
    	   <td><input type="text" id="product_code"></td>
       </tr>
       <tr>
         <td><input type="button" value="add" onclick="addProduct()"></td>
         <td></td>
         <td></td>
       </tr>
    </table>
    <script>
    	function addProduct() {
    	  var productName=document.getElementById("product_name").value.trim();
        var productCode=document.getElementById("product_code").value.trim();
        var productPrice=document.getElementById("product_price").value.trim();
        var productCategory=document.getElementById("product_category").value.trim();
        if (productCategory.length==0) {
          alert("Please enter a product category");
          document.getElementById("product_category").focus();
          return false;
        }
        if (productName.length==0) {
    			alert("Please enter a product name");
    			document.getElementById("product_name").focus();
    			return false;
    		}
        if (productPrice.length==0) {
    			alert("Please enter a product price");
    			document.getElementById("product_price").focus();
    			return false;
    		}
        if (productCode.length==0) {
    			alert("Please enter a product code");
    			document.getElementById("product_code").focus();
    			return false;
    		}
    		window.location.href="/"+productCategory+"/"+productName+"/"+productPrice"/"+productCode;
    	}
    </script>
</body>
</html>

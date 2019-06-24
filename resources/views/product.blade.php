@if (count($product)==0)
	<p color='red'> There is no record in the database!</p>
@else
	<table border="1">
		<tr>
			<td> Category </td>
			<td> Name </td>
			<td> Price </td>
			<td> </td>
			<td> </td>
			<td> </td>
		</tr>
	@foreach ($product as $product)
		<tr>
			<td> {{ $product->categoryID }} </td>
			<td> {{ $product->name }} </td>
			<td> {{ $product->price }} </td>
			<td> <input type="button" value="delete" onclick="deleteProduct({{ $product->productID }})"> </td>
			<td> <input type="button" value="edit" onclick="editProduct({{ $product->productID }})"> </td>
			<td> <a href="./product/{{$product->productID}}/edit" class="btn btn-default">Edit</a></td>
    </tr>
  @endforeach
	</table>
@endif
<p> <input type="button" value="New Product" onclick="newProduct()"> </p>

<script>
	function newProduct(/*roleID*/) {
		//if (isAdmin)
		alert("You are about to create a product");
		window.location.href="./product/new/";
	}
	function deleteProduct(productID/*, roleID*/) {
		//if (isAdmin)
		alert("You are about to delete a product");
		window.location.href="./product/delete/"+productID;
	}
	function editProduct(productID/*, roleID*/) {
		//if (isAdmin)
		alert("You are about to edit a product");
		window.location.href="./product/edit/"+productID;
	}
</script>

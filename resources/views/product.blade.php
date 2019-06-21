@if (count($product)==0)
	<p color='red'> There is no record in the database!</p>
@else
	<table border="1">
		<tr>
			<td> Name </td>
			<td> Price </td>
			<td> </td>
		</tr>
	@foreach ($product as $product)
		<tr>
			<td> {{ $product->name }} </td>
			<td> {{ $product->price }} </td>
			<td> <input type="button" value="delete" onclick="deleteProduct({{ $product->productID }})"> </td>
    </tr>
  @endforeach
	</table>
@endif
<p> <input type="button" value="New Product"> </p>

<script>
	function deleteProduct(productID, roleID) {
		if (roleID==1)
		window.location.href="/product/delete/"+productID;
	}
</script>

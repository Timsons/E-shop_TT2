@if (count($product)==0)
	<p color='red'> There is no record in the database!</p>
@else
	<table border="1">
		<tr>
			<td> Name </td>
			<td> Price </td>
		</tr>
	@foreach ($product as $product)
		<tr>
			<td> {{ $product->name }} </td>
			<td> {{ $product->price }} </td>
    </tr>
  @endforeach
	</table>
@endif

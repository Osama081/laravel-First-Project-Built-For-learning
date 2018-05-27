@extends('Customers.MasterPage.masterpage')

	@section('all')
		@if($product=App\Product::distinct()->get(['Product_Category']))		
		    <table class="table table-bordered" id="view">
		    	 <tbody class="text-center text-dark">
		    		<tr>
		    			<th class="text-center text-dark">Categories We Have</th>
		    			<th class="text-center text-dark">Visit</th>
		    		</tr>
		    	</tbody>
		    	@foreach($product as $product)
		    	<tbody>
		    		<tr>
		    			<td class="text-center">{{$product->Product_Category}}</td>
		    			<td class="text-center"><a href="/single/{{$product->Product_Category}}" class="btn btn-primary">View</a></th>
		    		</tr>
		    	</tbody>
		    	@endforeach
		    </table>
		    @endif

	@endsection
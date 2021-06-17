@extends('index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header"></div>

	    		<form action="{{ route('category') }}" method="GET" style="margin-top: 20px;">

				<div class="form-row align-items-center">
					<div class="col-auto my-1">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Product Catalog</label>
						<select name="" id="catagory" title="OPTIONAL - Choose a Catagory to Limit File Types" class="custom-select mr-sm-2">
							<option value="">All Product</option>
							@foreach($categories as $item)
							<option value={{ $item->id_url_category_detail }}>{{ $item->name_url_category }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-row align-items-center">
						<div class="col-auto my-1">
							<label class="mr-sm-2" for="inlineFormCustomSelect">List of Sub-Products</label>
							<select name="product_id" id="input" class="custom-select mr-sm-2">
							<option value="0">Product Catalog</option>
								@foreach ($product as $product)
								<option value={{ $product->id_url_product }}{{ $product->id_url_product == $selected_id['product_id'] ? '' : '' }}>
								{{ $product['name_url_product'] }}</option>
								@endforeach
							</select>
							<span id="optionstore" style="display:none;"></span>
						</div>
				</div>
    			
				
    			
	    		<input type="submit" class="btn btn-success btn-sm" value="Filter">
	    		</form>
	    	
	    	
	    		<table class="table table-stripped">
	    			<thead>
	    				<tr>
	    					<th>STT</th>
	    					<th>Name Of Supplier</th>
	    					<th>Classification</th>
	    					<th>Link Of Product</th>
	    				</tr>
	    			</thead>
	    			<tbody>
					@forelse($ranking as $rank )
	    				<tr>
	    					<td>{{ $loop->index+1 }}</td>
							<td>{{ $rank->name_supplier }}</td>
               				<td>{{ $rank->rank }}</td>
                			<td>{{ $rank->quality }}</td>
	    				</tr>
	    				@empty
						<br>
	    				<p> No data Found </p>
	    				@endforelse
	    			</tbody>
	    		</table>
	    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
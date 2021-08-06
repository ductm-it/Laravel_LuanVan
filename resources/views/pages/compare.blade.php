@extends('index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header"></div>

	    		<form action="{{ route('compare') }}" method="GET" style="margin-top: 20px;">

				<div class="form-row align-items-center">
					<div class="col-auto my-1">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Product Catalog</label>
						<select name="category" id="category" title="OPTIONAL - Choose a Catagory to Limit File Types" class="custom-select mr-sm-2">
							<option value="">-----------</option>
							@foreach($categories as $item)
							<option value={{ $item->id_url_category_detail }}>{{ $item->name_url_category }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-row align-items-center">
						<div class="col-auto my-1">
							<label class="mr-sm-2" for="inlineFormCustomSelect">List of Sub-Products</label>
							<select name="product_id" id="product" class="custom-select mr-sm-2">

                            <option value="-1">-----------</option>
                            @foreach ($product as $product)
								<option value={{ $product->id_url_product }}{{ $product->id_url_product == $selected_id['product_id'] ? '' : '' }}>
								{{ $product['name_url_product'] }}</option>
								@endforeach
							</select>
							<span id="optionstore" style="display:none;"></span>
						</div>

                    <div class="col-auto my-1">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Filter</label>
						<select name ="orderby" id="input" class="custom-select mr-sm-2">

                            <option {{ Request::get('orderby') == "asc1" ? "selected ='selected'" : ""}} value="asc1">Quality Bad</option>
                            <option {{ Request::get('orderby') == "desc1" ? "selected ='selected'" : ""}} value="desc1">Quality Good</option>
                            <option {{ Request::get('orderby') == "asc3" ? "selected ='selected'" : ""}} value="asc3">Technology Bad</option>
                            <option {{ Request::get('orderby') == "desc3" ? "selected ='selected'" : ""}} value="desc3">Technology Good</option>
                            <option {{ Request::get('orderby') == "asc2" ? "selected ='selected'" : ""}} value="asc2">Logistic Good</option>
                            <option {{ Request::get('orderby') == "desc2" ? "selected ='selected'" : ""}} value="desc2">Logistic Bad</option>
                            <option {{ Request::get('orderby') == "asc" ? "selected ='selected'" : ""}} value="asc">Price Bad</option>
                            <option {{ Request::get('orderby') == "desc" ? "selected ='selected'" : ""}} value="desc">Price Good</option>

                     </select>
					</div>


				</div>



	    		<input type="submit" class="btn btn-success btn-sm" value="Filter">
	    		</form>


	    		<table class="table table-stripped">
	    			<thead>
	    				<tr>
                            <th>STT</th>
                            <th>Name Of Vendor</th>
                            <th>Quality</th>
                            <th>Price</th>
                            <th>Logistic</th>
                            <th>Technology</th>
                            <th>Classification</th>
                            <th>Total Point</th>
	    				</tr>
	    			</thead>
	    			<tbody>
					@forelse($ranking as $rank )
	    				<tr>
                        <td>{{ $loop->index+1 }}</td>
                            <td>{{ $rank->name_vendor }}</td>
                            <td>{{ $rank->quality }}</td>
                            <td>{{ $rank->price }}</td>
                            <td>{{ $rank->logistic }}</td>
                            <td>{{ $rank->technology }}</td>
                            <td>{{ $rank->rank }}</td>
                            <td>{{ $rank->total_point }}</td>
	    				</tr>
	    				@empty
						<br>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> No Data Found </td>
                        </tr>
	    				@endforelse
	    			</tbody>
	    		</table>
                <div class="d-flex justify-content-center">
                {{ $ranking->appends($query)->links() }}
				</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(function() {
    $(document).on('change','#category', function (event) {
        // $('#category').change(, function (event) {
        $("#product option").remove();
        var id = $(this).val();
        if (id != -1 ) {
            $.ajax({
                url : '{{ route( 'loadProduct' ) }}',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                },
                type: 'post',
                dataType: 'json',
                success: function( result )
                {
                    $.each( result, function(k, v) {
                        $('#product').append($('<option>', {value:k, text:v}));
                    });
                },
                error: function()
                {
                    //handle errors
                    alert('error...');
                }
            });
        } else {
            $('#product').append('<option value="-1">----------</option>');
        }
    });
});
</script>
@endsection

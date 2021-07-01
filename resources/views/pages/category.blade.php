@extends('index')
@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Compare Request Based </h5>
            <div class="card-body">
            <!-- <form action="" name="category" id="category" accept-charset="utf-8" method="post" enctype="multipart/form-data"> -->
            {{ csrf_field() }}
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Product Catalog</label>
                    <select name="catagory" id="catagory" title="OPTIONAL - Choose a Catagory to Limit File Types" class="custom-select mr-sm-2">
                        <option value="">All Product</option>
                        @foreach($data as $item)
                        <option value={{ $item->id_url_category_detail }}>{{ $item->name_url_category }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">List of Sub-Products</label>
                    <select name="fileType" id="fileType" class="custom-select mr-sm-2">
                    @foreach($query as $opt)
                        <option value={{ $opt->url_product  }}><a href="{{ route('product.show', $opt -> id_url_product) }}">{{ $opt->name_url_product }}</a></option>
                    @endforeach
                    </select>
                    <span id="optionstore" style="display:none;"></span>
                </div>
            </div>

            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
            <!-- </form> -->
            </div>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Name Of Supplier</th>
                        <th scope="col">Classification</th>
                        <th scope="col">Total Point</th>
                    </tr>
                </thead>
        <tbody>
        @if(isset ($ranking))
        @foreach($ranking as $rank)
            <tr>
                <th scope="row">{{ $rank->id_supplier }}</th>
                <td>{{ $rank->name_supplier }}</td>
                <td>{{ $rank->rank }}</td>
                <td>{{ $rank->total_point }}</td>
            </tr>
        @endforeach
        @endif
        <!-- {{ $infor ->links() }} -->
        </tbody>
        </table>

        </div>
    </div>
</div>

<!-- <script>
    $(document).ready(function() {

    $('#catagory').on("change", function() {
        var cattype = $(this).val();
        optionswitch(cattype);
    });

    });

    function optionswitch(myfilter) {
    //Populate the optionstore if the first time through
    if ($('#optionstore').text() == "") {
        $('option[class^="sub-"]').each(function() {
            var optvalue = $(this).val();
            var optclass = $(this).prop('class');
            var opttext = $(this).text();
            optionlist = $('#optionstore').text() + "@%" + optvalue + "@%" + optclass + "@%" + opttext;
            $('#optionstore').text(optionlist);
        });
    }
    //delete everything
    $('option[class^="sub-"]').remove();
    // put the filtered stuff back
    populateoption = rewriteoption(myfilter);
    $('#fileType').html(populateoption);
    }

    function rewriteoption(myfilter) {
    //rewrite only the filtered stuff back into the option
    var options = $('#optionstore').text().split('@%');
    var resultgood = false;
    var myfilterclass = "sub-" + myfilter;
    var optionlisting = "";

    myfilterclass = (myfilter != "")?myfilterclass:"all";
    //first variable is always the value, second is always the class, third is always the text
    for (var i = 3; i < options.length; i = i + 3) {
        if (options[i - 1] == myfilterclass || myfilterclass == "all") {
            optionlisting = optionlisting + '<option value="' + options[i - 2] + '" class="sub-' + options[i - 1] + '">' + options[i] + '</option>';
            resultgood = true;
        }
    }
    if (resultgood) {
        return optionlisting;
    }
    }
</script> -->

<script>
    $(document).ready(function() {
    $('#submit').on('click', function() {
        var text =  $('#fileType').val();
        var form = $("#category");
        form.submit();
        // alert(text);
    });
    });
</script>
@endsection


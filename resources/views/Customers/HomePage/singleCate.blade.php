@extends('Customers.MasterPage.masterpage')
@section('singleCate')
<div class="row">
    <div class="col-lg-12">
        <h2 class="mostvisited text-center">{{$id}}</h2>
    </div>
    <div class="row">
        @foreach($products as $product)
            <div class="col-lg-3 products-we-recommend">
                <div class="thumbnail">
                    {!!$product->Product_EmbedCode!!}
                    <div class="caption">
                        <h3>{{$product->Product_Name}}</h3>
                        <p>
                            {{--{{$product->Product_Description}}--}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
    @endsection
@extends('Customers.MasterPage.masterpage')
@section('allCategories')
<div class="row">
    @foreach($myCategory as $category)
        <div class="col-lg-3">
            <div class="col-lg-3 products-we-recommend">
                <div class="thumbnail">
                    {!!$category->Product_EmbedCode!!}
                    <div class="caption">
                        <h3>{{$category->Product_Name}}</h3>
                        <p>
                            {{$category->Product_Description}}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    @endforeach
</div>
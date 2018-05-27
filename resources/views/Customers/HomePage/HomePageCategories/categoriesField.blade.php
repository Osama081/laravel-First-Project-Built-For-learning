@extends('Customers.HomePage.HomePageSliderPiece.homepage')


@section('homeItemsCategories')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="mostvisited">Recent + Oldest</h2>
        </div>
    </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>

            </ol>



            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                {{--@foreach($myProducts as $product)--}}

                <div class="item active">

                    <div class="row">
                        @for($i=0;$i<count($product);$i++)

                        <div class="col-lg-3 products-we-recommend">
                            <div class="thumbnail">

                                {!!$product[$i]->Product_EmbedCode!!}
                                <div class="caption">
                                    <h3>{{$product[$i]->Product_Name}}</h3>
                                    <p>
                                        {{--{{$product->Product_Description}}--}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endfor

                    </div>

                </div>

                <div class="item">

                    <div class="row">

                        @for($i=0;$i<count($product1);$i++)
                        <div class="col-lg-3 products-we-recommend">
                                    <div class="thumbnail">
                                        {!!$product1[$i]->Product_EmbedCode!!}
                                        <div class="caption">
                                            <h3>{{$product1[$i]->Product_Name}}</h3>
                                            <p>
                                                {{--{{$product->Product_Description}}--}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        @endfor

                    </div>

                </div>


            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

@endsection
@section('books')
    <div class="row">
        <div clas="col-lg-12">
            <a href="/single/Books"><h2 class="mostvisited">Books</h2></a>
        </div>
    </div>
    <div class="row">
        @if($product=App\Product::take(8)->where('Product_Category','Books')->get())
            @for($i=0;$i<count($product);$i++)
        <div class="col-lg-3 products-we-recommend">
            <div class="thumbnail">
                {!!$product[$i]->Product_EmbedCode!!}
                <div class="caption">
                    <h3>{{$product[$i]->Product_Name}}</h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>
        @endfor
            @endif
    </div>
    @endsection














@section('mobile')
    <div class="row">
        <div clas="col-lg-12">
            <a href="/single/mobile"><h2 class="mostvisited">Mobile</h2></a>
        </div>
    </div>
    <div class="row">
        @if($product=App\Product::take(8)->where('Product_Category','Books')->get())
            @for($i=0;$i<count($product);$i++)
                <div class="col-lg-3 products-we-recommend">
                    <div class="thumbnail">
                        {!!$product[$i]->Product_EmbedCode!!}
                        <div class="caption">
                            <h3>{{$product[$i]->Product_Name}}</h3>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        @endif
    </div>
@endsection


@section('games')
    <div class="row">
        <div clas="col-lg-12">
            <a href="/single/game"><h2 class="mostvisited">Game</h2></a>
        </div>
    </div>
    <div class="row">
        @if($product=App\Product::take(8)->where('Product_Category','Books')->get())
            @for($i=0;$i<count($product);$i++)
                <div class="col-lg-3 products-we-recommend">
                    <div class="thumbnail">
                        {!!$product[$i]->Product_EmbedCode!!}
                        <div class="caption">
                            <h3>{{$product[$i]->Product_Name}}</h3>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        @endif
    </div>
@endsection

@section('computer')
    <div class="row">
        <div clas="col-lg-12">
            <a href="/single/computer"><h2 class="mostvisited">Computer</h2></a>
        </div>
    </div>
    <div class="row">
        @if($product=App\Product::take(8)->where('Product_Category','Computer')->get())
            @for($i=0;$i<count($product);$i++)
                <div class="col-lg-3 products-we-recommend">
                    <div class="thumbnail">
                        {!!$product[$i]->Product_EmbedCode!!}
                        <div class="caption">
                            <h3>{{$product[$i]->Product_Name}}</h3>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        @endif
    </div>
@endsection



@section('clothing')
    <div class="row">
        <div clas="col-lg-12">
            <a href="/single/clothing"><h2 class="mostvisited">Clothing</h2></a>
        </div>
    </div>
    <div class="row">
        @if($product=App\Product::take(8)->where('Product_Category','Clothing')->get())
            @for($i=0;$i<count($product);$i++)
                <div class="col-lg-3 products-we-recommend">
                    <div class="thumbnail">
                        {!!$product[$i]->Product_EmbedCode!!}
                        <div class="caption">
                            <h3>{{$product[$i]->Product_Name}}</h3>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        @endif
    </div>
@endsection
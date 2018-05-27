@extends('AdminPanel/AddingNewProduct/mainnav')
    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
@section('content')
<h1 class="text-center text-danger">Add new Products Mr:{{$name}}
</h1>

<div class="row">
    <div class="col-md-8">
        {{--<form class="form-horizental" id = "myForm" action="/product" method="post">--}}
        <form class="form-horizental" id = "myForm" action="{{route('product.store')}}" method="post">

            @csrf
            {{method_field('POST')}}
        <p class="text-uppercase text-center border-white" id="success"></p>
            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" name="productName" placeholder="Enter The Product Name" class="form-control" required="true" id="pN">
            </div>

            <div class="form-group">
                <label for="productCategory">Product Category:</label>
                <select class="selectpicker form-control" name="productCategory" id="pC">
                    <option>Mobile</option>
                    <option>Clothing</option>
                    <option>Clothing</option>
                    <option>Vehicle</option>
                    <option>Electronice</option>
                    <option>Accesories</option>
                    <option>Computers</option>
                    <option>Consoles</option>
                    <option>Books</option>
                    <option>Games</option>
                    <option>Kids Toys</option>
                </select>
            </div>

            <div class="form-group">
                <label for="productEmbedCode">Embed Code:</label>
                <input type="text" name="productEmbedCode" class="form-control" required="true" id='pEc'>
            </div>


            <div class="form-group">
                <label for="productRecommended">Product Recommended:</label>
                <input type="radio" name="productRecommended" value="1" >yes
                <input type="radio" name="productRecommended" value="0" >No<br>
            </div>


            <div class="form-group">
                <label for="descr">Tell Customers About the Product</label>
                <textarea rows="5" cols="25" name="descr" class="form-control">
			 			</textarea>

            </div>

            <button type="Submit" value="Submit Form" class="btn btn-danger">Add Product</button>

        </form>
    </div>


    <div class="col-md-4">
        <div id="imageDisplay" class="">
        </div>
        <script>
            window.onload = function(){
                var myCode = document.getElementById('pEc');
                myCode.onblur = function(){
                    alert(myCode.value);
                    document.getElementById('imageDisplay').innerHTML = myCode.value;
                };
                {{--$('button').click(function (ev) {--}}
                    {{--alert('hi m here');--}}
                    {{--ev.preventDefault();--}}
                    {{--$.ajax({--}}
                        {{--type:"POST",--}}
                        {{--url:"{{route('product.store')}}",--}}
                        {{--data:{--}}
                            {{--productName: document.getElementById('pN').value,--}}
                            {{--productCategory :document.getElementById('pC').value,--}}
                            {{--productEmbedCode : document.getElementById('pEc').value,--}}
                            {{--descr : document.getElementById('descr').value,--}}
                            {{--productRecommended : document.getElementById('productRecommended').value--}}
                        {{--},--}}
                        {{--success:function (data) {--}}
                               {{--alert('Yoo');--}}
                                {{--document.getElementById('success').innerHTML='Product Added Successfully',--}}
                                {{--document.getElementById('pN').innerHTML='',--}}
                                {{--document.getElementById('pEc').innerHTML='',--}}
                                {{--document.getElementById('descr').innerHTML=''--}}
                        {{--},--}}
                        {{--error:function (errorThrown) {--}}
                            {{--alert(errorThrown);--}}
                            {{--document.getElementById('success').innerHTML='Error in Adding Product'--}}
                        {{--}--}}
                    {{--});--}}
                {{--});--}}
            }
        </script>
    </div>
</div>

    @endsection


@extends('AdminPanel/AddingNewProduct/mainnav')
@section('content')
<select name="selection" id="categorySelect" class="selectpicker form-control col-lg-4" onchange="mySelect()">
    @if($categories=App\Product::distinct()->get(['Product_Category']))
       @foreach($categories as $cat)
            <option>{{$cat->Product_Category}}</option>
        @endforeach
           <option selected disabled>Please Select Option</option>
           <option>Osama Inayat</option>
           <option>Ali Asif</option>


        @endif
</select>

<table class="table table-bordered table-hover" id="my" >
    <tbody class="text-center text-dark">
    <tr class="d-table-row">
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Category</th>
        <th>Product Added </th>
        <th>Action</th>
    </tr>
    </tbody>
    <tbody id="myData">




    </tbody>
    @if($categories=App\Product::all())

        @foreach($categories as $cat)
        <tbody>
           <td>{{$cat->id}}</td>
           <td>{{$cat->Product_Name}}</td>
           <td>{{$cat->Product_Category}}</td>
           <td>{{$cat->created_at}}</td>
           <td><button class="btn btn-danger" id="{{$cat->id}}">Delete</button></td>
        </tbody>
        @endforeach
    @endif

</table>





<script>
     window.onload=  function (ev) {
            var btn = $('#myButton');
           
            $('button').click(function (s) {
                alert('here');
                s.stopPropagation();
                var tableRow = $(this).closest('tr');
             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });
                $.ajax({
                    type:'DELETE',
                    url:'product/'+$(this).attr('id'),
                    success:function (data) {
                        tableRow.fadeOut().remote();
                    },
                    error:function () {
                        alert('Sorry Rajja Ji');
                    }
                });
            });





     };
     function mySelect() {
         var option = document.getElementById('categorySelect');
         var myTable  = document.getElementById('myData');
         var myChoice = option.value;
         // $.ajaxSetup({
         //     headers: {
         //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         //     }
         // });
         $.ajax({
             type:'GET',
             url:'product/'+myChoice,
             success:function (data) {
                alert('yoo');
             },
             error:function () {
                 alert('Sorry Raja Ji');
             }
         });


     }
</script>

<script>


</script>
@endsection

@extends('Customers.MasterPage.masterpage')

@section('itemPostSlider')

    <div class="w3-content" style="max-width:100%">
        <img class="mySlides" src="Images Folder/SliderImages/cate.png" style="width:100%">
        <img class="mySlides" src="Images Folder/SliderImages/think_twice.png" style="width:100%">
        <img class="mySlides" src="Images Folder/SliderImages/Write_Code.png" style="width:100%">
    </div>

    <script>
        var myIndex = 0;
        carousel();
        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length-1) {myIndex = 0}
            x[myIndex].style.display = "block";
            setTimeout(carousel, 2000);
        }
    </script>
@endsection
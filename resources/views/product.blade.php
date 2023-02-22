<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')

<body>
    <div class="container">
        @include('breadcrumb')
        @if(!$product)

        <p> THIS PRODUCT DOESN'T EXIST ANYMORE </p>

        @else

        <div id="products-info-container" class="row row-cols-lg-2 g-3 justify-content-center">
            <div class="col container-product ">
                <div id="img-container">
                    <div class="border-bottom  name-container">
                        <h1 id="product-name" class="text-center">
                            {{$product->name}}
                        </h1>

                    </div>
                    <div class="">

                        <img src="/img/imcas.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col container-product">
                <div class="container-info-sup">
                    <div class="container-desc">
                        <h3 id="product-type">{{$product->type}}</h3>
                    </div>
                    <div class="container-desc text-justify">
                        <p class="desc_text"> {{$product->description}}</p>
                    </div>
                    <div class="container-desc">
                        <h3 class="text-end"> {{$product->price}}€</h3>
                        <div class="text-end"><button class="btn btn-primary">Buy</button></div>
                    </div>
                </div>

            </div>


        </div>

        @endif
    </div>


</body>

</html>
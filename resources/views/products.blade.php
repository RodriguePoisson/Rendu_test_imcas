<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/list_products.css')}}">


</head>

<body>
    <div class="container">

        @include('breadcrumb')
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
            @foreach($products as $product)
            <div class="col">
                <div class="card h-100 shadow-sm"> <img src="/img/imcas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="mb-3 bg-success badge ">{{$product->name}}</div>
                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">{{$product->type}}</span> <span class="float-end price-hp">{{$product->price}}&euro;</span> </div>
                        <h5 class="card-title">{{$product->description}}</h5>
                        <div class="text-center my-4"> <a href="/product/{{$product->id}}" class="btn btn-warning">Voir produit</a> </div>
                        
                        <div class=" badge rounded-pill bg-primary"><a href="/product/update/{{$product->id}}">Modifier</a></div>
                        <div class=" badge rounded-pill bg-danger"><a href="/product/remove/{{$product->id}}">Supprimer</a></div>
                        
                    </div>
                </div>


            </div>
            @endforeach
        </div>
        
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link @if($current_page === 1) disabled @endif" href="/products/{{$current_page-1}}">Previous</a></li>
                @for ($i = 1; $i <= $last_page; $i++)
                
                    <li class="page-item"><a class="page-link @if($current_page === $i) active @endif" href="/products/{{$i}}">{{$i}}</a></li>
                @endfor
                <li class="page-item"><a class="page-link @if($current_page === $last_page) disabled @endif" href="/products/{{$current_page+1}}">Next</a></li>
            </ul>
        </nav>
    </div>

</body>

</html>
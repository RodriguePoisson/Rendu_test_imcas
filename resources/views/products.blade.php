<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')

<body>
    <div class="container">

        @include('breadcrumb')
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-3 g-3 justify-content-center">
            @foreach($products as $product)
            <div class="col">
                <div class="card h-100 shadow-sm"> <img src="/img/imcas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class=" product-name ">{{$product->name}}</div>
                        <div class="clearfix mb-3 product-type"> <span class="float-start">{{$product->type}}</span> <span class="float-end price-hp product-price">{{$product->price}}&euro;</span> </div>
                        <div class="card-title product-desc text-truncate">{{$product->description}}</div>
                        <div class=""> <a href="/product/{{$product->id}}" class="stretched-link"></a> </div>


                        <div class="delete-update"><a href="/product/update/{{$product->id}}" class="modify-delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg></a>
                            <a href="/product/remove/{{$product->id}}"class="modify-delete"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg></a>
                        </div>
                    </div>
                </div>


            </div>
            @endforeach
        </div>

        <nav>
            <ul class="pagination justify-content-center mt-5">
                <li class="page-item"><a class="page-link @if($current_page === 1) disabled @endif" href="/products/{{$current_page-1}}">Previous</a></li>
                @for ($i = 1; $i <= $last_page; $i++) <li class="page-item"><a class="page-link @if($current_page === $i) active @endif" href="/products/{{$i}}">{{$i}}</a></li>
                    @endfor
                    <li class="page-item"><a class="page-link @if($current_page === $last_page) disabled @endif" href="/products/{{$current_page+1}}">Next</a></li>
            </ul>
        </nav>
    </div>

</body>

</html>
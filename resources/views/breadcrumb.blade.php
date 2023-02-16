<head>
    <link rel="stylesheet" href="{{asset('/css/breadcrumb.css')}}">
</head>

<div class="container d-flex justify-content-center">
    <nav aria-label="breadcrumb " class="first  d-md-flex" >
         <ol class="breadcrumb indigo lighten-6 first-1 shadow-lg mb-5  ">
            <li class="breadcrumb-item "><a class="black-text active-2" href="/products"><span >Tous les produits</span></a><img class="ml-md-3 ml-1" src="https://img.icons8.com/metro/50/000000/chevron-right.png " width="20" height="20"></li>
            <li class="breadcrumb-item "><a class="black-text active-2  " href="/product/create"><span >Ajouter produit</span></a><img class="ml-md-3 ml-1" src="https://img.icons8.com/metro/50/000000/chevron-right.png " width="20" height="20"> </li>
            <li class="breadcrumb-item "><form class="d-flex" action="/product/search" method="POST">
        <input class="form-control me-2" type="search" placeholder="Search" name="q" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><span>Search</span></button>
        @csrf
      </form> </li>
            
        </ol>
    </nav>
</div>
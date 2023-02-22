<div class="container d-flex justify-content-center">
    <section class=" p-4 mb-4 d-flex align-items-center flex-column">


        <nav class="navbar navbar-expand-lg  rounded-pill nav-breadcrumb">

            <div class="container-fluid">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('products*')||request()->is('/') ) ? 'active' : '' }}" aria-current="page" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('product/create')) ? 'active' : '' }}" href="/product/create">Add</a>
                    </li>

                    <div class="input-group ps-5">
                        <div class="form-outline">
                            <form action="/product/search" method="POST">
                                <input type="search" id="search-breadcrumb" class="form-control rounded-pill" name="q" placeholder="Search">
                                @csrf
                            </form>

                        </div>

                    </div>
            </div>
        </nav>
    </section>
</div>
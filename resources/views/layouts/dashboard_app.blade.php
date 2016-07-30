<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DashBoard 1</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="{{asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="dashboard-app-layout">
        <div class="container-fluid">
            <div class="dashboard-app-header">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <span class="dashboard-nav-header-left">Dashboard</span>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 dashboard-nav-right">
                    <div class="dashboard-nav-header-right">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Log Out</a>
                        </li>
                        <li>
                            <a href="#">Log Out</a>
                        </li>
                        <li>
                            <a href="#">Log Out</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid dashboard-content">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="dashboard-nav">
                    <ul>
                        <li>
                            <a href="{{ route('products.show') }}">
                                <i class="fa fa-cube" aria-hidden="true"></i>
                                Product
                            </a>
                            <ul class="product-options">
                                <li><a href="{{ route('products.create') }}">New Product</a></li>
                                <li><a href="{{ route('products.show') }}">Show Product</a></li>
                                <li><a href="{{ route('products.show') }}">Edit Product</a></li>
                                <li><a href="{{ route('products.show') }}">Delete Product</a></li>
                                <li><a href="{{ route('products.show') }}">Promo Product</a></li>
                                <li><a href="{{ route('products.show') }}">Slider Product</a></li>
                                <li><a href="{{ route('products.show') }}">Stock Update</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('products.create') }}">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Category
                            </a>
                            <ul class="category-options">
                                <li><a href="{{ route('categories.create') }}">New Category</a></li>
                                <li><a href="{{ route('categories.index') }}">Show Category</a></li>
                                <li><a href="{{ route('categories.show') }}">Edit Category</a></li>
                                <li><a href="{{ route('categories.show') }}">Delete Category</a></li>
                                <li><a href="{{ route('categories.show') }}">Slider Category</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('products.create') }}"><i class="fa fa-user" aria-hidden="true"></i>Customer</a></li>
                        <li><a href="{{ route('products.create') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Order</a></li>
                        <li><a href="{{ route('products.create') }}"><i class="fa fa-users" aria-hidden="true"></i>Employee</a></li>
                        <li>
                            <a href="{{ route('vendors.create') }}">
                                <i class="fa fa-map-o" aria-hidden="true"></i>
                                Vendor
                            </a>
                            <ul class="vendor-options">
                                <li><a href="{{ route('vendors.create') }}">New Category</a></li>
                                <li><a href="{{ route('vendors.index') }}">Show Category</a></li>
                                <li><a href="{{ route('vendors.show') }}">Edit Category</a></li>
                                <li><a href="{{ route('vendors.show') }}">Delete Category</a></li>
                                <li><a href="{{ route('vendors.show') }}">Slider Category</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('products.create') }}"><i class="fa fa-calendar" aria-hidden="true"></i>Shipping</a></li>
                        <li><a href="{{ route('products.create') }}"><i class="fa fa-tasks" aria-hidden="true"></i>Sales</a></li>
                        <li><a href="{{ route('products.create') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Accounts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <script type="text/javascript">

        </script>
    </body>
</html>

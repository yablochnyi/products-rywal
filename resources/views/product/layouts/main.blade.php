<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css"/>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Products</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('megadiscount')}}">Mega
                        Discount</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('discount')}}">Discount</a>
                </li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('zero')}}">Zero</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Product with flag
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('bestrated')}}">Best rated</a></li>
                        <li><a class="dropdown-item" href="{{route('greatprice')}}">Great price</a></li>
                        <li><a class="dropdown-item" href="{{route('greatquality')}}">Great quality</a></li>
                        <li><a class="dropdown-item" href="{{route('newproduct')}}">New products</a></li>
                        <li><a class="dropdown-item" href="{{route('promotion')}}">Promotion</a></li>
                        <li><a class="dropdown-item" href="{{route('promotionalproduct')}}">Promotional products</a>
                        </li>
                        <li><a class="dropdown-item" href="{{route('recommendedproduct')}}">Recommended products</a>
                        </li>
                        <li><a class="dropdown-item" href="{{route('sale')}}">Sale</a></li>
                        <li><a class="dropdown-item" href="{{route('vendorrecomendation')}}">Vendor recommendation</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#app').DataTable();
    });
</script>
</body>
</html>



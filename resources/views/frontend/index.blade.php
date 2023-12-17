<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store Keeper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="py-4">
    {{-- navbar --}}
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Hidden brand</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav> --}}
    {{-- navbar --}}
    <main>
        <h2 class="text-center">Use <a href="{{ url('/login') }}">Login</a> First to access Dashboard for update Product quantity</h2>

        <div class="text-center">
            <h4>Email: admin@gmail.com</h4>
            <h4>Password : 123456789</h4>
        </div>
        <div class="container">
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Quantity</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $product->product_name }}</td>
                            <td><img src="uploads/products/{{ $product->product_image }}"
                                    style="width: 150px; height:150px" class="img-fluid" alt=""></td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->product_quantity }}</td>
                            <td>{{ $product->product_quantity * $product->product_price }}</td>
                            <td>
                                @if ($product->product_quantity > 0)
                                <form action="{{ url('product/quantity') }}/{{ $product->id }}" method="POST">
                                    @csrf
                                    <input type="number" name="my_qty" class="from-control"
                                        placeholder="your quantity">
                                    <button class="btn btn-danger" type="submit">Submit</button>
                                </form>
                                @else
                                    <p class="text-danger">Out of Stock</p>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

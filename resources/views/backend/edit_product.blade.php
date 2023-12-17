@extends('../layouts/backendmaster')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Column Search -->
            <div class="card py-4">
                <h3 class="text-center">Update Product Name: {{ $product->product_name }}</h3>
                <div class="form w-50 mx-auto">
                    <form action="{{ url('product/update') }}/{{ $product->id }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                            <input type="text" name="update_product_name" value="{{ $product->product_name }}"
                                class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Product Name">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                            <input type="number" name="update_product_price" class="form-control"
                                id="exampleFormControlInput1" value="{{ $product->product_price }}"
                                placeholder="Enter Your Product Price">

                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Quantity</label>
                            <input type="number" name="update_product_quantity" class="form-control"
                                id="exampleFormControlInput1" value="{{ $product->product_quantity }}"
                                placeholder="Enter Your Product Price">

                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Upadate PRODUCT</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/ Column Search -->
        </div>
        <!-- / Content -->
    @endsection

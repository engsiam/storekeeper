@extends('../layouts/backendmaster')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Column Search -->
            <div class="card py-4">
                <h3 class="text-center">Add New Product</h3>
                <div class="form w-50 mx-auto">
                    <form action="{{ route('product.form') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter Your Product Name">
                            @error('product_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Image</label>
                            <input type="file" name="product_image" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter Your Product Name">
                            @error('product_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                            <input type="number" name="product_price" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter Your Product Price">
                            @error('product_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Quantity</label>
                            <input type="number" name="product_quantity" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter Your Product Price">
                            @error('product_quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-danger">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/ Column Search -->
        </div>
        <!-- / Content -->
    @endsection

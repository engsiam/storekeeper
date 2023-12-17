@extends('../layouts/backendmaster')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">DataTables /</span> Products list
            </h4>

            <!-- Ajax Sourced Server-side -->
            <div class="card">
                <h5 class="card-header">List of Products</h5>
                <div class="card-datatable text-nowrap">
                    <table class="datatables-ajax table table-bordered py-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Toal Price</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($products as $product)
                                <tr class="text-center align-middle">
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td><img src="uploads/products/{{ $product->product_image }}"
                                            style="height: 150px; width:150px" alt=""></td>
                                    <td>{{ $product->product_price }}</td>
                                    <td>{{ $product->product_quantity }}</td>
                                    <td>{{ $product->product_quantity * $product->product_price }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            {{-- <button type="button" class="btn btn-danger">Delete</button> --}}
                                            <button type="button" class="btn btn-warning"><a
                                                    style="text-decoration: none;color: white"
                                                    href="{{ url('product/edit') }}/{{ $product->id }}">Edit</a></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </thead>
                    </table>
                </div>
            </div>
            <!--/ Ajax Sourced Server-side -->

            <hr class="my-5">

            <!-- Column Search -->
            {{-- <div class="card">
  <h5 class="card-header">Column Search</h5>
  <div class="card-datatable text-nowrap">
    <table class="dt-column-search table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Post</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Post</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div> --}}
            <!--/ Column Search -->



        </div>
        <!-- / Content -->
    @endsection

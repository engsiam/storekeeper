
@extends('./layouts/backendmaster')

@section('content')
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row row-cols-1 row-cols-md-4 g-4">
              <div class="col ">
                <div class="card h-100 bg-primary ">
                  <div class="card-body">
                    <h2 class="card-title text-white">Today</h2>
                    <h2 class="card-title text-white">10</h2>
                  </div>
                </div>
              </div>
              <div class="col ">
                <div class="card h-100 bg-secondary">
                  <div class="card-body">
                    <h2 class="card-title text-white">Yesterday</h2>
                    <h4 class="card-text">5</h4>
                  </div>
                </div>
              </div>
              <div class="col ">
                <div class="card h-100 bg-warning">
                  <div class="card-body">
                    <h2 class="card-title text-white">This Month</h2>
                    <h4 class="card-text">5</h4>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-success">
                  <div class="card-body">
                    <h2 class="card-title text-white">Last Month</h2>
                    <h4 class="card-text">0</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / Content -->

@endsection








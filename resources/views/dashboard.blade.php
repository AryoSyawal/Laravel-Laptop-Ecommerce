@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Total Shipment</h5>
                    <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-primary"></i>0</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Total Sales</h5>
                    <h3 class="card-title"><i class="tim-icons icon-coins text-info"></i> Rp0-</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Transaction Happened</h5>
                    <h3 class="card-title"><i class="tim-icons icon-wallet-43 text-success"></i>0</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header">
              <h4 class="card-title">Transaction Table</h4>
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table tablesorter " id="">
                  <thead class=" text-primary">
                    <tr>
                      <th>
                        ID
                      </th>
                      <th>
                        Product ID
                      </th>
                      <th>
                        User ID
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush

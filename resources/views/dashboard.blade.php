@extends('layouts.app-admin')
@section('content')
<div class="d-flex flex-column-fluid">
  <div class="container">
<div class="row">
  <div class="col-lg-4">
    <!--begin::Mixed Widget 14-->
    <div class="card card-custom card-stretch gutter-b">
      <!--begin::Header-->
      <div class="card-header border-0 pt-5">
        <h3 class="card-title font-weight-bolder">Statistik Pengunjung</h3>
      </div>
      <!--end::Header-->
      <!--begin::Body-->
      <div class="card-body d-flex flex-column">
        <div class="flex-grow-1">
          <div id="kt_mixed_widget_14_chart" style="height: 250px"></div>
        </div>
        <div class="pt-5">
          <p class="text-center font-weight-normal font-size-lg pb-7">Data Pengunjung Harian
          <a href="#" class="btn btn-success btn-shadow-hover font-weight-bolder w-100 py-3">Cek Detail</a>
        </div>
      </div>
      <!--end::Body-->
    </div>
    <!--end::Mixed Widget 14-->
  </div>
  <div class="col-lg-8">
    <!--begin::Advance Table Widget 4-->
    <div class="card card-custom card-stretch gutter-b">
      <!--begin::Header-->
      <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
          <span class="card-label font-weight-bolder text-dark">Data Transaksi Pelanggan Terbaru</span>
          <span class="text-muted mt-3 font-weight-bold font-size-sm">Rincian Transaksi Hari Ini</span>
        </h3>
      </div>
      <!--end::Header-->
      <!--begin::Body-->
      <div class="card-body pt-0 pb-3">
        <div class="tab-content">
          <!--begin::Table-->
          <div class="table-responsive">
            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
              <thead>
                <tr class="text-left text-uppercase">
                  <th style="min-width: 250px" class="pl-7">
                    <span class="text-dark-75">products</span>
                  </th>
                  <th style="min-width: 100px">earnings</th>
                  <th style="min-width: 100px">comission</th>
                  <th style="min-width: 100px">company</th>
                  <th style="min-width: 130px">rating</th>
                  <th style="min-width: 80px"></th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td class="pl-0 py-0">
                    <div class="d-flex align-items-center">
                      <div class="symbol symbol-50 symbol-light mr-4">
                        <span class="symbol-label">
                          <img src="{{asset('metronic')}}/assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
                        </span>
                      </div>
                      <div>
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali Trump</a>
                        <span class="text-muted font-weight-bold d-block">Python, PostgreSQL, ReactJS</span>
                      </div>
                    </div>
                  </td>
                  <td class="text-left pr-0">
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,600,000</span>
                    <span class="text-muted font-weight-bold">Paid</span>
                  </td>
                  <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$14,000</span>
                    <span class="text-muted font-weight-bold">Pending</span>
                  </td>
                  <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">The Hill</span>
                    <span class="text-muted font-weight-bold">Insurance</span>
                  </td>
                  <td>
                    <img src="{{asset('metronic')}}/assets/media/logos/stars.png" style="width: 5.5rem" alt="" />
                    <span class="text-muted font-weight-bold d-block font-size-sm">Avarage</span>
                  </td>
                  <td class="pr-0 text-right">
                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm" style="width: 7rem">View Offer</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</div>

@endsection

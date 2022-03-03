@extends('admin._layouts.index')

@push('cssScript')
    @include('admin._layouts.css.css')
@endpush

@push('dashboard')
    text-primary
@endpush

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Pendaftar</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        @php
                                            $d = App\Models\Formulir::all()->count();
                                            echo $d;
                                        @endphp
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-1 justify-content-center d-flex">
                            <a href="/cetak-data-pendaftar" target="_blank">Export data Pendaftar<i class="fa fa-arrow-circle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Belum Membayar</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        @php
                                            $d = App\Models\Formulir::where('status',1)->count();
                                            echo $d;
                                        @endphp
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-1 justify-content-center d-flex">
                            <a href="/cetak-data-belum" target="_blank">Export data Belum Bayar<i class="fa fa-arrow-circle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Sudah Membayar</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        @php
                                            $d = App\Models\Formulir::where('status',2)->count();
                                            echo $d;
                                        @endphp
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-1 justify-content-center d-flex">
                            <a href="/cetak-data-sudah" target="_blank">Export data Sudah Bayar<i class="fa fa-arrow-circle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Ruangan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        @php
                                            $d = App\Models\Formulir::max('ruangan');
                                            echo $d;
                                        @endphp
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-1 justify-content-center d-flex">
                            <a href="/cetak-data-peruangan" target="_blank">Export data Ruangan<i class="fa fa-arrow-circle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('jsScript')
    @include('admin._layouts.js.js')
@endpush

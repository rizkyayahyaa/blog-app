@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <!-- Widget for Users, Cars, and Bookings counts -->
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <span><img src="{{ URL::asset('/admin_assets/img/icons/user.svg') }}" alt="img"></span>
                                    <h6>User</h6>
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents">
                                    <div class="home-usercontentcount">
                                        <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}" alt="img" class="me-2">
                                        {{-- <span class="counters" data-count="{{ $users->count() }}">{{ $users->count() }}</span> --}}
                                    </div>
                                    <h5> Currently</h5>
                                </div>
                                <div class="homegraph">
                                    <img src="{{ URL::asset('/admin_assets/img/graph/graph1.png') }}" alt="img">
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

@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <!-- Widget for Users, Posts, Comments, Statistics, and Laporan counts -->
        <div class="row">
            <!-- Users Widget -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <h6>User</h6>
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents">
                                    <div class="home-usercontentcount">
                                        <span class="counters" data-count="{{ $users->count() }}">{{ $users->count() }}</span>
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

            <!-- Posts Widget -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <h6>Posts</h6>
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents">
                                    <div class="home-usercontentcount">
                                        <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}" alt="img" class="me-2">
                                        <span class="counters" data-count="{{ $posts->count() }}">{{ $posts->count() }}</span>
                                    </div>
                                    <h5> Currently</h5>
                                </div>
                                <div class="homegraph">
                                    <img src="{{ URL::asset('/admin_assets/img/graph/graph2.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments Widget -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <h6>Comments</h6>
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents">
                                    <div class="home-usercontentcount">
                                        <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}" alt="img" class="me-2">
                                        <span class="counters" data-count="{{ $comments->count() }}">{{ $comments->count() }}</span>
                                    </div>
                                    <h5> Currently</h5>
                                </div>
                                <div class="homegraph">
                                    <img src="{{ URL::asset('/admin_assets/img/graph/graph3.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Widget -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <h6>Statistics</h6>
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents">
                                    <div class="home-usercontentcount">
                                        <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}" alt="img" class="me-2">
                                        <span class="counters" data-count="{{ $statistics->count() }}">{{ $statistics->count() }}</span>
                                    </div>
                                    <h5> Currently</h5>
                                </div>
                                <div class="homegraph">
                                    <img src="{{ URL::asset('/admin_assets/img/graph/graph4.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Laporan Widget -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <h6>Laporan</h6>
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents">
                                    <div class="home-usercontentcount">
                                        <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}" alt="img" class="me-2">
                                        <span class="counters" data-count="{{ $laporans->count() }}">{{ $laporans->count() }}</span>
                                    </div>
                                    <h5> Currently</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tables displaying data -->
        <div class="row">
            <!-- Users Table -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Users List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Posts Table -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Posts List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->content }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Comments Table -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Comments List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Post ID</th>
                                    <th>Content</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{ $comment->id }}</td>
                                        <td>{{ $comment->post_id }}</td>
                                        <td>{{ $comment->content }}</td>
                                        <td>{{ $comment->created_at }}</td>
                                        <td>{{ $comment->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Statistics Table -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Statistics List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Metric</th>
                                    <th>Value</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($statistics as $statistic)
                                    <tr>
                                        <td>{{ $statistic->id }}</td>
                                        <td>{{ $statistic->metric }}</td>
                                        <td>{{ $statistic->value }}</td>
                                        <td>{{ $statistic->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Laporan Table -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Laporan List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User ID</th>
                                    <th>Report</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($laporans as $laporan)
                                    <tr>
                                        <td>{{ $laporan->id }}</td>
                                        <td>{{ $laporan->user_id }}</td>
                                        <td>{{ $laporan->report }}</td>
                                        <td>{{ $laporan->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

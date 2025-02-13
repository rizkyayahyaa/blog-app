@extends('layout.mainlayout')

@section('content')
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Select User to Chat</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($users as $user)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/img/profiles/avatar-02.jpg') }}"
                                         class="rounded-circle mb-2"
                                         alt="User Avatar"
                                         width="64">
                                    <h5>{{ $user->name }}</h5>
                                    <a href="{{ route('customer.chat', ['receiverId' => $user->id]) }}" class="btn btn-primary">
                                        Chat Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

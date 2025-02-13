@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="page-header">
            <h4>Create Report</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.reports.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select class="form-control" name="user_id" id="user_id" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="post_count">Post Count</label>
                        <input type="number" class="form-control" name="post_count" id="post_count" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Report</button>
                    <a href="{{ route('admin.reports.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

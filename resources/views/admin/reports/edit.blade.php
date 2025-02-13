@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="page-header">
            <h4>Edit Report</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.reports.update', $report->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select class="form-control" name="user_id" id="user_id" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $report->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="post_count">Post Count</label>
                        <input type="number" class="form-control" name="post_count" id="post_count" value="{{ $report->post_count }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Report</button>
                    <a href="{{ route('admin.reports.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

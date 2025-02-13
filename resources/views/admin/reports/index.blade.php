@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="page-header">
            <h4>Manage Reports</h4>
            <a href="{{ route('admin.reports.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Create Report
            </a>
        </div>
        <div class="table-responsive">
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Post Count</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $report)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $report->user->name }}</td>
                            <td>{{ $report->post_count }}</td>
                            <td>{{ $report->created_at->format('Y-m-d H:i') }}</td>
                            <td>
                                <a href="{{ route('admin.reports.edit', $report->id) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.reports.destroy', $report->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

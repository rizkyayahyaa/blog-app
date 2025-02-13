<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        // Mengambil semua laporan
        $reports = Report::with('user')->get();
        return view('admin.reports.index', compact('reports'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat laporan baru
        $users = User::all();
        return view('admin.reports.create', compact('users'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'post_count' => 'required|integer',
        ]);

        // Membuat laporan baru
        Report::create($request->all());

        return redirect()->route('admin.reports.index')->with('success', 'Report created successfully.');
    }

    public function edit($id)
    {
        // Mengambil laporan untuk diedit
        $report = Report::findOrFail($id);
        $users = User::all();
        return view('admin.reports.edit', compact('report', 'users'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'post_count' => 'required|integer',
        ]);

        // Update laporan
        $report = Report::findOrFail($id);
        $report->update($request->all());

        return redirect()->route('admin.reports.index')->with('success', 'Report updated successfully.');
    }

    public function destroy($id)
    {
        // Menghapus laporan
        $report = Report::findOrFail($id);
        $report->delete();

        return redirect()->route('admin.reports.index')->with('success', 'Report deleted successfully.');
    }
}

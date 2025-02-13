@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="page-header">
            <h4>Statistics</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <canvas id="userStatsChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('userStatsChart').getContext('2d');

    // Data yang dikirim dari controller
    const users = @json($users); // Array user_id
    const postCounts = @json($postCounts); // Array jumlah postingan per user

    const userStatsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: users, // Menampilkan user_id sebagai label
            datasets: [{
                label: 'Post Count',
                data: postCounts, // Data jumlah postingan
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        } // Menutup objek options
    }); // Menutup inisialisasi Chart
</script>
@endsection

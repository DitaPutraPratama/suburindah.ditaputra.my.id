<div class="app-content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row mb-4">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon text-bg-primary shadow-sm">
                        <i class="bi bi-graph-up-arrow"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Visitors a Day</span>
                        <span class="info-box-number">
                            <?= $count ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Table Card -->
        <div class="row">
            <div class="col-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Jumlah Data: <?= $totalVisitorsToday ?></h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 50px;">No</th>
                                        <th>IP Address</th>
                                        <th>User Agent</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($visitors)) : ?>
                                        <?php
                                        $start = 1 + (10 * (intval(service('request')->getGet('page') ?? 1) - 1));
                                        foreach ($visitors as $i => $row) :
                                        ?>
                                            <tr>
                                                <td><?= $start + $i ?></td>
                                                <td><?= esc($row['ipaddress']) ?></td>
                                                <td><?= esc($row['useragent']) ?></td>
                                                <td><?= esc($row['created_at']) ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="4" class="text-center">Tidak ada data.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- PAGINATION -->
                        <ul class="pagination justify-content-end mt-3">
                            <?= $pagerVisitors->links('default', 'admin_pagination') ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- </div> -->

            <!-- CHART -->
            <div class="col-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Grafik Pengunjung 7 Hari Terakhir</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="visitorChart"></canvas>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('visitorChart').getContext('2d');

                const visitorChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: <?= json_encode($chartLabels) ?>,
                        datasets: [{
                            label: 'Total Visitor',
                            data: <?= json_encode($chartData) ?>,
                            fill: true,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: '#007bff',
                            tension: 0.4,
                            pointBackgroundColor: '#007bff'
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    precision: 0
                                }
                            }
                        }
                    }
                });
            </script>


        </div>
    </div>
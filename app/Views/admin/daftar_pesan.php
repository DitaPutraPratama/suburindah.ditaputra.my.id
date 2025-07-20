<div class="app-content">
    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">Jumlah Data: <?= $count ?></h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Pesan</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($massages)) : ?>
                                <?php
                                $start = 1 + (10 * (intval(service('request')->getGet('page') ?? 1) - 1));
                                foreach ($massages as $i => $row) :
                                ?>
                                    <tr>
                                        <td><?= $start + $i ?></td>
                                        <td><?= esc($row['name']) ?></td>
                                        <td><?= esc($row['email']) ?></td>
                                        <td><?= esc($row['phone']) ?></td>
                                        <td><?= esc($row['message']) ?></td>
                                        <td><?= esc($row['created_at']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <!-- PAGINATION -->
                <ul class="pagination justify-content-end">
                    <?= $pager->links('default', 'admin_pagination') ?>
                </ul>
            </div>
        </div>
    </div>
</div>
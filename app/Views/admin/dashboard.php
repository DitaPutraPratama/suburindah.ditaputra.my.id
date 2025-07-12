<div class="app-content">
    <div class="container-fluid">
        <h3 class="mb-4">Daftar Pesan Masuk</h3>

        <div class="card">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 50px;">#</th>
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
                                $start = 1 + (10 * (intval($_GET['page'] ?? 1) - 1));
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
                <div class="mt-3">
                    <?= $pager->links() ?>
                </div>
            </div>
        </div>
    </div>
</div>
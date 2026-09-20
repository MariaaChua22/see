<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white">
        <h2 class="h4 mb-0">User Accounts</h2>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle mb-0">
                <thead class="table-primary">
                    <tr>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Role</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= esc($user['username']) ?></td>
                            <td><?= esc($user['name']) ?></td>
                            <td>
                                <span class="badge text-bg-primary">
                                    <?= esc($user['role']) ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
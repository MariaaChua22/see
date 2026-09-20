<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white">
        <h2 class="h4 mb-0">Customer Accounts</h2>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle mb-0">
                <thead class="table-primary">
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($customers as $customer): ?>
                        <tr>
                            <td><?= esc($customer['name']) ?></td>
                            <td><?= esc($customer['email']) ?></td>
                            <td><?= esc($customer['phone']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
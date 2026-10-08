<div class="card shadow-sm border-0">
    <div class="card-header card-header-custom">
        <h2 class="h4 mb-0">Profile</h2>
    </div>

    <div class="card-body">
        <?php if ($user): ?>
            <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
            <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
            <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
            <p>
                <strong>Account Created:</strong>
                <?= esc(date('F j, Y g:i A', strtotime($user['created_at']))) ?>
            </p>
        <?php else: ?>
            <p>No profile information found.</p>
        <?php endif; ?>
    </div>
</div>
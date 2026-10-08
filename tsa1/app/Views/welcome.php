<div class="card shadow-sm border-0">
   <div class="card-header card-header-custom">
        <h2 class="h4 mb-0">Tasks for Today</h2>
    </div>

    <div class="card-body">
        <?php if (empty($tasks)): ?>
            <p class="mb-0">There are no tasks scheduled for today.</p>
        <?php else: ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= esc($task['title']) ?></td>
                            <td><?= esc($task['status']) ?></td>
                            <td><?= esc(date('F j, Y', strtotime($task['task_date']))) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>
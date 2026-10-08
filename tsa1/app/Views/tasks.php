<div class="card shadow-sm border-0">
    <div class="card-header card-header-custom">
        <h2 class="h4 mb-0">All Tasks</h2>
    </div>

    <div class="card-body">

        <?php if (empty($tasks)): ?>
            <p class="mb-0">No tasks found.</p>

        <?php else: ?>

            <!-- Column labels -->
            <div class="row fw-bold mb-2 px-2 task-column-labels">
                <div class="col-md-3">Task</div>
                <div class="col-md-3">Status</div>
                <div class="col-md-3">Task Date</div>
                <div class="col-md-3">Created At</div>
            </div>

            <!-- Task records -->
            <?php foreach ($tasks as $task): ?>
                <div class="card border-0 rounded-4 shadow-sm mb-3">
                    <div class="card-body py-3">

                        <div class="row align-items-center">

                            <div class="col-md-3">
                                <?= esc($task['title']) ?>
                            </div>

                            <div class="col-md-3">
                                <?= esc(ucfirst($task['status'])) ?>
                            </div>

                            <div class="col-md-3">
                                <?= esc(date('F j, Y', strtotime($task['task_date']))) ?>
                            </div>

                            <div class="col-md-3">
                                <?= esc(date('F j, Y g:i A', strtotime($task['created_at']))) ?>
                            </div>

                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        <?php endif; ?>

    </div>
</div>
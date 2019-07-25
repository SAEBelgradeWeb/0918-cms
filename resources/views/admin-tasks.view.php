<?php require "partials/header.php" ?>

<a href="/admin/tasks/insert">Insert New Task</a>
<table>
    <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($tasks as $task): ?>
    <tr>
        <td><?= $task->id ?><td>
        <td><?= $task->description ?></td>
        <td><?= $task->completed ?></td>
        <td>Edit | <a href="/admin/tasks/delete?id=<?= $task->id ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php require "partials/footer.php" ?>

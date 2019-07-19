<?php require "partials/header.php" ?>

<ul>
    <?php foreach ($tasks as $task): ?>
        <?php if ($task->completed): ?>
        <li><strike><?= $task->description ?></strike></li>
        <?php else: ?>
        <li><?= $task->description ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

<h2>Crete a new task!</h2>

<form action="/tasks/submit" method="POST">
    <input type="text" name="description">
    <label for="completed">Completed:</label>
    <input type="checkbox" id="completed" name="completed" value="1">
    <button>Submit</button>
</form>

<?php require "partials/footer.php" ?>
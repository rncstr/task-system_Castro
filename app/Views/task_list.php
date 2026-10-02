<nav>
    <a href="<?= base_url('/') ?>">Welcome</a> | 
    <a href="<?= base_url('tasks') ?>">Task List</a> | 
    <a href="<?= base_url('profile') ?>">Profile</a> | 
    <a href="<?= base_url('about') ?>">About</a>
</nav>
<hr>
<h1>All Tasks</h1>
<table border="1" cellpadding="10">
    <tr><th>Title</th><th>Status</th><th>Date</th></tr>
    <?php foreach ($tasks as $t): ?>
    <tr>
        <td><?= esc($t['title']) ?></td>
        <td><?= esc($t['status']) ?></td>
        <td><?= esc($t['task_date']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
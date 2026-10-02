<nav>
    <a href="<?= base_url('/') ?>">Welcome</a> | 
    <a href="<?= base_url('tasks') ?>">Task List</a> | 
    <a href="<?= base_url('profile') ?>">Profile</a> | 
    <a href="<?= base_url('about') ?>">About</a>
</nav>
<hr>
<h1>User Profile</h1>
<?php if ($user): ?>
    <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
    <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
    <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
    <p><strong>Joined:</strong> <?= esc($user['created_at']) ?></p>
<?php endif; ?>
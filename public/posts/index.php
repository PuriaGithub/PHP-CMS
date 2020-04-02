<?php require_once('../../private/initialize.php') ?>
<?php $page_title = "Posts"; ?>
<?php include(SHARED_PATH . '/dashboard/header.php') ?>

<?php

$posts = [
    ['id' => 1, 'title' => 'Sample Title', 'created_at' => date('Y - m - d'), 'status' => 'Published'],
    ['id' => 2, 'title' => 'Sample Post', 'created_at' => date('Y - m - d'), 'status' => 'Published'],
    ['id' => 3, 'title' => 'Hello World', 'created_at' => date('Y - m - d'), 'status' => 'Draft'],
];




?>

<div class="content">
    <h1 class="lead">Posts</h1>
    <div class="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li>
                <a href="<?php echo url('dashboard/index.php'); ?>">Home</a>
            </li>
        </ul>
    </div>
    <div>
        <table>
            <caption>
                <a href="#">Create New Post</a>
            </caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created at</th>
                    <th colspan="4">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post) : ?>
                    <tr>
                        <td><?php echo $post['id'] ?></td>
                        <td><?php echo $post['title'] ?></td>
                        <td><?php echo $post['created_at'] ?></td>
                        <td><?php echo $post['status'] ?></td>
                        <td>
                            <a href="<?php echo url('/posts/show.php?id=' . $post['id']); ?>">View</a>
                        </td>
                        <td>
                            <a href="#">Edit</a>
                        </td>
                        <td>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include(SHARED_PATH . '/dashboard/footer.php') ?>
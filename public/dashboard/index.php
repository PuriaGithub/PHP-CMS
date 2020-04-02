<?php require_once('../../private/initialize.php') ?>
<?php $page_title = "Dashboard"; ?>
<?php include( SHARED_PATH . '/dashboard/header.php') ?>

<div class="content">
    <h1 class="lead">Welcome to Dashboard</h1>
    <div class="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li>
                <a href="<?php echo url('posts/index.php'); ?>">Posts</a>
            </li>
        </ul>
    </div>
</div>

<?php include( SHARED_PATH . '/dashboard/footer.php') ?>
<?php require_once('../../../private/initialize.php'); ?>

<?php $id = $_GET['id'] ?? '1'; ?>
<?php $page_title = 'Show Page'; ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <a class="back-link" href="<?= url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a><br>
    <div class="page show">
        Page ID: <?= h($id); ?>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
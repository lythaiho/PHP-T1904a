<?php
$message = isset($_SESSION['message']) ? $_SESSION['message'] : null;
if (isset($message)) {
    if ($message['type'] === 'success') { ?>
        <div class="alert alert-success alert-dismissible fade show flash-message" role="alert">
    <?php } else { ?>
        <div class="alert alert-warning alert-dismissible fade show flash-message" role="alert">
    <?php } ?>
    <?php echo $message['message'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php }
$_SESSION['message'] = null;

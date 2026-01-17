<main id="main" class="main">
    <?php
    if (!isset($_GET['menu']) || $_GET['menu'] == '') {
        include('content/dashboard.php');
    }
    elseif($_GET['menu'] == 'table') {
        include('content/table.php');
    }
    elseif($_GET['menu'] == 'add_user') {
        include('content/add_user.php');
    }
    elseif($_GET['menu'] == 'edit_user') {
        include('content/edit_user.php');
    }
    elseif($_GET['menu'] == 'delete_user') {
        include('content/delete_user.php');
    }
    elseif($_GET['menu'] == 'table_jenis_sampah') {
        include('content/jenis_sampah/table_jenis_sampah.php');
    }
    elseif($_GET['menu'] == 'add_jenis_sampah') {
        include('content/jenis_sampah/add_jenis_sampah.php');
    }
    elseif($_GET['menu'] == 'edit_jenis_sampah') {
        include('content/jenis_sampah/edit_jenis_sampah.php');
    }
    elseif($_GET['menu'] == 'delete_jenis_sampah') {
        include('content/jenis_sampah/delete_jenis_sampah.php');
    }
    elseif($_GET['menu'] == 'upload') {
        include('content/upload.php');
    }
    elseif($_GET['menu'] == 'upload_list') {
        include('content/upload_list.php');
    }
    elseif($_GET['menu'] == 'process_upload') {
        include(__DIR__ . 'upload_file/processs_upload.php');
    }
    else {
        include('content/blank.php');
    }
    ?>
</main>
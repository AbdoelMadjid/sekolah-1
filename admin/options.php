<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

?>
<ul class="nav nav-tabs">
    <li class="active"><a href="#general" data-toggle="tab">General</a></li>
    <li><a href="#dapodik" data-toggle="tab">Dapodik</a></li>
</ul>


<div class="tab-content">
    <div class="tab-pane active" id="general">
        Hi, !!
    </div>

    <div class="tab-pane" id="dapodik">
        <?php
        if (! function_exists('pg_connect')) {
            echo '<div class="alert"><strong>PERHATIAN !!</strong> Ekstensi PostgreSQL tidak terinstall, Impor data dapodik tidak akan berhasil.</div>';
        }
        ?>
        <div class="control-group">
            <label class="control-label">Host</label>
            <div class="controls">
                <?php echo form_input('sekolah[dapodik_db_host]', kconfig('sekolah', 'dapodik_db_host', 'localhost'), 'id="dapodik_db_host"'); ?>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Port</label>
            <div class="controls">
                <?php echo form_input('sekolah[dapodik_db_port]', kconfig('sekolah', 'dapodik_db_port', '5432'), 'id="dapodik_db_port"'); ?>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">User</label>
            <div class="controls">
                <?php echo form_input('sekolah[dapodik_db_user]', kconfig('sekolah', 'dapodik_db_user', 'postgres'), 'id="dapodik_db_user"'); ?>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Password</label>
            <div class="controls">
                <?php echo form_input('sekolah[dapodik_db_password]', kconfig('sekolah', 'dapodik_db_password', 'd4p0d1kd452013!'), 'id="dapodik_db_password"'); ?>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Database</label>
            <div class="controls">
                <?php echo form_input('sekolah[dapodik_db_database]', kconfig('sekolah', 'dapodik_db_database', 'pendataan'), 'id="dapodik_db_database"'); ?>
            </div>
        </div>
    </div>
</div>

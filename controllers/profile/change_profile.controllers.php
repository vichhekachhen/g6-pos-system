<?php
require_once 'database/database.php';
require_once 'models/change_profile_process.model.php';

$edit = getEditUser();
echo $edit['Hi world'];
require_once 'views/profile/edit_profile.view.php';



<script>
var Globals = <?php echo json_encode(array(
    'base_url' =>\Config::get('app.url'),
    'setting_content' =>\DB::table('sitesettings')->first(),
    'outlet_id'=>Auth::user()->outletid,
    'message' =>__('messages.message'),
    'user_select' =>__('messages.user_select'),
    'set_up' =>__('messages.set_up'),
    'permission_delete' =>__('messages.permission_delete'),
    'all_fields_required' =>__('messages.all_fields_required'),
    'password_not_match' =>__('messages.password_not_match'),
    'user_created' =>__('messages.user_created'),
    'email_already_database' =>__('messages.email_already_database'),
    'name_length' =>__('messages.name_length'),
    'email_length' =>__('messages.email_length'),
    'password_length' =>__('messages.password_length'),
    'user_delete' =>__('messages.user_delete'),
    'role_delete' =>__('messages.role_delete'),
    'role_delete_confirm' =>__('messages.role_delete_confirm'),
    'select_image' =>__('messages.select_image'),
    'no_permission_change_email' =>__('messages.no_permission_change_email'),
    'fname_required' =>__('messages.fname_required'),
    'lname_required' =>__('messages.lname_required'),
    'full_name_required' =>__('messages.full_name_required'),
    'email_required' =>__('messages.email_required'),
    'phone_required' =>__('messages.phone_required'),
    'dob_required' =>__('messages.dob_required'),
    'postal_required' =>__('messages.postal_required'),
    'email_exist' =>__('messages.email_exist'),
    'user_update' =>__('messages.user_update'),
    'check_internet_connection' =>__('messages.check_internet_connection'),
    'password_changed' =>__('messages.password_changed'),
    'no_selected_user' =>__('messages.no_selected_user'),
    'no_pemission_left' =>__('messages.no_pemission_left'),
    'permission_delete_confirm' =>__('messages.permission_delete_confirm'),
    'user_delete_confirm' =>__('messages.user_delete_confirm'),
    
)); ?>;
</script>
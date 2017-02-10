<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\DataRow;


class InitialSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $data_rows = array(
            array('id' => '1', 'data_type_id' => '1', 'field' => 'id', 'type' => 'PRI', 'display_name' => 'id', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '2', 'data_type_id' => '1', 'field' => 'name', 'type' => 'text', 'display_name' => 'name', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '3', 'data_type_id' => '1', 'field' => 'email', 'type' => 'text', 'display_name' => 'email', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '4', 'data_type_id' => '1', 'field' => 'password', 'type' => 'password', 'display_name' => 'password', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '1', 'add' => '1', 'delete' => '0', 'details' => ''),
            array('id' => '5', 'data_type_id' => '1', 'field' => 'remember_token', 'type' => 'text', 'display_name' => 'remember_token', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '6', 'data_type_id' => '1', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'created_at', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => ''),
            array('id' => '7', 'data_type_id' => '1', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'updated_at', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '8', 'data_type_id' => '1', 'field' => 'avatar', 'type' => 'image', 'display_name' => 'avatar', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '9', 'data_type_id' => '2', 'field' => 'id', 'type' => 'PRI', 'display_name' => 'id', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '10', 'data_type_id' => '2', 'field' => 'name', 'type' => 'text', 'display_name' => 'name', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '11', 'data_type_id' => '2', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'created_at', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => ''),
            array('id' => '12', 'data_type_id' => '2', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'updated_at', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '13', 'data_type_id' => '3', 'field' => 'id', 'type' => 'PRI', 'display_name' => 'id', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '14', 'data_type_id' => '3', 'field' => 'name', 'type' => 'text', 'display_name' => 'Name', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '15', 'data_type_id' => '3', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'created_at', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '16', 'data_type_id' => '3', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'updated_at', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '17', 'data_type_id' => '3', 'field' => 'display_name', 'type' => 'text', 'display_name' => 'Display Name', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '18', 'data_type_id' => '1', 'field' => 'role_id', 'type' => 'text', 'display_name' => 'role_id', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '1', 'add' => '1', 'delete' => '0', 'details' => ''),
            array('id' => '19', 'data_type_id' => '4', 'field' => 'id', 'type' => 'PRI', 'display_name' => 'Id', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '20', 'data_type_id' => '4', 'field' => 'category_id', 'type' => 'select_dropdown', 'display_name' => 'Category Id', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{
    "relationship": {
        "key": "id",
        "label": "name"
    }
}'),
            array('id' => '21', 'data_type_id' => '4', 'field' => 'name', 'type' => 'text', 'display_name' => 'Name', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '22', 'data_type_id' => '4', 'field' => 'image', 'type' => 'image', 'display_name' => 'Image', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '23', 'data_type_id' => '4', 'field' => 'price', 'type' => 'text', 'display_name' => 'Price', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '24', 'data_type_id' => '4', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => ''),
            array('id' => '25', 'data_type_id' => '4', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '26', 'data_type_id' => '5', 'field' => 'id', 'type' => 'PRI', 'display_name' => 'Id', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '27', 'data_type_id' => '5', 'field' => 'parent_id', 'type' => 'select_dropdown', 'display_name' => 'Parent Id', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{
    "relationship": {
        "key": "id",
        "label": "name"
    }
}'),
            array('id' => '28', 'data_type_id' => '5', 'field' => 'name', 'type' => 'text', 'display_name' => 'Name', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '29', 'data_type_id' => '5', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => ''),
            array('id' => '30', 'data_type_id' => '5', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '31', 'data_type_id' => '6', 'field' => 'id', 'type' => 'PRI', 'display_name' => 'Id', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '32', 'data_type_id' => '6', 'field' => 'title', 'type' => 'text', 'display_name' => 'Title', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '33', 'data_type_id' => '6', 'field' => 'details', 'type' => 'text_area', 'display_name' => 'Details', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => ''),
            array('id' => '34', 'data_type_id' => '6', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => ''),
            array('id' => '35', 'data_type_id' => '6', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '36', 'data_type_id' => '7', 'field' => 'id', 'type' => 'PRI', 'display_name' => 'Id', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '37', 'data_type_id' => '7', 'field' => 'name', 'type' => 'text', 'display_name' => 'Name', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '38', 'data_type_id' => '7', 'field' => 'email', 'type' => 'text', 'display_name' => 'Email', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '39', 'data_type_id' => '7', 'field' => 'subject', 'type' => 'text', 'display_name' => 'Subject', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '40', 'data_type_id' => '7', 'field' => 'message', 'type' => 'text', 'display_name' => 'Message', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '41', 'data_type_id' => '7', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => ''),
            array('id' => '42', 'data_type_id' => '7', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '')
        );

        $data_types = array(
            array('id' => '1', 'name' => 'users', 'slug' => 'users', 'display_name_singular' => 'User', 'display_name_plural' => 'Users', 'icon' => 'voyager-person', 'model_name' => 'App\\User', 'description' => '', 'generate_permissions' => '1', 'server_side' => '0', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '2', 'name' => 'menus', 'slug' => 'menus', 'display_name_singular' => 'Menu', 'display_name_plural' => 'Menus', 'icon' => 'voyager-list', 'model_name' => 'TCG\\Voyager\\Models\\Menu', 'description' => '', 'generate_permissions' => '1', 'server_side' => '0', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '3', 'name' => 'roles', 'slug' => 'roles', 'display_name_singular' => 'Role', 'display_name_plural' => 'Roles', 'icon' => 'voyager-lock', 'model_name' => 'TCG\\Voyager\\Models\\Role', 'description' => '', 'generate_permissions' => '1', 'server_side' => '0', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '4', 'name' => 'products', 'slug' => 'products', 'display_name_singular' => 'Product', 'display_name_plural' => 'Products', 'icon' => '', 'model_name' => 'App\\Models\\Product', 'description' => '', 'generate_permissions' => '0', 'server_side' => '1', 'created_at' => '2017-01-20 16:01:59', 'updated_at' => '2017-01-20 16:01:59'),
            array('id' => '5', 'name' => 'categories', 'slug' => 'categories', 'display_name_singular' => 'Category', 'display_name_plural' => 'Categories', 'icon' => 'voyager-categories', 'model_name' => 'App\\Models\\Category', 'description' => '', 'generate_permissions' => '1', 'server_side' => '0', 'created_at' => '2017-01-26 00:37:25', 'updated_at' => '2017-01-26 00:48:16'),
            array('id' => '6', 'name' => 'news', 'slug' => 'news', 'display_name_singular' => 'News', 'display_name_plural' => 'News', 'icon' => 'voyager-news', 'model_name' => 'App\\Models\\News', 'description' => '', 'generate_permissions' => '1', 'server_side' => '1', 'created_at' => '2017-01-28 03:09:30', 'updated_at' => '2017-01-28 03:09:30'),
            array('id' => '7', 'name' => 'messages', 'slug' => 'messages', 'display_name_singular' => 'الرسالة', 'display_name_plural' => 'الرسائل', 'icon' => 'voyager-file-text', 'model_name' => 'App\\Models\\Message', 'description' => '', 'generate_permissions' => '1', 'server_side' => '1', 'created_at' => '2017-01-29 03:34:47', 'updated_at' => '2017-01-29 03:34:47')
        );

        $menus = array(
            array('id' => '1', 'name' => 'admin', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40')
        );

        $menu_items = array(
            array('id' => '1', 'menu_id' => '1', 'title' => 'Dashboard', 'url' => '/admin', 'target' => '_self', 'icon_class' => 'voyager-boat', 'color' => NULL, 'parent_id' => NULL, 'order' => '1', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '2', 'menu_id' => '1', 'title' => 'Media', 'url' => '/admin/media', 'target' => '_self', 'icon_class' => 'voyager-images', 'color' => NULL, 'parent_id' => NULL, 'order' => '7', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-29 03:36:03'),
            array('id' => '3', 'menu_id' => '1', 'title' => 'Users', 'url' => '/admin/users', 'target' => '_self', 'icon_class' => 'voyager-person', 'color' => NULL, 'parent_id' => NULL, 'order' => '2', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-28 03:10:39'),
            array('id' => '5', 'menu_id' => '1', 'title' => 'Tools', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-tools', 'color' => NULL, 'parent_id' => NULL, 'order' => '8', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-29 03:36:03'),
            array('id' => '6', 'menu_id' => '1', 'title' => 'Menu Builder', 'url' => '/admin/menus', 'target' => '_self', 'icon_class' => 'voyager-list', 'color' => NULL, 'parent_id' => '5', 'order' => '1', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-20 21:43:46'),
            array('id' => '7', 'menu_id' => '1', 'title' => 'Database', 'url' => '/admin/database', 'target' => '_self', 'icon_class' => 'voyager-data', 'color' => NULL, 'parent_id' => '5', 'order' => '2', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-20 21:43:46'),
            array('id' => '8', 'menu_id' => '1', 'title' => 'Settings', 'url' => '/admin/settings', 'target' => '_self', 'icon_class' => 'voyager-settings', 'color' => NULL, 'parent_id' => NULL, 'order' => '9', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-29 03:36:03'),
            array('id' => '9', 'menu_id' => '1', 'title' => 'المنتجات', 'url' => '/admin/products', 'target' => '_self', 'icon_class' => 'voyager-phone', 'color' => '#000000', 'parent_id' => NULL, 'order' => '4', 'created_at' => '2017-01-20 21:43:35', 'updated_at' => '2017-01-28 03:10:56'),
            array('id' => '10', 'menu_id' => '1', 'title' => 'التصنيفات', 'url' => '/admin/categories', 'target' => '_self', 'icon_class' => 'voyager-categories', 'color' => '#000000', 'parent_id' => NULL, 'order' => '3', 'created_at' => '2017-01-26 00:38:50', 'updated_at' => '2017-01-28 03:11:19'),
            array('id' => '11', 'menu_id' => '1', 'title' => 'الأخبار', 'url' => '/admin/news', 'target' => '_self', 'icon_class' => 'voyager-news', 'color' => '#000000', 'parent_id' => NULL, 'order' => '5', 'created_at' => '2017-01-28 03:10:30', 'updated_at' => '2017-01-28 03:10:39'),
            array('id' => '12', 'menu_id' => '1', 'title' => 'الرسائل', 'url' => '/admin/messages', 'target' => '_self', 'icon_class' => 'voyager-file-text', 'color' => '#000000', 'parent_id' => NULL, 'order' => '6', 'created_at' => '2017-01-29 03:35:58', 'updated_at' => '2017-01-29 03:36:03')
        );

        $permissions = array(
            array('id' => '1', 'key' => 'browse_admin', 'table_name' => 'admin', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '2', 'key' => 'browse_database', 'table_name' => 'admin', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '3', 'key' => 'browse_media', 'table_name' => 'admin', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '4', 'key' => 'browse_settings', 'table_name' => 'admin', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '5', 'key' => 'browse_menus', 'table_name' => 'menus', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '6', 'key' => 'read_menus', 'table_name' => 'menus', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '7', 'key' => 'edit_menus', 'table_name' => 'menus', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '8', 'key' => 'add_menus', 'table_name' => 'menus', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '9', 'key' => 'delete_menus', 'table_name' => 'menus', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '15', 'key' => 'browse_roles', 'table_name' => 'roles', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '16', 'key' => 'read_roles', 'table_name' => 'roles', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '17', 'key' => 'edit_roles', 'table_name' => 'roles', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '18', 'key' => 'add_roles', 'table_name' => 'roles', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '19', 'key' => 'delete_roles', 'table_name' => 'roles', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '20', 'key' => 'browse_users', 'table_name' => 'users', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '21', 'key' => 'read_users', 'table_name' => 'users', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '22', 'key' => 'edit_users', 'table_name' => 'users', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '23', 'key' => 'add_users', 'table_name' => 'users', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '24', 'key' => 'delete_users', 'table_name' => 'users', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '30', 'key' => 'browse_categories', 'table_name' => 'categories', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '31', 'key' => 'read_categories', 'table_name' => 'categories', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '32', 'key' => 'edit_categories', 'table_name' => 'categories', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '33', 'key' => 'add_categories', 'table_name' => 'categories', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '34', 'key' => 'delete_categories', 'table_name' => 'categories', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40'),
            array('id' => '35', 'key' => 'browse_news', 'table_name' => 'news', 'created_at' => '2017-01-28 03:09:30', 'updated_at' => '2017-01-28 03:09:30'),
            array('id' => '36', 'key' => 'read_news', 'table_name' => 'news', 'created_at' => '2017-01-28 03:09:30', 'updated_at' => '2017-01-28 03:09:30'),
            array('id' => '37', 'key' => 'edit_news', 'table_name' => 'news', 'created_at' => '2017-01-28 03:09:30', 'updated_at' => '2017-01-28 03:09:30'),
            array('id' => '38', 'key' => 'add_news', 'table_name' => 'news', 'created_at' => '2017-01-28 03:09:30', 'updated_at' => '2017-01-28 03:09:30'),
            array('id' => '39', 'key' => 'delete_news', 'table_name' => 'news', 'created_at' => '2017-01-28 03:09:30', 'updated_at' => '2017-01-28 03:09:30'),
            array('id' => '40', 'key' => 'browse_messages', 'table_name' => 'messages', 'created_at' => '2017-01-29 03:34:47', 'updated_at' => '2017-01-29 03:34:47'),
            array('id' => '41', 'key' => 'read_messages', 'table_name' => 'messages', 'created_at' => '2017-01-29 03:34:47', 'updated_at' => '2017-01-29 03:34:47'),
            array('id' => '42', 'key' => 'edit_messages', 'table_name' => 'messages', 'created_at' => '2017-01-29 03:34:47', 'updated_at' => '2017-01-29 03:34:47'),
            array('id' => '43', 'key' => 'add_messages', 'table_name' => 'messages', 'created_at' => '2017-01-29 03:34:47', 'updated_at' => '2017-01-29 03:34:47'),
            array('id' => '44', 'key' => 'delete_messages', 'table_name' => 'messages', 'created_at' => '2017-01-29 03:34:47', 'updated_at' => '2017-01-29 03:34:47')
        );

        $permission_role = array(
            array('permission_id' => '1', 'role_id' => '1'),
            array('permission_id' => '2', 'role_id' => '1'),
            array('permission_id' => '3', 'role_id' => '1'),
            array('permission_id' => '4', 'role_id' => '1'),
            array('permission_id' => '5', 'role_id' => '1'),
            array('permission_id' => '6', 'role_id' => '1'),
            array('permission_id' => '7', 'role_id' => '1'),
            array('permission_id' => '8', 'role_id' => '1'),
            array('permission_id' => '9', 'role_id' => '1'),
            array('permission_id' => '15', 'role_id' => '1'),
            array('permission_id' => '16', 'role_id' => '1'),
            array('permission_id' => '17', 'role_id' => '1'),
            array('permission_id' => '18', 'role_id' => '1'),
            array('permission_id' => '19', 'role_id' => '1'),
            array('permission_id' => '20', 'role_id' => '1'),
            array('permission_id' => '21', 'role_id' => '1'),
            array('permission_id' => '22', 'role_id' => '1'),
            array('permission_id' => '23', 'role_id' => '1'),
            array('permission_id' => '24', 'role_id' => '1'),
            array('permission_id' => '30', 'role_id' => '1'),
            array('permission_id' => '31', 'role_id' => '1'),
            array('permission_id' => '32', 'role_id' => '1'),
            array('permission_id' => '33', 'role_id' => '1'),
            array('permission_id' => '34', 'role_id' => '1'),
            array('permission_id' => '35', 'role_id' => '1'),
            array('permission_id' => '36', 'role_id' => '1'),
            array('permission_id' => '37', 'role_id' => '1'),
            array('permission_id' => '38', 'role_id' => '1'),
            array('permission_id' => '39', 'role_id' => '1'),
            array('permission_id' => '40', 'role_id' => '1'),
            array('permission_id' => '41', 'role_id' => '1'),
            array('permission_id' => '42', 'role_id' => '1'),
            array('permission_id' => '43', 'role_id' => '1'),
            array('permission_id' => '44', 'role_id' => '1')
        );

        $roles = array(
            array('id' => '1', 'name' => 'admin', 'display_name' => 'Administrator', 'created_at' => '2017-01-19 00:14:40', 'updated_at' => '2017-01-19 00:14:40')
        );

        $settings = array(
            array('id' => '10', 'key' => 'home_image', 'display_name' => 'Home Page Image', 'value' => 'settings/January2017/EBm1zOwCGfBmmtEh5A04.jpg', 'details' => '{
    "resize": {
        "width": "1680",
        "height": "954"
    },
    "quality" : "70%",
}', 'type' => 'image', 'order' => '0'),
            array('id' => '11', 'key' => 'about_us_title', 'display_name' => 'About us title', 'value' => 'about us title sjhajdhkjd', 'details' => '', 'type' => 'text', 'order' => '1'),
            array('id' => '13', 'key' => 'about_us_small_disc', 'display_name' => 'About us small Description', 'value' => '                                kjdlkfjls afjlkadshf jdhfkldj sahfdkajlhfa kldjhfadkljsh dsjfhdsakjfhlkjdsahf kljdsafkladshdslkjfhadlkdfh                            ', 'details' => '', 'type' => 'text_area', 'order' => '2'),
            array('id' => '14', 'key' => 'about_us_disc', 'display_name' => 'About us Description', 'value' => '                                adfahf dakjslfhaldskjhf adsjkhflkjhklj adfahf dakjslfhaldskjhf adsjkhflkjhklj  adfahf dakjslfhaldskjhf adsjkhflkjhklj adfahf dakjslfhaldskjhf adsjkhflkjhklj adfahf dakjslfhaldskjhf adsjkhflkjhklj adfahf dakjslfhaldskjhf adsd                            ', 'details' => '', 'type' => 'text_area', 'order' => '3'),
            array('id' => '15', 'key' => 'about_us_title_ar', 'display_name' => 'من نحن العنوان', 'value' => 'العنوان ل من نحن', 'details' => '', 'type' => 'text', 'order' => '4'),
            array('id' => '16', 'key' => 'about_us_small_disc_ar', 'display_name' => 'من نحن مختصر', 'value' => '                                من نحن مختصر                            ', 'details' => '', 'type' => 'text_area', 'order' => '5'),
            array('id' => '17', 'key' => 'about_us_disc_ar', 'display_name' => 'من نحن كامل', 'value' => '                                من نحن ينيلتبيشلب بشباشنتياب شستابميتنشساب نمتشيساب نمتشيساب منتشيسامب شياسمنتبا نمشستيبا منبيتا                            ', 'details' => '', 'type' => 'text_area', 'order' => '6'),
            array('id' => '18', 'key' => 'admin_title', 'display_name' => 'Admin Title', 'value' => 'Flashtech', 'details' => '', 'type' => 'text', 'order' => '7'),
            array('id' => '19', 'key' => 'admin_description', 'display_name' => 'Admin Description', 'value' => 'Flashtech Admin Panel', 'details' => '', 'type' => 'text', 'order' => '8'),
            array('id' => '20', 'key' => 'app_id', 'display_name' => 'Facebook app_id', 'value' => '1811543022426737', 'details' => '', 'type' => 'text', 'order' => '9'),
            array('id' => '21', 'key' => 'app_secret', 'display_name' => 'Facebook app_secret', 'value' => '8eecda49d368724121d3683a63780fb1', 'details' => '', 'type' => 'text', 'order' => '10'),
            array('id' => '22', 'key' => 'facebook_page_id', 'display_name' => 'Facebook page_id', 'value' => 'HassaniaForGifts', 'details' => '', 'type' => 'text', 'order' => '11')
        );

        $users = array(
            array('id' => '1', 'name' => 'admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$lYj3hLWcFnV/cev3PFP/6e0/9dJTn6uuU7KHq/ktqX2pyaHJtWEua', 'remember_token' => NULL, 'created_at' => '2017-01-19 00:14:53', 'updated_at' => '2017-01-19 00:14:53', 'avatar' => 'users/default.png', 'role_id' => '1')
        );

        DB::table('settings')->insert($settings);
        DB::table('roles')->insert($roles);
        DB::table('permissions')->insert($permissions);
        DB::table('permission_role')->insert($permission_role);
        DB::table('users')->insert($users);
        DB::table('menus')->insert($menus);
        DB::table('menu_items')->insert($menu_items);
        DB::table('data_types')->insert($data_types);
        DB::table('data_rows')->insert($data_rows);
    }
}

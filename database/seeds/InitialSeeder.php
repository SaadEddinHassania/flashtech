<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

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
        $productDataType = DataType::firstOrNew([
            'slug' => 'products',
        ]);
        if (!$productDataType->exists) {
            $productDataType->fill([
                'name' => 'products',
                'display_name_singular' => 'Product',
                'display_name_plural' => 'Products',
                'icon' => 'voyager-list',
                'model_name' => 'App\\Models\\Product',
                'generate_permissions' => 0,
                'server_side' => 1,
                'description' => '',
            ])->save();
        }

//        $userDataType = DataType::where('slug', 'products')->firstOrFail();

        $dataRow = DataRow::firstOrNew([
            'data_type_id' => $productDataType->id,
            'field' => 'id',
        ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'PRI',
                'display_name' => 'Id',
                'required' => '1',
                'browse' => '0',
                'read' => '0',
                'edit' => '0',
                'add' => '0',
                'delete' => '0',
                'details' => ''
            ])->save();
        }

        $dataRow = DataRow::firstOrNew([
            'data_type_id' => $productDataType->id,
            'field' => 'category_id',
        ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'select_dropdown', 'display_name' => 'Category Id', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{
    "relationship": {
        "key": "id",
        "label": "name"
    }
}'
            ])->save();
        }

        $dataRow = DataRow::firstOrNew([
            'data_type_id' => $productDataType->id,
            'field' => 'name',
        ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => ''
            ])->save();
        }

        $dataRow = DataRow::firstOrNew([
            'data_type_id' => $productDataType->id,
            'field' => 'image',
        ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'image','display_name' => 'Image','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => ''
            ])->save();
        }

        $dataRow = DataRow::firstOrNew([
            'data_type_id' => $productDataType->id,
            'field' => 'price',
        ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text','display_name' => 'Price','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => ''
            ])->save();
        }

        $dataRow = DataRow::firstOrNew([
            'data_type_id' => $productDataType->id,
            'field'        => 'created_at',
        ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
            'data_type_id' => $productDataType->id,
            'field'        => 'updated_at',
        ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
            ])->save();
        }

        $menu = Menu::where('name', 'admin')->firstOrFail();

        $menuItem = MenuItem::firstOrNew([
            'menu_id'    => $menu->id,
            'title'      => 'Products',
            'url'        => '/admin/products',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-data',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 4,
            ])->save();
        }
    }
}

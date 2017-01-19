<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class DataRowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $userDataType = DataType::where('slug', 'users')->firstOrFail();
        $menuDataType = DataType::where('slug', 'menus')->firstOrFail();
        $roleDataType = DataType::where('slug', 'roles')->firstOrFail();

        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $userDataType->id,
                    'field'        => 'id',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'PRI',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $userDataType->id,
                    'field'        => 'name',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $userDataType->id,
                    'field'        => 'email',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'email',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $userDataType->id,
                    'field'        => 'password',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'password',
                'display_name' => 'password',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $userDataType->id,
                    'field'        => 'remember_token',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'remember_token',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $userDataType->id,
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
                    'data_type_id' => $userDataType->id,
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
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $userDataType->id,
                    'field'        => 'avatar',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'avatar',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $menuDataType->id,
                    'field'        => 'id',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'PRI',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $menuDataType->id,
                    'field'        => 'name',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $menuDataType->id,
                    'field'        => 'created_at',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $menuDataType->id,
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

        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $roleDataType->id,
                    'field'        => 'id',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'PRI',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $roleDataType->id,
                    'field'        => 'name',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $roleDataType->id,
                    'field'        => 'created_at',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
            ])->save();
        }
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $roleDataType->id,
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
        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $roleDataType->id,
                    'field'        => 'display_name',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Display Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
            ])->save();
        }

        $dataRow = DataRow::firstOrNew([
                    'data_type_id' => $userDataType->id,
                    'field'        => 'role_id',
            ]);
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'role_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
            ])->save();
        }
    }
}

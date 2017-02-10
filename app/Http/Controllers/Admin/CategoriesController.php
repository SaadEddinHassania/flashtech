<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\CategoryField;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function updateExtra(Request $request, $id)
    {
        $ids = $request->all()['id'];
        $fields = $request->all()['field'];
        $types = $request->all()['type'];
        $details = $request->all()['details'];

        foreach ($ids as $key=>$i){
            $field = CategoryField::find($i);
            $field->field = $fields[$key];
            $field->type = $types[$key];
            $field->details = $details[$key];
            $field->save();
        }

        return redirect()
            ->route("voyager.categories.edit",$id)
            ->with([
                'message'    => "Successfully edit Category fields",
                'alert-type' => 'success',
            ]);
    }

    public function addExtra(Request $request, $id)
    {
        $categoryField = new CategoryField($request->all());

        $categoryField->category_id = $id;
        $categoryField->save();

//        $category->fields->save($request->all());

        return redirect()
            ->route("voyager.categories.edit",$id)
            ->with([
                'message'    => "Successfully create Category fields",
                'alert-type' => 'success',
            ]);
    }

}

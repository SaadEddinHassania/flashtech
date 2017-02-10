<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\CategoryField;
use App\Models\News;
use App\Models\ProductValue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function updateTranslations(Request $request, $id)
    {
        $news = News::find($id);
        foreach ($request->all() as $key => $value) {
//            return array_has($news->toArray(),$key).'sss';
            if(!array_has($news->toArray(),$key))
            {
                continue;
            }
            $translation = $news->translations()->where('key', $key)->first();

            if (is_null($translation)) {
                $news->translations()->create(['key' => $key, 'value' => $request[$key]]);
            } else {
                $translation->update(['key' => $key, 'value' => $request[$key]]);
            }
        }

        return redirect()
            ->route("voyager.news.edit", $id)
            ->with([
                'message' => "Successfully edit translations",
                'alert-type' => 'success',
            ]);
    }

    public function saveManyTypes(Request $request, $field, $type)
    {
        switch ($type) {

            case 'file':
                if ($file = $request->file($field)) {
                    $filename = Str::random(20);
                    $path = 'products/' . date('F') . date('Y') . '/';
                    $fullPath = $path . $filename . '.' . $file->getClientOriginalExtension();

                    $request->file($field)->storeAs(config('voyager.storage.subfolder') . $path, $filename . '.' . $file->getClientOriginalExtension());

                    return $fullPath;
                }
            case 'image':
                if ($request->hasFile($row->field)) {
                    $file = $request->file($row->field);
                    $filename = Str::random(20);

                    $path = 'products/' . date('F') . date('Y') . '/';
                    $fullPath = $path . $filename . '.' . $file->getClientOriginalExtension();

                    $options = json_decode($row->details);

                    if (isset($options->resize) && isset($options->resize->width) && isset($options->resize->height)) {
                        $resize_width = $options->resize->width;
                        $resize_height = $options->resize->height;
                    } else {
                        $resize_width = 1800;
                        $resize_height = null;
                    }

                    $image = Image::make($file)->resize($resize_width, $resize_height,
                        function (Constraint $constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })->encode($file->getClientOriginalExtension(), 75);

                    Storage::put(config('voyager.storage.subfolder') . $fullPath, (string)$image, 'public');

                    if (isset($options->thumbnails)) {
                        foreach ($options->thumbnails as $thumbnails) {
                            if (isset($thumbnails->name) && isset($thumbnails->scale)) {
                                $scale = intval($thumbnails->scale) / 100;
                                $thumb_resize_width = $resize_width;
                                $thumb_resize_height = $resize_height;

                                if ($thumb_resize_width != 'null') {
                                    $thumb_resize_width = $thumb_resize_width * $scale;
                                }

                                if ($thumb_resize_height != 'null') {
                                    $thumb_resize_height = $thumb_resize_height * $scale;
                                }

                                $image = Image::make($file)->resize($thumb_resize_width, $thumb_resize_height,
                                    function (Constraint $constraint) {
                                        $constraint->aspectRatio();
                                        $constraint->upsize();
                                    })->encode($file->getClientOriginalExtension(), 75);
                            } elseif (isset($options->thumbnails) && isset($thumbnails->crop->width) && isset($thumbnails->crop->height)) {
                                $crop_width = $thumbnails->crop->width;
                                $crop_height = $thumbnails->crop->height;
                                $image = Image::make($file)
                                    ->fit($crop_width, $crop_height)
                                    ->encode($file->getClientOriginalExtension(), 75);
                            }

                            Storage::put(
                                config('voyager.storage.subfolder') . $path . $filename . '-' . $thumbnails->name . '.' . $file->getClientOriginalExtension(),
                                (string)$image, 'public'
                            );
                        }
                    }

                    return $fullPath;
                }
                break;
            default:
                return $request->input($field);
        }

    }
}

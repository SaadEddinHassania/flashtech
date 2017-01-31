@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .panel-actions .voyager-trash {
            cursor: pointer;
        }

        .panel-actions .voyager-trash:hover {
            color: #e94542;
        }

        .panel hr {
            margin-bottom: 10px;
        }

        .panel {
            padding-bottom: 15px;
        }

        .sort-icons {
            font-size: 21px;
            color: #ccc;
            position: relative;
            cursor: pointer;
        }

        .sort-icons:hover {
            color: #37474F;
        }

        .voyager-sort-desc {
            margin-right: 10px;
        }

        .voyager-sort-asc {
            top: 10px;
        }

        .page-title {
            margin-bottom: 0;
        }

        .panel-title code {
            border-radius: 30px;
            padding: 5px 10px;
            font-size: 11px;
            border: 0;
            position: relative;
            top: -2px;
        }

        .new-setting {
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }

        .new-setting .panel-title {
            margin: 0 auto;
            display: inline-block;
            color: #999fac;
            font-weight: lighter;
            font-size: 13px;
            background: #fff;
            width: auto;
            height: auto;
            position: relative;
            padding-right: 15px;
        }

        .new-setting hr {
            margin-bottom: 0;
            position: absolute;
            top: 7px;
            width: 96%;
            margin-left: 2%;
        }

        .new-setting .panel-title i {
            position: relative;
            top: 2px;
        }

        .new-settings-options {
            display: none;
            padding-bottom: 10px;
        }

        .new-settings-options label {
            margin-top: 13px;
        }

        .new-settings-options .alert {
            margin-bottom: 0;
        }

        #toggle_options {
            clear: both;
            float: right;
            font-size: 12px;
            position: relative;
            margin-top: 15px;
            margin-right: 5px;
            margin-bottom: 10px;
            cursor: pointer;
            z-index: 9;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .new-setting-btn {
            margin-right: 15px;
            position: relative;
            margin-bottom: 0;
            top: 5px;
        }

        .new-setting-btn i {
            position: relative;
            top: 2px;
        }

        .img_settings_container {
            width: 200px;
            height: auto;
            position: relative;
        }

        .img_settings_container > a {
            position: absolute;
            right: -10px;
            top: -10px;
            display: block;
            padding: 5px;
            background: #F94F3B;
            color: #fff;
            border-radius: 13px;
            width: 25px;
            height: 25px;
            font-size: 15px;
            line-height: 19px;
        }

        .img_settings_container > a:hover, .img_settings_container > a:focus, .img_settings_container > a:active {
            text-decoration: none;
        }

        textarea {
            min-height: 120px;
        }
    </style>
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> @if(isset($dataTypeContent->id)){{ 'Edit' }}@else{{ 'New' }}@endif {{ $dataType->display_name_singular }}
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">

                    <div class="panel-heading">
                        <h3 class="panel-title">@if(isset($dataTypeContent->id)){{ 'Edit' }}@else{{ 'Add New' }}@endif {{ $dataType->display_name_singular }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form"
                          action="@if(isset($dataTypeContent->id)){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->id) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
                          method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if(isset($dataTypeContent->id))
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- If we are editing -->
                            @if(isset($dataTypeContent->id))
                                <?php $dataTypeRows = $dataType->editRows; ?>
                            @else
                                <?php $dataTypeRows = $dataType->addRows; ?>
                            @endif

                            @foreach($dataTypeRows as $row)
                                <div class="form-group">
                                    <label for="name">{{ $row->display_name }}</label>

                                    @if($row->type == "text")
                                        <input type="text" class="form-control" name="{{ $row->field }}"
                                               placeholder="{{ $row->display_name }}"
                                               value="@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@else{{old($row->field)}}@endif">
                                    @elseif($row->type == "password")
                                        @if(isset($dataTypeContent->{$row->field}))
                                            <br>
                                            <small>Leave empty to keep the same</small>
                                        @endif
                                        <input type="password" class="form-control" name="{{ $row->field }}" value="">
                                    @elseif($row->type == "text_area")
                                        <textarea class="form-control"
                                                  name="{{ $row->field }}">@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@else{{old($row->field)}}@endif</textarea>
                                    @elseif($row->type == "rich_text_box")
                                        <textarea class="form-control richTextBox"
                                                  name="{{ $row->field }}">@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@else{{old($row->field)}}@endif</textarea>
                                    @elseif($row->type == "image" || $row->type == "file")
                                        @if($row->type == "image" && isset($dataTypeContent->{$row->field}))
                                            <img src="{{ Voyager::image( $dataTypeContent->{$row->field} ) }}"
                                                 style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                        @elseif($row->type == "file" && isset($dataTypeContent->{$row->field}))
                                            <div class="fileType">{{ $dataTypeContent->{$row->field} }}</div>
                                        @endif
                                        <input type="file" name="{{ $row->field }}">
                                    @elseif($row->type == "select_dropdown")
                                        <?php $options = json_decode($row->details); ?>
                                        @if(isset($options->relationship))
                                            {{-- If this is a relationship and the method does not exist, show a warning message --}}
                                            @if( !method_exists( $dataType->model_name, $row->field ) )
                                                <p class="label label-warning"><i class="voyager-warning"></i> Make sure to setup the appropriate relationship in the {{ $row->field . '()' }} method of the {{ $dataType->model_name }} class.</p>   
                                            @endif

                                            @if( method_exists( $dataType->model_name, $row->field ) )
                                                <?php $selected_value = (isset($dataTypeContent->{$row->field}) && !is_null(old($row->field, $dataTypeContent->{$row->field}))) ? old($row->field, $dataTypeContent->{$row->field}) : old($row->field); ?>
                                                <select class="form-control select2" name="{{ $row->field }}">
                                                    <?php $relationshipClass = get_class(app($dataType->model_name)->{$row->field}()->getRelated()); ?>
                                                    <?php $relationshipOptions = $relationshipClass::where('parent_id','=',null)->get(); ?>
                                                    @foreach($relationshipOptions as $relationshipOption)
                                                        <option value="{{ $relationshipOption->{$options->relationship->key} }}" @if($selected_value == $relationshipOption->{$options->relationship->key}){{ 'selected="selected"' }}@endif>{{ $relationshipOption->{$options->relationship->label} }}</option>
                                                    @endforeach

                                                    <?php $default = (isset($options->default) && !isset($dataTypeContent->{$row->field})) ? $options->default : NULL; ?>
                                                
                                                    @if(isset($options->options))
                                                        @foreach($options->options as $key => $option)
                                                            <option value="{{ $key }}" @if($default == $key && $selected_value === NULL){{ 'selected="selected"' }}@endif @if((string)$selected_value == (string)$key){{ 'selected="selected"' }}@endif>{{ $option }}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            @else
                                                <select class="form-control select2" name="{{ $row->field }}"></select>
                                            @endif
                                        @else
                                            <?php $selected_value = (isset($dataTypeContent->{$row->field}) && !is_null(old($row->field, $dataTypeContent->{$row->field}))) ? old($row->field, $dataTypeContent->{$row->field}) : old($row->field); ?>
                                            <select class="form-control select2" name="{{ $row->field }}">
                                                <?php $default = (isset($options->default) && !isset($dataTypeContent->{$row->field})) ? $options->default : NULL; ?>
                                                @if(isset($options->options))
                                                    @foreach($options->options as $key => $option)
                                                        <option value="{{ $key }}" @if($default == $key && $selected_value === NULL){{ 'selected="selected"' }}@endif @if($selected_value == $key){{ 'selected="selected"' }}@endif>{{ $option }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        @endif

                                    @elseif($row->type == "select_multiple")
                                        <?php $options = json_decode($row->details); ?>
                                        {{-- If this is a relationship and the method does not exist, show a warning message --}}
                                        @if(isset($options->relationship) && !method_exists( $dataType->model_name, $row->field ) )
                                            <p class="label label-warning"><i class="voyager-warning"></i> Make sure to setup the appropriate relationship in the {{ $row->field . '()' }} method of the {{ $dataType->model_name }} class.</p>   
                                        @endif
                                        
                                        <select class="form-control select2" name="{{ $row->field }}[]" multiple>
                                            @if(isset($options->relationship))
                                                <!-- Check that the method relationship exists -->
                                                @if( method_exists( $dataType->model_name, $row->field ) )
                                                    <?php $selected_values = isset($dataTypeContent) ? $dataTypeContent->{$row->field}()->getRelated()->pluck($options->relationship->key)->all() : array(); ?>
                                                    <?php $relationshipClass = get_class(app($dataType->model_name)->{$row->field}()->getRelated()); ?>
                                                    <?php $relationshipOptions = $relationshipClass::all(); ?>
                                                    @foreach($relationshipOptions as $relationshipOption)
                                                        <option value="{{ $relationshipOption->{$options->relationship->key} }}" @if(in_array($relationshipOption->{$options->relationship->key}, $selected_values)){{ 'selected="selected"' }}@endif>{{ $relationshipOption->{$options->relationship->label} }}</option>
                                                    @endforeach
                                                @endif
                                            @endif
                                        </select>

                                    @elseif($row->type == "radio_btn")
                                        <?php $options = json_decode($row->details); ?>
                                        <?php $selected_value = (isset($dataTypeContent->{$row->field}) && !empty(old($row->field,
                                                        $dataTypeContent->{$row->field}))) ? old($row->field,
                                                $dataTypeContent->{$row->field}) : old($row->field); ?>
                                        <?php $default = (isset($options->default) && !isset($dataTypeContent->{$row->field})) ? $options->default : NULL; ?>
                                        <ul class="radio">
                                            @if(isset($options->options))
                                                @foreach($options->options as $key => $option)
                                                    <li>
                                                        <input type="radio" id="option-{{ $key }}"
                                                               name="{{ $row->field }}"
                                                               value="{{ $key }}" @if($default == $key && $selected_value === NULL){{ 'checked' }}@endif @if($selected_value == $key){{ 'checked' }}@endif>
                                                        <label for="option-{{ $key }}">{{ $option }}</label>
                                                        <div class="check"></div>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>

                                    @elseif($row->type == "checkbox")

                                        <br>
                                        <?php $options = json_decode($row->details); ?>
                                        <?php $checked = (isset($dataTypeContent->{$row->field}) && old($row->field,
                                                        $dataTypeContent->{$row->field}) == 1) ? true : old($row->field); ?>
                                        @if(isset($options->on) && isset($options->off))
                                            <input type="checkbox" name="{{ $row->field }}" class="toggleswitch"
                                                   data-on="{{ $options->on }}" @if($checked) checked
                                                   @endif data-off="{{ $options->off }}">
                                        @else
                                            <input type="checkbox" name="{{ $row->field }}" class="toggleswitch"
                                                   @if($checked) checked @endif>
                                        @endif

                                    @endif

                                </div>
                            @endforeach

                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                          enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                               onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>

        <div style="clear:both"></div>

        <div class="panel" style="margin-top:10px;">
            <div class="panel-heading new-setting">
                <hr>
                <h3 class="panel-title"><i class="voyager-plus"></i> New Setting</h3>
            </div>
            <div class="panel-body">
                <form action="{{ route('voyager.settings.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="col-md-4">
                        <label for="display_name">Name</label>
                        <input type="text" class="form-control" name="display_name">
                    </div>
                    <div class="col-md-4">
                        <label for="key">Key</label>
                        <input type="text" class="form-control" name="key">
                    </div>
                    <div class="col-md-4">
                        <label for="asdf">Type</label>
                        <select name="type" class="form-control">
                            <option value="text">Text Box</option>
                            <option value="text_area">Text Area</option>
                            <option value="rich_text_box">Rich Textbox</option>
                            <option value="checkbox">Check Box</option>
                            <option value="radio_btn">Radio Button</option>
                            <option value="select_dropdown">Select Dropdown</option>
                            <option value="file">File</option>
                            <option value="image">Image</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <a id="toggle_options"><i class="voyager-double-down"></i> OPTIONS</a>
                        <div class="new-settings-options">
                            <label for="options">Options
                                <small>(optional, only applies to certain types like dropdown box or radio button)
                                </small>
                            </label>
                            <textarea name="details" id="options_textarea" class="form-control"></textarea>
                            <div id="valid_options" class="alert-success alert" style="display:none">Valid Json</div>
                            <div id="invalid_options" class="alert-danger alert" style="display:none">Invalid Json</div>
                        </div>
                    </div>
                    <script>
                        // do the deal
                        var myJSONArea = JSONArea(document.getElementById('options_textarea'), {
                            sourceObjects: [] // optional array of objects for JSONArea to inherit from
                        });

                        valid_json = false;

                        // then here's how you use JSONArea's update event
                        myJSONArea.getElement().addEventListener('update', function (e) {
                            if (e.target.value != "") {
                                valid_json = e.detail.isJSON;
                            }
                        });

                        myJSONArea.getElement().addEventListener('focusout', function (e) {
                            if (valid_json) {
                                $('#valid_options').show();
                                $('#invalid_options').hide();
                                var ugly = e.target.value;
                                var obj = JSON.parse(ugly);
                                var pretty = JSON.stringify(obj, undefined, 4);
                                document.getElementById('options_textarea').value = pretty;
                            } else {
                                $('#valid_options').hide();
                                $('#invalid_options').show();
                            }
                        });
                    </script>
                    <script>
                        $('document').ready(function () {
                            $('#toggle_options').click(function () {
                                $('.new-settings-options').toggle();
                                if ($('#toggle_options .voyager-double-down').length) {
                                    $('#toggle_options .voyager-double-down').removeClass('voyager-double-down').addClass('voyager-double-up');
                                } else {
                                    $('#toggle_options .voyager-double-up').removeClass('voyager-double-up').addClass('voyager-double-down');
                                }
                            });
                        });
                    </script>
                    <div style="clear:both"></div>
                    <button type="submit" class="btn btn-primary pull-right new-setting-btn">
                        <i class="voyager-plus"></i> Add New Setting
                    </button>
                    <div style="clear:both"></div>
                </form>
            </div>
        </div>
    </div>


@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();
        });
    </script>
    <script src="{{ config('voyager.assets_path') }}/lib/js/tinymce/tinymce.min.js"></script>
    <script src="{{ config('voyager.assets_path') }}/js/voyager_tinymce.js"></script>
@stop

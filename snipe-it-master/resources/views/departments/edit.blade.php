@extends('layouts/edit-form', [
    'createText' => trans('admin/departments/table.create') ,
    'updateText' => trans('admin/departments/table.update'),
    'formAction' => (isset($item->id)) ? route('departments.update', ['department' => $item->id]) : route('departments.store'),
])

{{-- Page content --}}
@section('inputFields')

    @include ('partials.forms.edit.name', ['translated_name' => trans('admin/departments/table.name')])

    <!-- Company -->
    @if (\App\Models\Company::canManageUsersCompanies())
        @include ('partials.forms.edit.company-select', ['translated_name' => trans('general.company'), 'fieldname' => 'company_id'])
    @else
        <input id="hidden_company_id" type="hidden" name="company_id" value="{{ Auth::user()->company_id }}">
    @endif


    <!-- Manager -->
    @include ('partials.forms.edit.user-select', ['translated_name' => trans('admin/users/table.manager'), 'fieldname' => 'manager_id'])

    <!-- Location -->
    @include ('partials.forms.edit.location-select', ['translated_name' => trans('general.location'), 'fieldname' => 'location_id'])

    <!-- Image -->
    @if (($item->image) && ($item->image!=''))
        <div class="form-group{{ $errors->has('image_delete') ? ' has-error' : '' }}">
            <div class="col-md-9 col-md-offset-3">
                <label for="image_delete">
                    {{ Form::checkbox('image_delete', '1', old('image_delete'), ['class'=>'minimal','aria-label'=>'image_delete']) }}
                    {{ trans('general.image_delete') }}
                    {!! $errors->first('image_delete', '<span class="alert-msg">:message</span>') !!}
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
                <img src="{{ Storage::disk('public')->url(app('departments_upload_path').e($item->image)) }}" class="img-responsive">
                {!! $errors->first('image_delete', '<span class="alert-msg">:message</span>') !!}
            </div>
        </div>
    @endif

    @include ('partials.forms.edit.image-upload')

@stop


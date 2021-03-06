<div id="{{ str_random(10) }}" class="form-group {{ $errors->has($field_id)?'has-error':'' }}">
    <div>
        <label class="control-label large">@if (!is_null($theme['theme-key'])) {{ trans($theme['theme-key'] . '::' . $form['#label']) }} @else {{ $form['#label'] }} @endif</label>
    </div>
    <div class="form-control-add-painter text-center {{ $errors->has($field_id)?'has-error':'' }}">

        <div class="painter-add" @if (isset($form['#content']['#value']) && $form['#content']['#value'] != '') style="display:none" @endif>
            <button type="button" class="btn btn-primary btn-lg add-painter-btn add-edit-painter-btn" data-space-id="{{ $space_id }}" data-contenttype-name="{{ $contenttype_name }}" data-scene-template="{{ $form['#scene-template'] }}" data-content-id="{{ $content_id }}">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{ trans('fieldtype_painter.add_painting') }} 
            </button>
        </div>

        <div class="painter-edit" @if (isset($form['#content']['#value']) && $form['#content']['#value'] == '') style="display:none" @endif>
            <div class="painter-placeholder" style="margin-bottom:10px"><i class="fa fa-repeat" aria-hidden="true" style="font-size:60px"></i></div>
            <button type="button" class="btn btn-primary add-edit-painter-btn" data-space-id="{{ $space_id }}" data-contenttype-name="{{ $contenttype_name }}" data-scene-template="{{ $form['#scene-template'] }}" data-content-id="{{ $content_id }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{ trans('fieldtype_painter.edit_painting') }}
            </button>
            <button type="button" class="btn btn-primary remove-painter-btn">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{ trans('fieldtype_painter.remove_painting') }}
            </button>
        </div>

    </div>
    <span class="info-block">@if (!is_null($theme['theme-key'])) {!! trans($theme['theme-key'] . '::' . $form['#help']) !!} @else {!! $form['#help'] !!} @endif @if ($form['#required'] == true) <span class="label label-danger">{{ trans('template_fields.required') }}</span>@endif</span>
    {!! $errors->has($field_id)?$errors->first($field_id, '<span class="help-block">:message</span>'):'' !!}
</div>



<!-- 'Boolean {{ $fieldTitle }} Field' checked by default -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
@endif
    <label class="checkbox-inline">
    @{!! Form::checkbox('{{ $fieldName }}', 1, true) !!}
    <!-- remove {, true} to make it unchecked by default -->
    </label>
        </div>
    </div>
</div>
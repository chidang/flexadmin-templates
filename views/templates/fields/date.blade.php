<!-- {{ $fieldTitle }} Field -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
@endif
            <div class="input-group">
                @{!! Form::text('{{ $fieldName }}', null, ['class' => 'form-control datepicker','id'=>'{{ $fieldName }}']) !!}
                <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
            </div>
        </div>
    </div>
</div>
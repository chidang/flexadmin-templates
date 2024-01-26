<!-- {{ $fieldTitle }} Field -->
<div class="row">
    <div class="form-group col-sm-12 col-lg-12">
        <div class="form-group mb-3">
    @if($config->options->localized)
        @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
    @else
        @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
    @endif
        @{!! Form::textarea('{{ $fieldName }}', null, ['class' => 'form-control'@php if(isset($options)) { echo htmlspecialchars_decode($options); } @endphp]) !!}
        </div>
    </div>
</div>
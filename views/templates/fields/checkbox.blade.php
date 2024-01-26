<!-- {{ $fieldTitle }} Field -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
            <div class="form-check">
            @{!! Form::hidden('{{ $fieldName }}', 0, ['class' => 'form-check-input']) !!}
            @{!! Form::checkbox('{{ $fieldName }}', '{{ $checkboxVal }}', null, ['class' => 'form-check-input']) !!}
            @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}', ['class' => 'form-check-label']) !!}
            </div>
        </div>
    </div>
</div>
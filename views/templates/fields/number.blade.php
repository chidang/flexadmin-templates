<!-- {{ $fieldTitle }} Field -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
            @{{ html()->label('{{ $fieldTitle }}', '{{ $fieldName }}') }}
            @{{ html()->number('{{ $fieldName }}')->placeholder('{{ $fieldTitle }}')->class('form-control') }}
        </div>
    </div>
</div>

<!-- 'Boolean {{ $fieldTitle }} Field' checked by default -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
            <label class="custom-checkbox">
                @{!! Form::checkbox('{{ $fieldName }}', 1, true) !!}
                {{ $fieldTitle }}
                <span></span>
            <!-- remove {, true} to make it unchecked by default -->
            </label>
        </div>
    </div>
</div>
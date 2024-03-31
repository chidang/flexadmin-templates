<!-- 'Boolean {{ $fieldTitle }} Field' checked by default -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
            <label class="custom-checkbox">
                @{{ html()->checkbox('{!! $fieldName !!}', true, '1') }}
                {!! $fieldTitle !!}
                <span></span>
            <!-- remove {, true} to make it unchecked by default -->
            </label>
        </div>
    </div>
</div>
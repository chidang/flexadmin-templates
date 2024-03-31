<!-- {{ $fieldTitle }} Field -->
<div class="row">
    <div class="form-group col-sm-12 col-lg-12">
        <div class="form-group mb-3">
            @{{ html()->label('{!! $fieldTitle !!}', '{!! $fieldName !!}') }}
            @{{ html()->textarea('{!! $fieldName !!}')->class('form-control') }}
        </div>
    </div>
</div>
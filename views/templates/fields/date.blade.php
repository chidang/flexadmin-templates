<!-- {{ $fieldTitle }} Field -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
            @{{ html()->label('{!! $fieldTitle !!}', '{!! $fieldName !!}') }}
            <div class="input-group">
                @{{ html()->text('fieldName')->placeholder('{!! $fieldTitle !!}')->class('form-control datepicker') }}
                <span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
            </div>
        </div>
    </div>
</div>
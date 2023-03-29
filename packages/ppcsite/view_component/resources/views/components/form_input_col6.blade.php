<div class="form-group col-6 d-flex flex-column flex-md-row">
    <label class="col-form-label col-md-3" for="{{ $field??'' }}"> {{ $label_name??'' }} </label>
    <input id="{{ $field??'' }}" class="form-control" type="{{ $type??'text' }}" placeholder="{{ $placeholder??'' }}" name="{{ $field??'' }}"/>
</div>

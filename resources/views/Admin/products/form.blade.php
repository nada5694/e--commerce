<div class="tab-pane mt-4" role="tabpanel">
    <div class="form-group row">
        <label class="admin-form col-lg-2">Name <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('name') is-invalid @enderror" value="{{Request::old('name') }}" type="text" name="name" placeholder="Enter product name" autocomplete="off">
            @error('name')
            <span class="invalid-feedback" role="alert"></span>
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="admin-form col-lg-2">Image <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control input-file @error('image_name') is-invalid @enderror" value="{{Request::old('name') }}" type="file" name="image_name" placeholder="Enter product name" autocomplete="off">
            @error('image_name')
            <span class="invalid-feedback" role="alert"></span>
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="admin-form col-lg-2">Discount (%)</label>
        <div class="col-lg-9">
            <input class="form-control" value="{{Request::old('Discount') }}" type="integer" name="Discount" placeholder="Enter product Discount" autocomplete="off">
            {{-- @error('Discount')
            <span class="invalid-feedback" role="alert"></span>
                <strong>{{ $message }}</strong>
            </span>
            @enderror --}}
        </div>
    </div>

    <div class="form-group row">
        <label class="admin-form col-lg-2">Price <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('price') is-invalid @enderror" value="{{Request::old('price') }}" type="integer" name="price" placeholder="Enter product price" autocomplete="off">
            @error('price')
            <span class="invalid-feedback" role="alert"></span>
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">Description </label>
        <div class="col-lg-9">
            <input class="form-control @error('description') is-invalid @enderror" value="{{Request::old('description') ? Request::old('description') : $model->description}}" type="text" name="description" placeholder="Enter product description" autocomplete="off">
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

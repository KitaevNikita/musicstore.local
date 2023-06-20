<div class="row ">
    <div class="col">
        <label for="namecategory">Название категории <sup style="color: red">*</sup></label>
        <input type="text" class="form-control @error('namecategory') is-invalid @enderror" id="namecategory" name="namecategory"
        value="{{ $category->namecategory ?? old('namecategory') }}">
        @error('namecategory')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
</div>
<hr>
<button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Сохранить</button>&nbsp;
<a class="btn btn-danger" href="{{ route('categories.index') }}"><i class="bi bi-house"></i> На главную</a>

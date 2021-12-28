<form>
  <div class="row ">
    <div class="col">
      <label for="namecategory">Название категории</label>
      <input type="text" class="form-control" id="namecategory" name="namecategory"
      value="{{ $category->namecategory ?? old('namecategory') }}">
    </div>
  </div>
<hr>
<button type="submit" class="btn btn-primary">Сохранить</button>
<a class="btn btn-danger" href="{{ route('categories.index') }}">Отмена</a>

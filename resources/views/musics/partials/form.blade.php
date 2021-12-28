<form>
  <div class="row ">
    <div class="col">
    <select class="form-select" aria-label="Default select example" name='category_id'>
        @foreach($categories as $category)
            <option value='{{ $category->id }}'>{{ $category->namecategory }}</option>
        @endforeach
    </select>
    </div>
  </div>
  <div class="row ">
    <div class="col">
      <label for="name">Название музыкального инструмента</label>
      <input type="text" class="form-control" id="name" name="name"
      value="{{ $music->name ?? old('name') }}">
    </div>
  </div>
  <div class="row ">
    <div class="col">
      <label for="countryoforigin">Страна производитель</label>
      <input type="text" class="form-control" id="countryoforigin" name="countryoforigin"
      value="{{ $music->countryoforigin ?? old('countryoforigin') }}">
    </div>
  </div>
  <div class="row ">
    <div class="col">
      <label for="manufacturercompany">Фирма производитель</label>
      <input type="text" class="form-control" id="manufacturercompany" name="manufacturercompany"
      value="{{ $music->manufacturercompany ?? old('manufacturercompany') }}">
    </div>
  </div>
  <div class="row ">
    <div class="col">
      <label for="colour">Цвет</label>
      <input type="text" class="form-control" id="colour" name="colour"
      value="{{ $music->colour ?? old('colour') }}">
    </div>
  </div>
  <div class="row ">
    <div class="col">
      <label for="price">Цена</label>
      <input type="text" class="form-control" id="price" name="price"
      value="{{ $music->price ?? old('price') }}">
    </div>
  </div>
<hr>
<button type="submit" class="btn btn-primary">Сохранить</button>
<a class="btn btn-danger" href="{{ route('musics.index') }}">Отмена</a>

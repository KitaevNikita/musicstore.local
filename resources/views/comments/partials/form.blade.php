<div class="container">
    <div class="col">
        <label for="topic">Тема отзыва <sup style="color: red">*</sup></label>
        <input type="text" class="form-control @error('topic') is-invalid @enderror" id="topic" name="topic"
        value="{{ $com->topic ?? old('topic') }}">
        @error('topic')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="col">
        <div class="mb-3">
            <label for="text" class="form-label">Текст отзыва <sup style="color: red">*</sup></label>
            <textarea class="form-control @error('topic') is-invalid @enderror" id="text" rows="3" name="text" 
            value="{{ $com->text ?? old('text') }}"></textarea>
            @error('text')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Отправить</button>&nbsp;
    <a class="btn btn-danger" href="{{ route('comments.index') }}">
      На главную
    </a>
<div>
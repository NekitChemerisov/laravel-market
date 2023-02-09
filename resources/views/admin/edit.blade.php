@include('components.startStyle')
<div>
  <form action="{{route('admin.update', $product->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Название товара</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="product_name">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Описание</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="discription" name="discription">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Цена</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="price" name="price">
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Категория</label>
      <select id="category_id" name="category_id">
      @foreach ($categories_id as $category_id)
        <option value="{{ $category_id['id'] }}">{{ $category_id['category_name'] }}</option>
        @endforeach
      </select>
    </div>
</div>


<div class="col-sm-10">
  <button type="submit" class="btn btn-primary" class="btn btn-success mb-3">Обновить товар в БД</button>
  </form>
</div>

@include('components.endStyle')
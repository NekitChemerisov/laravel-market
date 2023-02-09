@include('components.startStyle')
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Название</th>
      <th scope="col">ID категория</th>
      <th scope="col">Цена</th>
      <th scope="col">Описание</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->product_name}}</td>
      <td>{{$product->category_id}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->discription}}</td>
    </tr>
  </tbody>
</table>
</div>
<div>
<a href="{{route('admin.index')}}" class="btn btn-success mb-3">Назад</a>
</div>
<div>
  <form action="{{route('admin.destroy', $product->id)}}" method="POST">
  @csrf
 @method('DELETE')
  <input type="submit" class="btn btn-danger" value="DELETE"></form>
</div>

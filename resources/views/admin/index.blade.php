@include('components.startStyle')
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Название</th>
      <th scope="col">ID категория</th>
      <th scope="col">Цена</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr>
      <th scope="row"><a href="{{route('admin.show',$product->id)}}">{{$product->id}}</th>
      <td><a href="{{route('admin.show',$product->id)}}">{{$product->product_name}}</td>
      <td><a href="{{route('admin.show',$product->id)}}">{{$product->category_id}}</td>
      <td><a href="{{route('admin.show',$product->id)}}">{{$product->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
<a href="{{route('admin.create')}}"class="btn btn-success mb-3">Создать товар</a>
</div>


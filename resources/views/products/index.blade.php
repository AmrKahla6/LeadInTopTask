@extends('layout')

@section('content')

    <center> <h3 class="mt-3">Products</h3></center>
    <div class="col-md-4 m-3">
    <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-fall" data-toggle="modal" href="#modaldemo8"> Sale Product </a>
</div>
<pre></pre>
<div class="container text-center">
    <div class="row">
 <!-- Optional JavaScript; choose one of the two! -->
 @include('partials._errors')
 @if (count($prodcts) != 0)
 <table class="table table-striped">
     <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Product Code</th>
         <th scope="col">Product Name</th>
         <th scope="col">Number in stock</th>
         <th scope="col">Product Image</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($prodcts as $key=>$item)
             <tr>
             <th scope="row">{{$key +1}}</th>
             <td>{{$item->productCode}}</td>
             <td>{{$item->productName}}</td>
             <td>{{$item->stock->numOfProduct}}</td>
             <td>
                 <img src="{{$item->image_path}}" alt="" class="img-thumbnail" width="100" hight="100" srcset="">
             </td>
             </tr>
         @endforeach
     </tbody>
 </table>
 @else
 <h4>No Records</h4>
@endif
 <div>{{$prodcts->links()}}</div>
</div>
@include('products.sale')
</div>
@endsection
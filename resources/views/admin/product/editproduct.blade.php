<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
      

        @include('admin.header')
        <div class="content-wrapper mt-5">
            @if (count($errors) > 0)
            <div class="allert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Session::has('status'))
            <div class="alert alert-success">
                {{Session::get('status')}}
            </div>
        @endif
            <h1>Edit product</h1>
             <form action="{{route('update_product', $product->id)}}" method="POST"  enctype="multipart/form-data" name="formName">
                @csrf
                 <div class="form-column ">
                     <div class="col-md-6 mb-3">
                         <label for="product_name">product name</label>
                         <input type="text" value="{{$product->name}}" name="product_name" class="form-control" id="product name" placeholder="enter product name" >
                         
                     </div>
                     <div class="col-md-6 mb-3">
                         <label for="product price">product price</label>
                         <input type="number" value="{{$product->price}}" name="product_price" class="form-control" id="product price" placeholder="enter product price" >
                     </div>
                     {{-- @php
                         dd($categories)
                     @endphp --}}
                     <div class="col-md-6 mb-3">
                         <label for="product_category">product category</label>
                         <select id="inputState" name="product_category" class="form-control"> 
                            <option selected>{{$product->category_id}}</option>
                            <option >choose...</option>
                            @foreach ($categories as $category)
                            <option>{{$category->id}}</option>                                
                            @endforeach
                          </select>
                         {{-- <input type="text" class="form-control" id="product category" placeholder="enter category" value="" required> --}}
                         
                     </div >
                     
                     <div class="col-md-6 mb-3">
                        <label>Product image</label>
                        <input type="file" name="product_image" placeholder="choose image" >
                     </div>
                 </div>
                 <button class="btn btn-primary" type="submit">update</button>
             </form>
        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>

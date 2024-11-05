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

            {{ Form::hidden('', $increment = 1) }}
            <table class="table">
                <thead style="color: red">
                    @if (Session::has('status'))
                        <div class="alert alert-success">
                            {{ Session::get('status') }}
                        </div>
                    @endif

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">product name</th>
                        <th scope="col">product price</th>
                        <th scope="col">product category</th>
                        <th scope="col">product image</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $increment }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td><img src="{{ asset('storage/product_images/' . $product->poster_url) }}" alt=""
                                    style="height: 100px;width: 100px;"></td>

                            <td>
                                <div>
                                    <a href="{{ route('edit_product', $product->id) }}" class="btn btn-primary">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        <span><strong>Edit</strong></span>
                                    </a>

                                    <a href="{{ route('delete_product', $product->id) }}"
                                        class="btn btn-primary a-btn-slide-text">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        <span><strong>Delete</strong></span>
                                    </a>
                                </div>
                                <div class="pt-3">
                                    @if ($product->status != 0)
                                    <a href="{{ route('desactiver_product', $product->id) }}" class="btn btn-success">unactivate</a>
                                    @else
                                    <a href="{{ route('activer_product', $product->id) }}" class="btn btn-warning">activate</a>                                        
                                    @endif
                                </div>

                            </td>
                        </tr>
                        {{ Form::hidden('', $increment = $increment + 1) }}
                    @endforeach

                </tbody>
            </table>



        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>

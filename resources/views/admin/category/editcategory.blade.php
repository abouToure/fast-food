<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        @include('admin.header')
        <div class="main-panel">
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
            <form action="{{route('update_category',$category->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Edit category</label>
                    {{-- <input type="hidden" name="id" value="{{$category->id}}"> --}}
                    <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}"
                        aria-describedby="category name" placeholder="category name">
                </div>
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>

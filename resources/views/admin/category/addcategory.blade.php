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
            <form action="{{route('savecategory')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Add category</label>
                    <input type="text" class="form-control" id="name" name="name"
                        aria-describedby="category name" placeholder="category name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>

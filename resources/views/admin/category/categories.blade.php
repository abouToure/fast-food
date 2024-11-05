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
                <thead>
                    @if (Session::has('status'))
                    <div class="alert alert-success">
                        {{ Session::get('status') }}
                    </div>
                @endif
            
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $increment }}</td>
                            <td>{{ $category->name }}</td>
                            <td>

                                <a href="{{ route('edit_category', $category->id) }}"
                                    class="btn btn-primary a-btn-slide-text">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    <span><strong>Edit</strong></span>
                                </a>

                                <a href="{{ route('delete_category', $category->id) }}"
                                    class="btn btn-primary a-btn-slide-text">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    <span><strong>Delete</strong></span>
                                </a>
                            </td>
                        </tr>
                        {{Form::hidden('',$increment = $increment + 1)}}
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>

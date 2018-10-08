@extends('samples')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
        
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Badge List
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Badge name</th>
                            <th>Image</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <img src="{{ asset($item->img) }}" width="50">
                                    </td>
                                    <td>
                                        <span>
                                            <a class="badge badge-danger" onclick="onRemove({{ $item->id }})">Delete</a>
                                        </span>
                                    </td>
                                </tr>
                                {{ Form::open(array('url' => 'admin/badges/'.$item->id, 'class' => 'pull-right', 'id' => 'delete_form_'.$item->id)) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::close() }}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <form action="{{ route('badges.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Add a Badge
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Badge Name</label>
                            <div class="col-md-6">
                                <input type="text" id="text-input" name="name" class="form-control" placeholder="Badge name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Image File</label>
                            <div class="col-md-6">
                                <input type="file" id="text-input" name="img" class="form-control" placeholder="Select Image" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!--/.col-->
        </div>
        <!--/.row-->
    </div>

</div>
<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
<script>
    function onRemove(id){
        $('#delete_form_' + id).submit();
    }
</script>
@endsection
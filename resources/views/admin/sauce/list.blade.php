@extends('samples')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
        
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Customization List
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        <span>
                                            <a class="badge badge-success" href="{{ route('sauces.edit', ['id' => $item->id]) }}">Edit</a>
                                            <a class="badge badge-danger" onclick="onRemove({{ $item->id }})">Delete</a>
                                        </span>
                                    </td>
                                </tr>
                                {{ Form::open(array('url' => 'admin/sauces/'.$item->id, 'class' => 'pull-right', 'id' => 'delete_form_'.$item->id)) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::close() }}
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a class="btn btn-sm btn-primary" href="{{ route('sauces.create') }}"><i class="fa fa-dot-circle-o"></i> Add a Customization</a>
                </div>
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
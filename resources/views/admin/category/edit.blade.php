@extends('samples')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-6">
                {{ Form::model($item, array('action' => array('Admin\CategoryController@update', $item->id), 'method' => 'PUT')) }}
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Category</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="select">Parent Category</label>
                                <div class="col-md-9">
                                    @php
                                        $options = array();
                                        $options[0] = 'None';
                                        foreach ($parents as $parent){
                                            $options[$parent->id] = $parent->name;
                                        }
                                    @endphp
                                    {{ Form::select('parent', $options, $item->parent_id, array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="text-input">Category Name</label>
                                <div class="col-md-9">
                                    {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Category name')) }}
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-ban"></i> Reset</button>
                            <button type="button" class="btn btn-sm btn-danger" onclick="onRemove()"><i class="fa fa-ban"></i> Remove</button>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <!--/.row-->
    </div>

</div>
{{ Form::open(array('url' => 'admin/categories/'.$item->id, 'class' => 'pull-right', 'id' => 'delete_form')) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::close() }}
<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
<script>
    function onRemove(){
      $('#delete_form').submit();
    }
</script>
@endsection
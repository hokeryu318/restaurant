@extends('samples')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-8">
                {{ Form::model($sauce, array('action' => array('Admin\SauceController@update', $sauce->id), 'method' => 'PUT')) }}
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Customization</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-5 col-form-label" for="text-input">Customization Name</label>
                                <div class="col-md-7">
                                    <input type="text" id="text-input" name="name" class="form-control" placeholder="Text" required value="{{ $sauce->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-5 col-form-label" for="text-input">Price</label>
                                <div class="col-md-7">
                                    <input type="number" step=".01" id="text-input" name="price" class="form-control" placeholder="Number" required value="{{ $sauce->price }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <!--/.row-->
    </div>

</div>

@endsection
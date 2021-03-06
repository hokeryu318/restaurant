@extends('samples')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('sauces.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="card">
                        <div class="card-header">
                            <strong>Add a MenuCategory</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-5 col-form-label" for="text-input">Customization Name</label>
                                <div class="col-md-7">
                                    <input type="text" id="text-input" name="name" class="form-control" placeholder="Text" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-5 col-form-label" for="text-input">Price</label>
                                <div class="col-md-7">
                                    <input type="number" step=".01" id="text-input" name="price" class="form-control" placeholder="Number" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </form>
            </div>
        </div>
        <!--/.row-->
    </div>

</div>

@endsection
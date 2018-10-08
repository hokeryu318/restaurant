@extends('samples')
@section('content')
<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-align-justify"></i> MenuCategories List
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Category name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->name }}</td>
                      <td>
                        <span>
                            <a class="badge badge-success" href="{{ route('admin.menucategory.edit', ['id' => $item->id]) }}">Edit</a>
                            <a class="badge badge-danger" href="{{ route('admin.menucategory.remove', ['id' => $item->id]) }}">Remove</a>
                        </span>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer">
              <a class="btn btn-sm btn-primary" href="{{ route('admin.menucategory.add') }}"><i class="fa fa-dot-circle-o"></i> Add a Menu</a>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->
  </div>

</div>

@endsection
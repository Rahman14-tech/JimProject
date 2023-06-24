@extends('admin.layouts.Adminlay')

@section('body')
<div class="content">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

        {{-- TYPE TABLE --}}
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <div>
                    <h5 class="card-title mx-3">Type</h5>
                    <a href="{{ route('type.create') }}" class="btn btn-primary mb-2">Add</a>
                    <a href="#" class="btn btn-warning mb-2">Edit</a>
                </div>
                <table class="table table-hover table-bordered datatables text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($typedata as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->Name }}</td>
                        {{-- <td>
                            <a href="{{ route('type.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                Edit </a>
                            <form class="m-3" id="delete-category-{{ $item->id }}" action="{{ route('type.destroy', $item->id) }}" method="post">
                              <button class="btn btn-danger btn-sm" onclick="showDeleteConfirmation('delete-type-{{ $item->id }}')">Delete</button>
                              @csrf
                              @method('delete')
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          {{-- TOOLS TABLE --}}
          <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h5 class="card-title mx-3">Tools</h5>
                        <a href="{{ route('tool.create') }}" class="btn btn-primary mb-2">Add</a>
                        {{-- <a href="{{ route('admin.edit') }}" class="btn btn-warning mb-2">Edit</a> --}}
                    </div>
                  <table class="table table-hover table-bordered datatables text-center">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tooldata as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->Name }}</td>
                        {{-- <td>
                            <a href="{{ route('type.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                Edit </a>
                            <form class="m-3" id="delete-category-{{ $item->id }}" action="{{ route('type.destroy', $item->id) }}" method="post">
                              <button class="btn btn-danger btn-sm" onclick="showDeleteConfirmation('delete-type-{{ $item->id }}')">Delete</button>
                              @csrf
                              @method('delete')
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            {{-- DIFFICULTIES TABLE --}}
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title mx-3">Difficulties</h5>
                            <a href="{{ route('diff.create') }}" class="btn btn-primary mb-2">Add</a>
                            <a href="#" class="btn btn-warning mb-2">Edit</a>
                        </div>

                      <table class="table table-hover table-bordered datatables text-center">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Level</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($diffdata as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->Level }}</td>
                        {{-- <td>
                            <a href="{{ route('type.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                Edit </a>
                            <form class="m-3" id="delete-category-{{ $item->id }}" action="{{ route('type.destroy', $item->id) }}" method="post">
                              <button class="btn btn-danger btn-sm" onclick="showDeleteConfirmation('delete-type-{{ $item->id }}')">Delete</button>
                              @csrf
                              @method('delete')
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </div>
          </div>

          {{-- PARTS TABLE --}}
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title mx-3">Part's</h5>
                            <a href="{{ route('part.create') }}" class="btn btn-primary mb-2">Add</a>
                            {{-- <a href="{{ route('admin.edit') }}" class="btn btn-warning mb-2">Edit</a> --}}
                        </div>

                      <table class="table table-hover table-bordered datatables text-center">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Image_URL</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($typedata as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->Name }}</td>
                        <td><img src="{{ asset($item->image_url) }}" alt="" width="200"></td>
                        {{-- <td>
                            <a href="{{ route('type.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                Edit </a>
                            <form class="m-3" id="delete-category-{{ $item->id }}" action="{{ route('type.destroy', $item->id) }}" method="post">
                              <button class="btn btn-danger btn-sm" onclick="showDeleteConfirmation('delete-type-{{ $item->id }}')">Delete</button>
                              @csrf
                              @method('delete')
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>




          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <!-- /.content-wrapper -->
  @endsection

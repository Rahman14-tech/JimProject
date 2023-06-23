@extends('admin.layouts.Adminlay')

@section('body')
<div class="content">
  
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-4">  
            <div class="card">
              <div class="card-body">
                <div>
                    <h5 class="card-title mx-3">Type</h5>
                    <a href="{{ route('other.create') }}" class="btn btn-primary mb-2">Add</a>
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
                    {{-- @forelse ($categories as $index => $category)
                      <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                          
                          <form class="m-3" id="delete-category-{{ $category->id }}" action="{{ route('categories.destroy', $category->id) }}" method="post">
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="showDeleteConfirmation('delete-category-{{ $category->id }}')">Delete</button>
                            @csrf
                            @method('delete')
                          </form>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="3" align="center">No Data</td>
                      </tr>
                    @endforelse --}}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h5 class="card-title mx-3">Tools</h5>
                        <a href="{{ route('tool.create') }}" class="btn btn-primary mb-2">Add</a>
                        <a href="{{ route('admin.edit') }}" class="btn btn-warning mb-2">Edit</a>
                    </div>
                  <table class="table table-hover table-bordered datatables text-center">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

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
                            <th>Lavel</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </div>
          </div>

          <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title mx-3">Part's</h5>
                            <a href="{{ route('part.create') }}" class="btn btn-primary mb-2">Add</a>
                            <a href="{{ route('admin.edit') }}" class="btn btn-warning mb-2">Edit</a>
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
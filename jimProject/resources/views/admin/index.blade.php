@extends('admin.layouts.Adminlay')

@section('body')
<div class="content">
  
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Exercises</h5>
  
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
  
                <a href="{{ route('admin.create') }}" class="btn btn-primary mb-2">Add</a>
                <a href="{{ route('admin.edit') }}" class="btn btn-warning mb-2">Edit</a>
                <table class="table table-hover table-bordered datatables text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Part</th>
                      <th>Tool</th>
                      <th>Difficulty</th>
                      <th>Instruction</th>
                      <th>URL</th>
                      <th>Thumbnail</th>
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
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <!-- /.content-wrapper -->
  @endsection
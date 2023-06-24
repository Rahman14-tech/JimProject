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

                <a href="{{ route('exercise.create') }}" class="btn btn-primary mb-2">Add</a>
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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->Name }}</td>
                        <td>{{ $item->type->Name }}</td>
                        <td>{{ $item->part->Name }}</td>
                        <td>{{ $item->tool->Name }}</td>
                        <td>{{ $item->difficulty->Level }}</td>
                        <td>{{ $item->Instruction }}</td>
                        <td>{{ $item->VideoUrl }}</td>
                        <td><img src="{{ $item->ThumbnailImage }}" alt="" width="200"></td>
                        <td>
                            <a href="{{ route('exercise.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                Edit </a>
                           <form class="m-3" id="delete-category-{{ $item->id }}" action="{{ route('exercise.destroy', $item->id) }}" method="post">
                              <button class="btn btn-danger btn-sm" onclick="showDeleteConfirmation('delete-exercise-{{ $item->id }}')">Delete</button>
                              @csrf
                              @method('delete')
                            </form>
                        </td>
                    </tr>
                    @endforeach
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

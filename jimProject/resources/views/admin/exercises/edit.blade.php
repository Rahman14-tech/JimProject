@extends('admin.layouts.Adminlay')

@section('body')
<div class="kocak">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Exercises</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                              Add Exercise
                            </h3>
                        </div>

                        <form method="post" action="{{ route('exercise.update', $exercisedata->id) }}" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter exercise name" name="Name" value="{{ $exercisedata->Name }}">
                                </div>

                                <div class="form-group">
                                    <label for="type-select">Type</label>
                                    <select name="Type" id="type-select">
                                        <option value="">--Please choose a type--</option>
                                        @foreach ($typedata as $item)
                                            <option value="{{ $item->id }}">{{ $item->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="part-select">Part</label>
                                    <select name="Part" id="part-select">
                                        <option value="">--Please choose body part--</option>
                                        @foreach ($partdata as $item)
                                            <option value="{{ $item->id }}">{{ $item->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="tool-select">Tool</label>
                                    <select name="Tool" id="tool-select">
                                        <option value="">--Please choose a tool--</option>
                                        @foreach ($tooldata as $item)
                                            <option value="{{ $item->id }}">{{ $item->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="diff-select">Difficulty</label>
                                    <select name="Difficulty" id="diff-select">
                                        <option value="">--Please choose a difficulty--</option>
                                        @foreach ($typedata as $item)
                                            <option value="{{ $item->id }}">{{ $item->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                  <label class="form-label" for="form6Example7">Instruction</label>
                                  <textarea class="form-control" id="form6Example7" rows="4" name="Instruction">{{ $exercisedata->Instruction }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter video URL" name="VideoUrl" value="{{ $exercisedata->VideoUrl }}">
                                </div>

                                {{-- <div class="mb-3">
                                  <label for='image' class="form-label">Image</label>
                                  <input type="file" class="form-control" name="image_file" id="image">
                              </div> --}}

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>

                                <a href="{{ route('admin.home') }}" class="btn btn-danger ml-2">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@extends('admin.layouts.Adminlay')

@section('body')
    <div class="kocak">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Parts</h1>
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
                                    Edit Parts
                                </h3>
                            </div>

                            <form method="post" action="{{ route('part.update', $data->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="Name"
                                            value="{{ $data->Name }}">
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for='image' class="form-label">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image_url">
                                                    <label class="custom-file-label">Choose
                                                        image</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>

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

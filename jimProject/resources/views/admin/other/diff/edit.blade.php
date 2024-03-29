@extends('admin.layouts.Adminlay')

@section('body')
<div class="kocak">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Difficulty</h1>
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
                              Edit difficulty
                            </h3>
                        </div>

                        <form method="post" action="{{ route('diff.update', $data->id) }}" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Level</label>
                                    <input type="text" class="form-control"
                                     name="Level" value="{{ $data->Level }}">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>

                                <a href="{{ route('admin.other') }}" class="btn btn-danger ml-2">Back</a>
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

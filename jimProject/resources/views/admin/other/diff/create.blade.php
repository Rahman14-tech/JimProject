@extends('admin.layouts.Adminlay')

@section('body')
<div class="kocak">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Type & Tools</h1>
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
                              Add Category
                            </h3>
                        </div>

                        <form method="post" action="#" enctype="multipart/form-data">
                          @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Level</label>
                                    <input type="text" class="form-control" 
                                        placeholder="Enter category name" name="name">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>

                                <a href="{{ route('other.index') }}" class="btn btn-danger ml-2">Back</a>
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
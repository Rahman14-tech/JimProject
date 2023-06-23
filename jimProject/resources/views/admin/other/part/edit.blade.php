@extends('admin.layouts.Adminlay')

@section('body')
<div class="kocak">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Body Parts</h1>
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
                    
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">
                              Edit Body Parts
                            </h3>
                        </div>

                        <form method="post" action="#" enctype="multipart/form-data">
                          @csrf
                            <div class='m-3'>
                                <div class="form-group">
                                    <label>Body Part's</label>
                                    <input type="text" class="form-control" 
                                        placeholder="Enter current body parts" name="name">
                                    <input type="text" class="form-control mt-3" 
                                        placeholder="Enter new body parts" name="name">
                                </div>

                                
                            </div>
                            <div class='m-3'>
                                 <div class="mb-3">
                                    <label for='image' class="form-label">Change Image</label>
                                    <input type="file" class="form-control" name="image_file" id="image">
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
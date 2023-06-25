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
                              Add Difficulty
                            </h3>
                        </div>

                        <form id="myForm" method="post" action="{{ route('diff.store') }}" enctype="multipart/form-data">
                          @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Level</label>
                                    <input type="text" class="form-control" placeholder="Enter difficulty level" name="Level" id="Level" required>
                                </div>


                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>

                                <a href="{{ route('admin.other') }}" class="btn btn-danger ml-2">Back</a>
                            </div>
                            <span id="errorMessage" style="color: red;"></span>
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

@section('footer-scripts')
<script>
   const form = document.getElementById('myForm');

form.addEventListener('submit', async (e) => {
  e.preventDefault();

  const input = document.getElementById('Level').value;

  // Check for duplicate value
  const response = await fetch('{{ route('diff.checkDuplicate') }}', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': '{{ csrf_token() }}',
    },
    body: JSON.stringify({ input }),
  });

  const data = await response.json();

  if (data.duplicate) {
    // Display alert for duplicate value
    alert('Error: Input value already exists.');
  } else {
    // Continue with form submission
    form.submit();
  }
});


</script>
@endsection

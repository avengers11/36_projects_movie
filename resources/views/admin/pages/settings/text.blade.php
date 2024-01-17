@extends('admin.layout.master')
@section('admin_master')

<!--  -->
<div class="container">
    <div class="row">
        @if (session() -> has('msg'))
            <div class="alert alert-success col-12" role="alert">
                <h4 class="alert-heading">Alert</h4>
                <hr>
                <p>{{session() -> get('msg')}}</p>
            </div>
        @endif
    </div>
</div>

<form method="POST" action="{{ route('admin_settings_edit_textfile_api') }}" enctype="multipart/form-data">
    <div class="form-group mb-3">
        <label>Your Text File</label>
        <textarea name="txt" id="" cols="30" rows="10" class="form-control">{{$file}}</textarea>
    </div>
    <input type="submit" value="CONFIRM" class="btn btn-success">
</form>


@endsection

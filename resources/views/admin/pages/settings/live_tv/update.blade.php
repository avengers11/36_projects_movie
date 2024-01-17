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

<form method="post" action="{{ route('admin_settings_livetv_update_api', ['id' => $data['id']]) }}" enctype="multipart/form-data">

    <img style="width: 10rem"  src="{{ asset('images/products/'.$data['pic']) }}" alt="">
    <div class="form-group mb-3">
        <label>TV Img</label>
        <input type="file" class="form-control" name="img" />
    </div>

    <div class="form-group mb-3">
        <label>TV name</label>
        <input type="text" class="form-control" name="name" value="{{$data['name']}}"/>
    </div>

    <div class="form-group mb-3">
        <label>Links</label>
        <input type="text" class="form-control" name="links1" value="{{$data['links1']}}"/>
    </div>

    <div class="form-group mb-3">
        <label for="content18">18+ content</label>
        <input type="checkbox" name="content18" id="content18" value="yes" @if($data['content18'] == "yes") checked @endif />
    </div>

    <br>
    <hr>
    <br>

    <input type="submit" value="CONFIRM" class="btn btn-success">

</form>


@endsection

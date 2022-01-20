@extends('pages.adminhome')
@section('content')
    {!! Toastr::message() !!}
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="add-permision">
                <h5 class="text-secondary mt-3 mb-3">İstifadəçi icazəsi əlavə et.</h5>
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger"> {{ $error }} </div>
                @endforeach
                <form action=" {{route('add.permission')}} " method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="persmissionId" class="form-label">İcazə adı:</label>
                        <input type="text" class="form-control" name="permission" id="persmissionId" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Əlavə et</button>
                </form>
            </div>
        </div>
    </div>
@endsection
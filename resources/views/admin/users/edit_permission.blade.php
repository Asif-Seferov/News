@extends('pages.adminhome')
@section('content')
    {!! Toastr::message() !!}
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="add-permision">
                <h5 class="text-secondary mt-3 mb-3">İstifadəçi icazəsini yenilə.</h5>
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger"> {{ $error }} </div>
                @endforeach
                <form action=" {{route('update.permission', $editPermissionId->id)}} " method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="EditPersmissionId" class="form-label">İcazə adı:</label>
                        <input type="text" class="form-control" name="permission" value=" {{$editPermissionId->name}} " id="EditPersmissionId" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Yenilə</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@extends('pages.adminhome')
@section('content')
    <div class="container">
        <div class="row">
        {!! Toastr::message() !!}
        <div class="container user-role mt-5 mb-5">
            <div class="row">
                <div class="col-md-6 m-auto">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger mt-3" >
                            {{ $error }} 
                        </div>
                    @endforeach
                    
                <form action=" {{route('user.role.add')}} " method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="user_role" class="form-label">İstifadəçi rolu</label>
                        <input type="text" class="form-control" name="user_role" id="user_role" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
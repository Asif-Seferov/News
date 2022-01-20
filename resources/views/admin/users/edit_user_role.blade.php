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
                    
                <form action=" {{route('update.user.role', $editRole->id)}} " method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="user_role" class="form-label">İstifadəçi rolu</label>
                        <input type="text" class="form-control" name="user_role" value=" {{$editRole->name}} " id="user_role" aria-describedby="emailHelp">
                    </div>
                    
                    <h3 class="text-center mb-5 text-secondary">İcazələr</h3>
                    @foreach($permissions as $permission)
                        <div class="permissions d-flex justify-content-between">
                                <label class="form-check-label" for="mySwitch" style="font-size: 18px; font-family: Verdana;">{{ $permission->name }}</label>
                                <label class="switch">
                                    <input type="checkbox" name="permissions[]" @if($editRole->hasPermissionTo($permission->name)) checked @endif value="{{$permission->id}}" id="mySwitch">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Yenilə</button>
                </form>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
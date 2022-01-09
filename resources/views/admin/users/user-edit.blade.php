@extends('pages.adminhome')
@section('content')
{!! Toastr::message() !!}
    <div class="col-9 col-sm-9 col-md-6 m-auto">
            @foreach($errors->all() as $error)
                @isset($error)
                    <div class="btn btn-danger mt-3 w-100">
                        <p class="text-start"> {{$error}} </p>
                    </div>
                @endisset  
            @endforeach
        <h5 class="text-secondary mt-3">Qeydiyyat formunu yeniləyin</h5>
    <form action=" {{route('user.update', $user->id)}} " method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Ad</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" aria-describedby="emailHelp" placeholder="Ad">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Soyad</label>
            <input type="text" class="form-control" id="surname" name="surname" value="{{$user->surname}}" placeholder="Soyad">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
        </div>
         <!-- <div class="mb-3">
            <label for="password" class="form-label">Şifrə</label>
            <input type="password" class="form-control" id="password" value=" {{$user->password}} " placeholder="Yeni şifrə daxil edin">
        </div>  -->
        <label>Rol</label>
        <div class="mb-3">
            <select class="form-control" aria-label="Default select example" name="roLId">
                @foreach($user->getRoLId->all() as $role)
                <option value=" {{$role->id}} " @if($role->id === $user->roLId) selected @endif> {{$role->rol_name}} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">İstifadəçi durumu</label>
            <div class="form-check form-switch">
                <label class="switch">
                    <input type="checkbox" name="user_status" @if($user->user_status === "on") checked @endif>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <button type="submit" id="userButton" class="btn btn-success mb-3">Yenilə</button>
    </form>
    </div>
   
@endsection


    


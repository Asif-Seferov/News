@extends('pages.adminhome')
@section('content')
{!! Toastr::message() !!}
    <div class="col-9 col-sm-9 col-md-6 m-auto">
        <h5 class="text-secondary mt-3">Qeydiyyat formu</h5>
    <form action=" {{route('user.add')}} " method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Ad</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Ad">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Soyad</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Soyad">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="surname" name="email" placeholder="E-mail">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Şifrə</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Şifrə">
        </div>
        <label>Rol</label>
        <div class="mb-3">
            <select class="form-control" aria-label="Default select example" name="roLId">
                @foreach($roles as $role)
                <option value=" {{$role->id}} "> {{$role->rol_name}} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">İstifadəçi durumu</label>
            <div class="form-check form-switch">
                <label class="switch">
                    <input type="checkbox" name="user_status">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <button type="submit" id="userButton" class="btn btn-success mb-3">Qeydiyyatdan keç</button>
    </form>
    </div>
   <!--  <script>
        $(document).ready(function(){
            Toastr::success('message', 'title', ['options']);
        });
    </script> -->
@endsection

    


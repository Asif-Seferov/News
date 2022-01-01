@extends('pages.adminhome')
@section('content')
    <div class="user_list">
        <h5 class="text-secondary mt-3 mb-3">İstifadəçilərin siyahısı</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Ad, soyad</th>
                <th scope="col">Rolu</th>
                <th scope="col">Statusu</th>
                <th scope="col">Yaranma tarixi</th>
                <th scope="col">Seçimlər</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userLists as $userList)
                <tr>
                <td> {{ $userList->name.' '.$userList->surname }} </td>
                <td> {{ $userList->getRoLId->rol_name }} </td>
                <td> {{ $userList->user_status }} </td>
                <td> {{ $userList->created_at  }} </td>
                <td>
                    <a href="" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a> &nbsp;
                    <a href="" class="btn btn-danger btn-sm btn_sm_users"><i class="fas fa-user-minus"></i></a>
                </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection

@extends('pages.adminhome')
@section('content')
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between">
                        <h5 class="text-secondary mt-3 mb-3">İstifadəçi rolları</h5>
                        <p class="mt-3 mb-3"><a href=" {{route('user.role.add.page')}} " class="btn btn-danger"><i class="fas fa-plus"></i> Rol əlavə et</a></p>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Rol Adı</th>
                            <th scope="col">Yaranma tarixi</th>
                            <th scope="col">Yenilənmə tarixi</th>
                            <th scope="col">Seçimlər</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userRoles as $userRole)
                                <tr id="item-{{$userRole->id}}">
                                <td> {{ $userRole->rol_name }} </td>
                                <td>{{ $userRole->created_at }}</td>
                                <td>{{ $userRole->updated_at }}</td>
                                <td>
                                    <a href=" {{route('edit.user.role', $userRole->id)}} " class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;
                                    <a href="#" class="btn btn-danger btn-sm delete_user_role" data-id="{{$userRole->id}}" data-item="#item-{{$userRole->id}}"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
@endsection
@section('page_script')
    <script>
        $(document).ready(function(){
            $('.delete_user_role').click(function(e){
                e.preventDefault();
                var userRoleId = $(this).data('id');
                var deletedItem = $(this).data('item');
                var url = '{{route('delete.user.role')}}';
                
                swal({
                    title: "Seçilmiş istifadəçi rolunu silmək istədiyinizdən əminsiniz?",
                    text: "Əgər istifadəçi rolu silinərsə, bir daha geri qaytarılmayacaq!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        $.post(url, {data:userRoleId}, function(response){
                            if(response.status === "success"){
                                $(deletedItem).remove();
                                swal(response.message, {icon: "success",});
                            }
                            if(response.status === 'error'){
                                swal(response.message, {icon: "error",});
                            }
                        })
                    }
                });
                
            })
        })
    </script>
@endsection
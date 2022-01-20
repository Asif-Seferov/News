@extends('pages.adminhome')

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between mt-3">
                <h5 class="text-secondary">İstifadəçi icazələri</h5>
                <div><a href=" {{route('add.permision.page')}} " class="btn btn-danger"><i class="fas fa-plus"></i> İcazə əlavə et</a></div>
            </div>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                    <th scope="col">İcazələr</th>
                    <th scope="col">Yaranma tarixi</th>
                    <th scope="col">Yenilənmə tarixi</th>
                    <th scope="col">Seçimlər</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $permission)
                        <tr id="item-{{$permission->id}}">
                        <td> {{ $permission->name }} </td>
                        <td> {{ $permission->created_at }} </td>
                        <td> {{ $permission->updated_at }} </td>
                        <td>
                            <a href=" {{route('edit.permission', $permission->id)}} " class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                            <a href="#" class="btn btn-danger btn-sm delete-permission" data-id="{{$permission->id}}" data-item="#item-{{$permission->id}}"><i class="fas fa-trash-alt"></i></a>
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
            $('.delete-permission').click(function(e){
                e.preventDefault();
                var permissionId = $(this).data('id');
                var deletedItem = $(this).data('item');
                var url = '{{route('delete.permission')}}';

                swal({
                    title: "Seçilmiş icazəni silmək istədiyinizdən əminsiniz?",
                    text: "Əgər istifadəçi icazəsi silinərsə, bir daha geri qaytarılmayacaq!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        $.post(url, {data: permissionId}, function(response){
                            if(response.status === "success"){
                                $(deletedItem).remove();
                                swal(response.message, {icon: "success",});
                            }
                            if(response.status === "error"){
                                swal(response.message, {icon: "error",})
                            }
                        })
                    }
                }); 
                
            })
        })
    </script>
@endsection
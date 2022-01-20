
@extends('pages.adminhome')
@section('content')
    
    
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-secondary mt-3 mb-3">İstifadəçilərin siyahısı</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Ad, soyad</th>
                        <th scope="col">Statusu</th>
                        <th scope="col">Rolu</th>
                        <th scope="col">Yaranma tarixi</th>
                        <th scope="col">Seçimlər</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userLists as $userList)
                        <tr id="item-{{$userList->id}}">
                            <td> {{ $userList->name.' '.$userList->surname }} </td>
                            <td> {{ $userList->user_status }} </td>
                            <td> 
                                @foreach($userList->roles as $role)
                                    {{ $role->name }}
                                @endforeach
                            </td>
                            <td> {{ $userList->created_at  }} </td>
                            
                            <td>
                                <a href=" {{route('user.edit', $userList->id)}} " class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a> &nbsp;
                                @can('Silmək')   
                                <!--<input type="hidden" class="user_delete_value" value=" {{$userList->id}} ">-->
                                <a href="#" data-id="{{$userList->id}}" data-item="#item-{{$userList->id}}" class="btn btn-danger btn-sm btn_sm_users delete_user"><i class="fas fa-user-minus"></i></a>
                                @endcan
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
       
          $('.delete_user').click(function(e){
              e.preventDefault();

              var user_delete_id = $(this).data('id');
              var deleted_item = $(this).data('item');
              var url = '{{route('user.delete')}}';

              //console.log(user_delete_id + ' | ' + url);
              
             swal({
                title: "Seçilmiş istifadəçini silmək istədiyinizdən əminsiniz?",
                text: "Əgər istifadəçi silinərsə, bir daha geri qaytarılmayacaq!",
                icon: "warning",
                buttons: true,
                dangerMode: true,

            }).then((willDelete) => {
                if (willDelete) {                    

                    $.post(url, {data:user_delete_id}, function(response){
                        if(response.status === 'success'){
                            $(deleted_item).remove();
                            swal(response.message, {icon: "success",});
                        }
                        if(response.status === 'error'){
                            swal(response.message, {icon: "error",});
                        }
                    });            
                }
            }); 
          });
      });
  
    </script>
@endsection

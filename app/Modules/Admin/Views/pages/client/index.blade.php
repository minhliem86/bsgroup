@extends('Admin::layouts.main-layout')

@section('link')
    {{Html::link(route('admin.client.create'),'Add New',['class'=>'btn btn-primary'])}}
    @if(!$inst->isEmpty())
    <button type="button" class="btn btn-danger" id="btn-remove-all">Remove All Selected</button>
    @endif
@stop

@section('title','Project')

@section('content')
    @if(Session::has('error'))
    <div class="alert alert-danger alert-dismissable">
      <p>{{Session::get('error')}}</p>
    </div>
    @endif
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissable">
      <p>{{Session::get('success')}}</p>
    </div>
    @endif
    <div class="row">
      <div class="col-sm-12">
         @if(!$inst->isEmpty())
        <table class="table table-hover">
          <thead>
            <tr>
              <th width="20%">ID</th>
              <th width="20%">Photos</th>
<<<<<<< HEAD
              <th width="20%">Order <button class="btn btn-primary btn-xs" id="btn-updateOrder">Update Order</button></th>
=======
              <th width="20%">Order <button class="btn btn-primary btn-xs" id="btn-UpdateOrder">Update Order</button></th>
>>>>>>> 86f1fcd68ad3fce60e510094ecbe44e1452d79c7
              <th width="20%">Status</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            @foreach($inst as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td><img src="{{asset('public/upload').'/'.$item->img_url }}" width="100" alt=""></td>
              <td ><input type="text" name="dataOrder" data-id="{{$item->id}}" value="{{$item->order}}" class="form-control" /></td>
              <td>
                  <label class="toggle">
                    <input type="checkbox" name="status" value="1" data-id="{{$item->id}}" {{$item->status == 1 ? 'checked' : '' }}  >
                    <span class="handle"></span>
                  </label>
              </td>
              <td align="right">
                <a href="{{route('admin.client.edit', $item->id)}}" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> EDIT</a>
                <span class="inline-block-span">
                     {{Form::open(['route'=>['admin.client.destroy',$item->id],'method'=> "delete" ])}}
                    <button class="btn  btn-danger btn-xs remove-btn" type="button" attrid="{{$item->id}}" onclick="confirm_remove(this);"><i class="glyphicon glyphicon-remove"></i> REMOVE</button>
                    {{Form::close()}}
                </span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @else
            <p>No data</p>
        @endif
      </div>
    </div>
@endsection

@section('script')
    <!-- DATA TABLE -->
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/dist/js/plugins/datatables/jquery.dataTables.min.css">
    <script src="{{asset('/public/assets/admin')}}/dist/js/plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- ALERTIFY -->
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/dist/js/plugins/alertify/alertify.css">
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/dist/js/plugins/alertify/bootstrap.min.css">
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/dist/js/plugins/alertify/alertify.js"></script>
    <script>
      $(document).ready(function(){
        hideAlert('.alert');
        // REMOVE ALL
        var table = $('table').DataTable({
          'ordering': false,
          "bLengthChange": true,
          "bFilter" : false,
          "searching": false
        });
        /*SELECT ROW*/
        $('table tbody').on('click','tr',function(){
          $(this).toggleClass('selected');
        })

        // SEARCH TAB
        $('input[type="search"]').on('keyup', function(){
          table.columns(1).search(this.value).draw();
        })
        $('#btn-remove-all').click( function () {
          var data = [];
          table.rows('.selected').data().each(function(index, e){
            data.push(index[0]);
          });
          alertify.confirm('You can not undo this action. Are you sure ?', function(e){
            if(e){
              $.ajax({
                'url':"{{route('admin.client.deleteAll')}}",
                'data' : {arr: data,_token:$('meta[name="csrf-token"]').attr('content')},
                'type': "POST",
                'success':function(result){
                  if(result.msg = 'ok'){
                    table.rows('.selected').remove();
                    table.draw();
                    alertify.success('The data is removed!');
                  }
                }
              });
            }
          })
        })

        // UPDATE ORDER

        $(document).on('click', '#btn-UpdateOrder', function(){
            const data_order = {};
            $('input[name="dataOrder"]').each(function(i){
                const id = $(this).data('id');
                const value = $(this).val();
                data_order[id] = value;
            });
            $.ajax({
                url: "{{route('admin.client.updateOrder')}}",
                type: "POST",
                data: {data: data_order, _token:$('meta[name="csrf-token"]').attr('content') },
                success: function(rs){
                    if(!rs.error){
                        location.reload();
                    }
                }
            })
        });

        // UPDATE STATUS
        $(document).on('change', 'input[name="status"]', function(){
            let value = 0;
            if($(this).is(':checked')){
                value = 1;
            }
            // console.log(value);
            const id = $(this).data('id');
            $.ajax({
                url: "{{route('admin.client.updateStatus')}}",
                type: "POST",
                data: {value: value, id: id, _token:$('meta[name="csrf-token"]').attr('content')},
                success: function(rs){
                    if(!rs.error){
                        alertify.success('Status Changed.')
                    }
                }
            })

        })


      })

      function confirm_remove(a){
          alertify.confirm('You can not undo this action. Are you sure ?', function(e){
              if(e){
                  a.parentElement.submit();
              }
          });
      }

      function hideAlert(a){
          setTimeout(function(){
              $(a).fadeOut();
          },2000)
      }
    </script>
@stop

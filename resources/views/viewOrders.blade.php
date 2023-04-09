@extends('admintemplate')

@section('page-layout')
<div class="table-responsive">          
  <table class="table" style="margin: 0px; background-color:#efd7c8c7; ">
    <thead style = "border: 4px solid #c19191;">
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Email</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody style="border: 4px solid #c19191;">
    <?php 
          use App\Models\order;
          $data =order::all();?>
          @foreach($data as $dat)
          <tr>
            <td >{{$dat['oid']}}</td>
            <td >{{$dat['firstname']}}</td>
            <td >{{$dat['email']}}</td>
            <td >{{$dat['address']}}</td>
           </tr>

          @endforeach
    </tbody>
  </table>
  </div>
@endsection
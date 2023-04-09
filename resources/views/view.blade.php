@extends('admintemplate')

@section('page-layout')
<div class="table-responsive">          
  <table class="table" style="margin: 0px; background-color:#efd7c8c7; ">
    <thead style = "border: 4px solid #c19191;">
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody style="border: 4px solid #c19191;">
    <?php 
          use App\Models\Customer;
          $data =customer::all();?>
          @foreach($data as $dat)
          <tr>
            <td >{{$dat['sno']}}</td>
            <td >{{$dat['fname']}}</td>
            <td >{{$dat['lname']}}</td>
            <td >{{$dat['email']}}</td>
            <?php 
            
            ?>
            <td ><a href="admin/removecustomer/{{$dat['fname']}}/{{$dat['email']}}" style ="margin:0px"><button type="submit" class=" sub btn btn-default" style ="width:100px" >Delete</button></a></td>
          </tr>

          @endforeach
    </tbody>
  </table>
  </div>
@endsection
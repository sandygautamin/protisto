@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
<div id="jCrumbs" class="breadCrumb module">
    <div style="overflow:hidden; position:relative; width: 979px;">
      <div>
         <ul style="width: 5006px;">
            <li class="first">
                  <a href="{{ route('home') }}"><i class="glyphicon glyphicon-home"></i></a>
            </li>
            <li>
               <span style="width: 50px;"><a href="{{ route('admin.dashboard') }}" style="width: 84px;">Admin</a></span>
               <div class="chevronOverlay" style="display: block;"></div>
            </li>
            <li>
               <span style="width: 50px;"><a href="{{ route('admin.orders') }}" style="width: 84px;">Orders</a></span>
               <div class="chevronOverlay" style="display: block;"></div>
            </li>
            <li class="last">
               <span>Detail</span>
               <div class="chevronOverlay" style="display: block;"></div>
            </li>
            
         </ul>
      </div>
    </div>
</div>
</div>
</div>



<div class="row">
 <div class="col-sm-12 col-md-12">
 <h3 class="heading">Detail Order</h3>

<table class="table table-striped">
<tbody>
<tr>		
		<th> First Name </th>
		<td>{{$order->first_name }}</td>
	</tr>
	<tr>
		<th> Last Name </th>
		<td>{{$order->last_name }}</td>
	</tr>
	<tr>
		<th> Email </th>
		<td>{{$order->email }}</td>
	</tr>
	<tr>
		<th> Package Name </th>
		<td>{{$order->package_name }}</td>
	</tr>
	<tr>
		<th> Price </th>
		<td>${{$order->price }}</td>
	</tr>
	<tr>
		<th> Address</th>
		<td>{{$order->address }}</td>
	</tr>
	<tr>
		<th> Address 2</th>
		<td>{{$order->address2 }}</td>
	</tr>
	<tr>
		<th> country</th>
		<td>{{$countries[$order->country] }}</td>
	</tr>
	<tr>
		<th> State</th>
		<td>{{$order->state }}</td>
	</tr>
	<tr>
		<th> Zip</th>	
		<td>{{$order->zip }}</td>
	</tr>
	<tr>
		<th> Order Creaaded On </th>	
		<td>{{$order->created }}</td>
	</tr>

	<tr>
		<th> Next Due Date</th>	
		<td>{{date("Y-m-d",strtotime($order->next_due_date))}}</td>
	</tr>

	<tr>
		<th> Order Status</th>	
		<td>{{$order->status}}</td>
	</tr>

	<tr>
		<th> Profile ID</th>	
		<td>{{$order->profile_id}}</td>
	</tr>
	</tr>

</tbody>
</table>
</div>
</div>


@endsection

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
               <span>List</span>
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
 <h3 class="heading">Orders</h3>
<table class="table table-striped">
<thead>
		
	<tr>
	<th> Sr. No. </th>
	<th> First Name </th>
	<th> Last Name </th>
	<th> Email </th>
	<th> Package Name </th>
	<th> Price </th>
	<th> Address</th>


	<th>Date</th>
	<th>Next Due Date</th>
	<th>Payment Type</th>
	<th> Status </th>
	<th>Action</th>
	
	</tr>
</thead>
<tbody>

@foreach($orders as $key=>$order)
<tr>
<td>{{ ++$key }}</td>
<td>{{ $order->first_name }}</td>
<td>{{ $order->last_name }}</td>
<td>{{ $order->email }}</td>
<td>{{ $order->package_name }}</td>
<td>${{ $order->price }}</td>
<td>{{ $order->address }}</td>

<td>{{ $order->created }}</td>
<td>@if($order->next_due_date!=''){{ date("Y-m-d",strtotime($order->next_due_date)) }}@endif</td>
<td> {{ ucfirst($order->payment_method) }}</td>
<td>{{ $order->status}}</td>

<td><a href="{{url('admin/order/view/'.$order->id) }}"><i class="fa fa-edit"></i>&nbsp;View</a> | <a href="{{url('admin/order/destroy/'.$order->id) }}"><i class="fa fa-edit"></i>&nbsp;Delete</a></td>

</tr>
@endforeach
</tbody>
</table>

{{ $orders->links() }}
</div>
</div>
@endsection

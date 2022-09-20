@extends('admin.layoutes.master')
@section('page')
Orders Details
@endsection
@section('content')


    <div class="container">


            <div class="col-md-12">

                <div class="card">
                    <div class="header">
                        <h4 class="title">Orders Detail</h4>
                        <p class="category">List of all Orders</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>
                               <tr>
                                <td>{{$order->id}}</td>
                                <td>{{@$order->date}}</td>
                                <td>{{@$order->OrderProduct[0]->quantity}}</td>
                                <td>{{@$order->OrderProduct[0]->price}}</td>
                                <td>
                                    @if ($order->status)
                                    <span class="label label-success">Confirmed</span>
                                    @else
                                    <span class="label label-warning">Pending</span>
                                    @endif
                                </td>
                            </tr>


                            </tbody>
                        </table>


                </div>
            </div>
        </div>
    </div>


{{-- product details --}}




    <div class="container">


            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title"> Product Details</h4>
                        <p class="category">Product</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ @$order->product[0]->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ @$order->product[0]->name}}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{ @$order->product[0]->price}}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td><img src="{{asset('uploads/'. @$order->product[0]->image)}}" height="50"
                                    width="50" alt="Image"></td>
                                </tr>



                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        

{{-- </div>





<div class="content">
    <div class="container-fluid"> --}}
        {{-- <div class="row"> --}}

            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title"> User Details</h4>
                        <p class="category">User</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ @$order->user->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ @$order->user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ @$order->user->email}}</td>
                                </tr>
                                <tr>
                                    <th>Registered At</th>
                                   <td>{{ @$order->created_at}}
                                </tr>



                            </tbody>
                        </table>



            </div>
        </div>
    </div>
</div>
@endsection

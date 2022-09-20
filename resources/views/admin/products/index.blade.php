@extends('admin.layoutes.master')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">All Products</h4>
                        <p class="category">List of all stock</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                            <tr>
                              <td>{{$d->id}}</td>
                              <td>{{$d->name}}</td>
                              <td>{{$d->price}}</td>
                              <td>{{$d->description}}</td>

        <td>
            <img src="{{asset('uploads/products/'.$d->image)}}" width="50px" height="50px">

                    </td>

                 <td><a href="{{route('products.edit',$d->id)}}" class="btn btn-info">Edit</a></td>
                 <td><a href="{{route('delete',$d->id)}}" class="btn btn-info">Delete</a></td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

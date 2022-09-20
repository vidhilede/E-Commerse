@extends('admin.layoutes.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
             @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="col-lg-10 col-md-10">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Product</h4>
                    </div>
                    <div class="content">

<div class="container">

                        <form action={{route('update',$data->id)}} Method="post" enctype="multipart/form-data">
                         @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product Name:</label>
                                        <input type="text" class="form-control border-input" placeholder="Macbook pro" name="name" value="{{$data->name}}">
                                    </div>>
                                    </div>

                                    <div class="form-group">
                                        <label>Product Price:</label>
                                        <input type="text" class="form-control border-input" placeholder="$2500" name="price" value="{{$data->price}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Product Description:</label>
                                        <textarea  id="" cols="30" rows="10"
                                                  class="form-control border-input" placeholder="Product Description" name="description" > {{$data->description}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Product Image:</label>
                                        <input type="file" class="form-control border-input" name="image">
                                    </div>

                                </div>

                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Add Product</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

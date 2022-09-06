@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Products</h2>

            </div>

            <div class="pull-right">

                @can('product-create')

                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>

                @endcan

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

	    @foreach ($products as $product)

	    <tr>

	        <td>{{ ++$i }}</td>

	        <td>{{ $product->name }}</td>

	        <td>{{ $product->detail }}</td>

	        <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                    @can('product-edit')

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                    @endcan


                    @csrf

                    @method('DELETE')

                    @can('product-delete')

                    <button type="submit" class="btn btn-danger">Delete</button>

                    @endcan

                </form>

	        </td>

	    </tr>

	    @endforeach

    </table>


    {!! $products->links() !!}


@endsection
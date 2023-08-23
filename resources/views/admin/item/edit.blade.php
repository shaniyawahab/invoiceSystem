@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Edit & Update item</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('update-item/'.$item->id) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" value="{{ $item->name }}"name="name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Quantity</label>
                        <input type="text" value="{{ $item->quantity }}" name="quantity" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Unit Price</label>
                        <input type="text" value="{{ $item->unit_price }}" name="unit_price" class="form-control">
                    </div> <div class="col-md-6">
                        <label>Quantity</label>
                        <input type="text" value="{{ $item->tax }}" name="tax" class="form-control">
                    </div>
                   
                    <div class="col-md-6">
                       <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    
@endsection
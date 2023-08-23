@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Add Item</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-item') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>Quantity</label>
                        <input type="text"  name="quantity" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>Unit Price</label>
                        <input type="text" name="unit_price" class="form-control" required>
                    </div>
                     <div class="col-md-6">
                        <label>Tax</label>
                        <div class="dropdown btn btn-secondary dropdown-toggle">
                            <select class="dropdown btn btn-secondary dropdown-toggle" name="tax" id="tax" required>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                              </select>
                          </div>
                    </div>
                   
                    <div class="col-md-6">
                       <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    
@endsection
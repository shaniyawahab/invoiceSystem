<?php $total_with_tax = 0 ?>
<?php $total_without_tax = 0 ?>
@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Items</h1>
            <hr>
        </div>
        <div class="card-body">
            <table class="table bordered table-striped">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Quantity</td>
                        <td>Unit Price($)</td>
                        <td>Tax(%)</td>
                        <td>Subtotal($)</td>
                        <td>Subtotal(Tax Inc)</td>
                        <td>Action</td>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->unit_price }}</td>
                            <td>{{ $item->tax }}</td>
                            <td>{{ ($item->quantity*$item->unit_price) }}</td>
                            <td>{{ (($item->quantity*$item->unit_price)+($item->quantity*$item->unit_price*$item->tax)/100) }}</td>
                            <?php $total_with_tax += (($item->quantity*$item->unit_price)+($item->quantity*$item->unit_price*$item->tax)/100) ?>
                            <td>
                                <a href="{{ url('add-discount/'.$item->id) }}" class="btn btn-primary">Add Discount</a>
                            </td>
                        </tr>
                    @endforeach
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total :$ {{ $total_with_tax }} </td>
                    </tr>
                </tbody>
            </table>
            <div align= "right">
                <a href="{{ url('generate-invoice') }}" class="btn btn-danger">Generate Invoice</a>
            </div>
        </div>
    </div>
    
@endsection
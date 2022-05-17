@extends('product.layouts.main')
@section('content')
    <h2 class="text-center">Products mega discount</h2>
    <table id="app" class="display" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Indeks</th>
            <th>Name</th>
            <th>Ean</th>
            <th>Main price</th>
            <th>Eshop price</th>
            <th>Discount</th>
            <th>Url</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products->productsmegadiscounted->product as $value)
            <tr>
                <td>{{$value->attributes()['id']}}</td>
                <td>{{$value->indeks}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->ean}}</td>
                <td>{{$value->mainprice}}</td>
                <td>{{$value->eshopprice}}</td>
                <td>{{$value->discount}}</td>
                <td><a target="_blank" href="{{$value->url}}">{{$value->url}}</a></td>
            </tr>
        @endforeach
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Indeks</th>
            <th>Name</th>
            <th>Ean</th>
            <th>Main price</th>
            <th>Eshop price</th>
            <th>Discount</th>
            <th>Url</th>
        </tr>
        </tfoot>
    </table>
@endsection

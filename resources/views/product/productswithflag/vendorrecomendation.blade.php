@extends('product.layouts.main')
@section('content')
<h2 class="text-center">Products with flag - Vendor recommendation</h2>
<table id="app" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Indeks</th>
        <th>Name</th>
        <th>Url</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products->productswithflags->vendorrecomendation->product as $value)
        <tr>
            <td>{{$value->indeks}}</td>
            <td>{{$value->name}}</td>
            <td><a target="_blank" href="{{$value->url}}">{{$value->url}}</a></td>
        </tr>
    @endforeach
    <tfoot>
    <tr>
        <th>Indeks</th>
        <th>Name</th>
        <th>Url</th>
    </tr>
    </tfoot>
</table>
@endsection

<table class="table mt-5">
    <thead>
    <tr>
        <th scope="col">@sortablelink('id', 'Id')</th>
        <th scope="col">@sortablelink('name', 'Indeks')</th>
        <th scope="col">@sortablelink('Name')</th>
        <th scope="col">@sortablelink('Ean')</th>
        <th scope="col">@sortablelink('Main price')</th>
        <th scope="col">@sortablelink('Eshop price')</th>
        <th scope="col">@sortablelink('Discount')</th>
        <th scope="col">Url</th>
    </tr>
    </thead>
    <tbody>

    @foreach($products as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
        </tr>
@endforeach

    </tbody>
</table>
{!! $products->appends(\Request::except('page'))->render() !!}


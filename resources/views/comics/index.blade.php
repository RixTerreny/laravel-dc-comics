@extends("home")

@section("content")

<h2>Index</h2>

<table class="table table-striped">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Series</th>
        <th>Sale date</th>
        <th>Type</th>
    </thead>
    
    <tbody>
        @foreach ( $comics as $comic )
            <tr>
                <td>{{$comic->title}}</td>
                <td>{{Str::limit( $comic->description,130)}}</td>
                <td>{{$comic->price}} $</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
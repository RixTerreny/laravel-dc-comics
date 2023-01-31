@extends("home")

@section("content")
<div class="container">

    
<h2>Index</h2>

<table class="table table-striped">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Series</th>
        <th>Sale date</th>
        <th>Type</th>
        <th></th>
    </thead>
    
    <tbody>
        @foreach ( $comics as $comic )
            <tr>
                <td>{{$comic->title}}</td>
                <td>{{Str::limit( $comic->description,50)}}</td>
                <td>{{$comic->price}} $</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a class="me-1" href="{{route("comics.show",$comic->id)}}">&#128065;</a>
                    <a href="{{route("comics.edit",$comic->id)}}">&#9998;</a>
                </td>
            </tr>
        @endforeach
        <tr>
            <td class="m-auto ">
                <a href="{{route("comics.create")}}" class="btn btn-primary">
                    Crea
                </a>
            </td>
        </tr>
    </tbody>
</table>

</div>
@endsection
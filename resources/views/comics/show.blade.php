@extends("home")

@section("content")
<div class="container">
    <h2>Show</h2>

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

            <tr>
                <td>{{$comic->title}}</td>
                <td>{{Str::limit( $comic->description,130)}}</td>
                <td>{{$comic->price}} $</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <form action="{{route('comics.destroy',$comic->id) }}" method="POST">
                        @csrf                        
                        @method("delete")
                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>

    </tbody>
</table>
<div>
    <a class="btn btn-primary" href="{{route("comics.index")}}">&#8630; Indietro</a>
</div>
</div>
@endsection
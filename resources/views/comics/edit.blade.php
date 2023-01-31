@extends("home")

@section("content")

<div class="container">
    <h2>Edit</h2>
    <form action="{{ route('comics.update',$comic->id) }}" method="POST">
        @csrf

        @method('put')

        <div class="mb-3">
            <lable class="form-lable">Title</lable>
            <input type="text" class="form-control" name="title" value="{{$comic->title}}">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Description</lable>
            <textarea class="form-control" name="description" id="" cols="30" rows="5">{{$comic->description}}</textarea>

        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Thumb</lable>
            <input type="text" class="form-control" name="thumb" value="{{$comic->thumb}}">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Price</lable>
            <input type="number" class="form-control" name="price" value="{{$comic->price}}">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Series</lable>
            <input type="text" class="form-control" name="series" value="{{$comic->series}}">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Sale date</lable>
            <input type="text" class="form-control" name="sale_date" value="{{$comic->sale_date}}">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Type</lable>
            <input type="text" class="form-control" class="type" value="{{$comic->type}}">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Created at</lable>
            <input type="text" class="form-control" name="created_at" value="{{$comic->created_at}}">
        </div>
    
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>

</div>
@endsection
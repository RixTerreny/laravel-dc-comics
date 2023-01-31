@extends("home")

@section("content")

<div class="container">
    <h2>Create</h2>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <lable class="form-lable">Title</lable>
            <input type="text" class="form-control" name="title">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Description</lable>
            <input type="text" class="form-control" name="description">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Thumb</lable>
            <input type="text" class="form-control" name="thumb">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Price</lable>
            <input type="text" class="form-control" name="price">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Series</lable>
            <input type="text" class="form-control" name="series">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Sale date</lable>
            <input type="text" class="form-control" name="sale_date">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Type</lable>
            <input type="text" class="form-control" class="type">
        </div>
    
        <div class="mb-3">
            <lable class="form-lable">Created at</lable>
            <input type="text" class="form-control" name="created_at">
        </div>
    
        <button type="submit" class="btn btn-primary">invia</button>
    </form>

</div>
@endsection
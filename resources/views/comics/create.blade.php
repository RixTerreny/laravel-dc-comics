@extends('home')

@section('content')

    <div class="container">
        <h2>Create</h2>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <lable class="form-lable">Title</lable>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                @error("title")
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <lable class="form-lable">Description</lable>
                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}">
                @error("description")
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <lable class="form-lable">Thumb</lable>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" value="{{old('thumb')}}">
                @error("thumb")
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <lable class="form-lable">Price</lable>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price')}}">
                @error("price")
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <lable class="form-lable">Series</lable>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" value="{{old('series')}}">
                @error("series")
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <lable class="form-lable">Sale date</lable>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{old('sale_date')}}">
                @error("sale_date")
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <lable class="form-lable">Type</lable>
                <input type="text" class="form-control @error('type') is-invalid @enderror" class="type" value="{{old('type')}}">
                @error("type")
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <lable class="form-lable">Created at</lable>
                <input type="text" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{old('created_at')}}">
                @error("created_at")
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">invia</button>
        </form>

    </div>
@endsection

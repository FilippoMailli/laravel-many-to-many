@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach ($errors->all() as $message)
                    {{$message}}
                @endforeach
                <form action="{{route('admin.pages.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="summary">Sommario</label>
                        <input type="text" name="summary" id="summary" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="body">Testo</label>
                        <textarea name="body" rows="30" cols="10" id="body" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select id="category_id" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <h3>Tags</h3>
                        @foreach ($tags as $tag)
                            <label for="tags-{{$tag->id}}">{{$tag->name}}</label>
                            <input type="checkbox" name="tags[]" id="tags-{{$tag->id}}" value="{{$tag->id}}">
                        @endforeach
                    </div>
                    <div class="form-group">
                        <h3>Photos</h3>
                        @foreach ($photos as $photo)
                            <label for="tags-{{$photo->id}}">{{$photo->name}}</label>
                            <input type="checkbox" name="photos[]" id="photos-{{$photo->id}}" value="{{$photo->id}}">
                        @endforeach
                    </div>
                    <input type="submit" value="Salva" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection

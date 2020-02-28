@extends('layouts.app')

@section('content')

@if (session('status'))
<div class="row flex-spaces">
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
</div>
@endif


@if($errors->any())
<div class="row flex-spaces">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<div class="row" style="justify-content: center">
    <div class="col-4 col">
        <label class="paper-btn btn-block " for="modal-1" style="text-align: center">persist your memory!</label>
    </div>
</div>

<input class="modal-state" id="modal-1" type="checkbox">
<div class="modal">

    <label class="modal-bg" for="modal-1"></label>
    <div class="modal-body" style="width:25%;">
        <label class="btn-close" for="modal-1">X</label>
        <h4 class="modal-title">add your memory</h4>
        <form method="POST" action="/">
            @csrf
            <div class="form-group">
                <label for="paperInputs1">Title</label>
                <input @error('title') class="border border-danger" @enderror type="text" name="title"
                    value="{{ old('title') }}" required>
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror

            </div>
            <div class="form-group">
                <label for="paperInputs1">Subtitle</label>
                <input @error('subtitle') class="border border-danger" @enderror type="text" name="subtitle"
                    value="{{ old('subtitle') }}">
                @error('subtitle')
                <p class="text-danger">{{$message}}</p>
                @enderror

            </div>



            <div class="form-group">
                <label>Content</label>
                <textarea class="no-resize  @error('subtitle') border border-danger @enderror" name="content"
                    required>{{ old('content') }}</textarea>
            </div>


            <fieldset class="form-group">
                <legend>Color</legend>
                <label for="paperRadios1" class="paper-radio">
                    <input id="paperRadios1" type="radio" name="color" value="" checked> <span
                        class="text-primary">default<span>
                </label>

                <label for="paperRadios2" class="paper-radio">
                    <input id="paperRadios2" type="radio" name="color" value="secondary"> <span
                        class="text-secondary">blue<span>
                </label>
                <label for="paperRadios3" class="paper-radio">
                    <input id="paperRadios3" type="radio" name="color" value="success"> <span
                        class="text-success">green<span>
                </label>
                <label for="paperRadios4" class="paper-radio">
                    <input id="paperRadios4" type="radio" name="color" value="warning"> <span
                        class="text-warning">yellow<span>
                </label>
                <label for="paperRadios5" class="paper-radio">
                    <input id="paperRadios5" type="radio" name="color" value="danger"> <span
                        class="text-danger">red<span>
                </label>


            </fieldset>

            <div class="form-group">
                <label for="paperInputs1">Image - provide url</label>
                <input @error('img') class="border border-danger" @enderror type="url" name="img"
                    value="{{ old('img') }}">
                @error('img')
                <p class="text-danger">{{$message}}</p>
                @enderror

            </div>


            <input type="submit" class="paper-btn btn-secondary" value="save" />

        </form>
    </div>

</div>

@foreach($memories->chunk(4) as $chunk)
<div class="row">
    @foreach ($chunk as $memory)
    <div class="col-3 col ">
        <div class="card @if($memory->color) background-{{$memory->color}}@endif" style="width: 20rem;">
            <form method="POST" action="{{route('destroy', compact('memory'))}}">
                @csrf
                @method('DELETE')
                <input type="submit" style="margin-left:92%" value="x" />

            </form>

            <div class="card-body">

                <h4 class="card-title">{{$memory->title}}</h4>

                <h5 class="card-subtitle">{{$memory->subtitle}} </h5>

                <p class="card-text">{{$memory->content}}</p>

                <a class="card-link" href="{{route('edit', compact('memory'))}}">edit</a>
                <p>posted {{$memory->added()}}</p>


            </div>

            @if($memory->img)
            <img class="image-bottom" src="{{$memory->img}}">
            @endif
        </div>
    </div>
    @endforeach
</div>
@endforeach

@endsection
@extends('layouts.app')

@section('content')
<div style="margin: 0% 5%;">
    <h1>edit memory</h1>


    <form method="POST" action="{{route('update', compact('memory'))}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="paperInputs1">Title</label>
            <input @error('title') class="border border-danger" @enderror type="text" name="title"
                value="{{ old('title', $memory->title) }}" required>
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror

        </div>
        <div class="form-group">
            <label for="paperInputs1">Subtitle</label>
            <input @error('subtitle') class="border border-danger" @enderror type="text" name="subtitle"
                value="{{ old('subtitle', $memory->subtitle) }}">
            @error('subtitle')
            <p class="text-danger">{{$message}}</p>
            @enderror

        </div>



        <div class="form-group">
            <label>Content</label>
            <textarea class="no-resize  @error('subtitle') border border-danger @enderror" name="content"
                required>{{ old('content', $memory->content) }}</textarea>
        </div>


        <fieldset class="form-group">
            <legend>Color</legend>
            <label for="paperRadios1" class="paper-radio">
                <input id="paperRadios1" type="radio" name="color" value="" @if($memory->color == null) checked @endif >
                <span class="text-primary">default<span>
            </label>

            <label for="paperRadios2" class="paper-radio">
                <input id="paperRadios2" type="radio" name="color" value="secondary" @if($memory->color == 'secondary')
                checked @endif> <span class="text-secondary">blue<span>
            </label>
            <label for="paperRadios3" class="paper-radio">
                <input id="paperRadios3" type="radio" name="color" value="success" @if($memory->color == 'success')
                checked
                @endif> <span class="text-success">green<span>
            </label>
            <label for="paperRadios4" class="paper-radio">
                <input id="paperRadios4" type="radio" name="color" value="warning" @if($memory->color == 'warning')
                checked
                @endif> <span class="text-warning">yellow<span>
            </label>
            <label for="paperRadios5" class="paper-radio">
                <input id="paperRadios5" type="radio" name="color" value="danger" @if($memory->color == 'danger')
                checked
                @endif> <span class="text-danger">red<span>
            </label>


        </fieldset>

        <div class="form-group">
            <label for="paperInputs1">Image - provide url</label>
            <input @error('img') class="border border-danger" @enderror type="url" name="img"
                value="{{ old('img', $memory->img) }}">
            @error('img')
            <p class="text-danger">{{$message}}</p>
            @enderror

        </div>


        <input type="submit" class="paper-btn btn-secondary" value="save" />

    </form>
</div>


@endsection
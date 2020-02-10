@extends('layouts.app')

@section('content')

<h1>what you have to do ?</h1>

<form method="POST" action="todo">
    @csrf
    <div class="form-group">
        <label for="paperInputs1">add todo</label>
        <input @error('title') class="border border-danger" @enderror type="text" name="title"
            value="{{ old('title') }}" required>
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror

    </div>

</form>

<ul>
    @foreach ($todos as $todo)

    <li>
        <a href={{url('/'.$todo->id.'/toggle')}}>
            @if($todo->completed)
            <strike>{{$todo->title}}</strike>
            @else
            {{$todo->title}}
            @endif
        </a>
    </li>

    @endforeach

</ul>

@endsection
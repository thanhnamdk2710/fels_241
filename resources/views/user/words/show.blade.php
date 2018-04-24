@extends('user.layouts.master')

@section('content')
    <div class="container">
        <div class="jumbotron course-content">
            <div class="inner">
                <h1>{{ $word->getName() }}</h1>
                <p>{{ $word->content }}</p>
            </div>
        </div>
    </div>
@endsection

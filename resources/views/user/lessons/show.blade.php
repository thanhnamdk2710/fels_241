@extends('user.layouts.master')

@section('content')
    <div class="container">
        <div class="jumbotron course-content">
            <div class="course-image">
                <img class="img-responsive" src="{{ $lesson->getImage() }}" alt="">
            </div>
            <div class="inner">
                <h1>{{ $lesson->getName() }}</h1>
                <p>{{ count($lesson->words) }} @lang('lang.lesson.words')</p>
            </div>
        </div>
        <div class="row">
            <div class="lesson-list">
                @if (count($words))
                    <div class="title">@lang('lang.lesson.words'): </div>
                    @foreach ($words as $key => $word)
                        <div class="col-md-4">
                            <a href="{{ route('user.wordDetails', $word->name) }}" class="course-page-lesson {{ ($key % 2 == 0) ? 'even' : 'odd'}}">
                                <div class="lesson-left">
                                    <span class="lesson-title">
                                    {{ $word->getName() }}
                                </span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection

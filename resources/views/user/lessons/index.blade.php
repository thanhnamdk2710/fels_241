@extends('user.layouts.master')

@section('content')
    <div class="container">
        <div class="jumbotron course-content">
            <div class="course-image">
                <img class="img-responsive"
                     src="{{ $course->getImage() }}" alt="">
            </div>
            <div class="inner">
                <h1>{{ $course->name }}</h1>
                <p>
                    {{ count($course->lessons) }} @lang('lang.lesson.lessons') -
                    @lang('lang.lesson.level'):
                    @for ($i = 0; $i < $course->level_completed; $i ++)
                        <i class="glyphicon glyphicon-star"></i>
                    @endfor
                    @for ($i = 0; $i < 3 - $course->level_completed; $i ++)
                        <i class="glyphicon glyphicon-star-empty"></i>
                    @endfor
                </p>
            </div>
        </div>
        <div class="row">
            <div class="lesson-list">
                @if (count($lessons))
                    <div class="title">@lang('lang.lesson.lessons'):</div>
                    @foreach ($lessons as $key => $lesson)
                        <a href="#" class="course-page-lesson {{ ($key % 2 == 0) ? 'even' : 'odd'}}">
                            <div class="lesson-left">
                                <span class="lesson-listnumber">#{{ $loop->iteration }}</span>
                                <span class="lesson-image">
                                    <img class="img-responsive" src="{{ $lesson->getImage() }}" alt="">
                                </span>
                                <span class="lesson-title">
                                    {{ $lesson->name }}
                                </span>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection

@extends('user.layouts.master')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h1>@lang('lang.course.title')</h1>
            <p>@lang('lang.course.description')</p>
        </div>
        <div class="row">
            <div class="course-list">
                @if(count($courses))
                    @foreach($courses as $cours)
                        <div class="col-md-6">
                            <a href="{{ route('user.lessons', $cours->slug) }}" class="course-button">
                                <div class="course-image">
                                    <img class="img-responsive"
                                         src="{{ $cours->getImage() }}" alt="">
                                </div>
                                <div class="course-details">
                                    <div class="course-header">
                                        <div class="course-title">{{ $cours->name }}</div>
                                        <div class="course-level">
                                            @for($i = 0; $i < $cours->level_completed; $i ++)
                                                <i class="glyphicon glyphicon-star"></i>
                                            @endfor
                                            @for($i = 0; $i < 3 - $cours->level_completed; $i ++)
                                                <i class="glyphicon glyphicon-star-empty"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="course-extras">
                                        <div class="course-numbers">{{ count($cours->lessons) }}
                                            @lang('lang.course.lesson')
                                        </div>
                                        <div class="course-link">@lang('lang.course.details')</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection

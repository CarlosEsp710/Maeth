@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    @if ($post->image)
                        <img src="{{ $post->get_image }}" class="card-img-top">
                        <br>
                    @endif
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        @if ($post->iframe)
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $post->iframe !!}
                            </div>
                        @endif
                        <br>
                        <p class="card-text">
                            {{ $post->body }}
                        </p>
                        <p class="text-muted mb-0">
                            <em>
                                &ndash; {{ $post->user->name }}
                            </em>
                            {{ $post->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

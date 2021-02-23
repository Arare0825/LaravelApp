@extends('layouts.layout')

@section('content')
@foreach($posts as $post)
<div class="container mt-4">
            <div class="card mb-4">

                <div class="card-header">
                {{ $post->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                    {{ Str::limit($post->body,100) }}
                    </p>
                    <a class="card-link" href="{{ route('post.show', ['$id'=>$post->id]) }}">
                        続きを読む
                    </a>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                    投稿日時{{ $post->created_at->format('Y.m.d') }}
                    </span>
                    @if ($post->comments->count())
                        <span class="badge badge-primary">
                        コメント{{ $post->comments->count() }}
                        </span>
                        @endif
                </div>
            </div>
    </div>
    @endforeach
@endsection
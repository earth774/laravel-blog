@extends('components.layout')

@section('content')
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'forever' : '' }}">

            <h1>
                <a href="/post/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <div>
                {{ $post->excerpt }}
            </div>

        </article>
    @endforeach
@endsection

{{-- <x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'forever' : '' }}">

            <h1>
                <a href="/post/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <div>
                {{ $post->excerpt }}
            </div>

        </article>
    @endforeach
</x-layout> --}}

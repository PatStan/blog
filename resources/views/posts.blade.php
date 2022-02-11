<x-layout>
    <h1> buh log</h1>

    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <div>
                {!! $post->body !!}
            </div>
        </article>
    @endforeach

</x-layout>

<x-layout>
    @foreach ($posts as $post)
    <article class="{{ $loop->even ? 'bg-blue' : '' }}">
        <h1>
            <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </h1>
        <p> {{date('j F, Y', strtotime($post->date))  }}</p>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach;
</x-layout>
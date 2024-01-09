<x-app-layout>
    <div class="max-w-5xl mx-auto py text-red-100">
        <ul class="divide-y">
            @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}" class="text-xl font-semibold block">{{ $post->title }}</a>
                <span class="text-sm text-red-100">
                   by {{ $post->user->name }} 
                </span>
            </li> 
            @endforeach
        </ul>
        <div>
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
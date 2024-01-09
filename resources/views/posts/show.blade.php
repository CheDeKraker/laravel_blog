<x-app-layout>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-2/3 bg-white rounded-lg shadow-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold">{{ $post->title }}</h2>
                    <p class="mt-4">{{ $post->body }}</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <div class="w-2/3 bg-white rounded-lg shadow-lg">
                <div class="p-6">
                    <h3 class="text-xl font-bold">Comments</h3>
                    <form action="{{ route('posts.comments.store', $post) }}" method="POST">
                        @csrf
                        <div class="mt-4">
                            <label for="body" class="block font-medium text-gray-700">Add Comment</label>
                            <textarea name="body" id="body" rows="3" class="form-textarea mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">comment</button>
                        </div>
                    </form>
                    @foreach($post->comments as $comment)
                        <div class="mt-4">
                            <p class="text-black-800">{{ $comment->body }}</p>
                            <p class="text-sm text-gray-500">{{ $comment->user->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
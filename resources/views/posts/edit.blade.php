<x-app-layout>
    <x-slot name="header">
        <!-- Your custom header content goes here -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Blog Post
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="container mx-auto">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('posts.update', $post->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" class="form-control" rows="6" required>{{ $post->content }}</textarea>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

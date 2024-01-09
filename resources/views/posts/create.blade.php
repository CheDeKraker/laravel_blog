<x-app-layout>
    <div class="container mx-auto">
        <div class="py-8">
            <h1 class="text-red-100 text-2xl font-bold mb-4">Create a New Post</h1>

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                    <input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="body" class="block text-gray-700 font-bold mb-2">Content</label>
                    <textarea name="body" id="body" rows="6" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Create Post</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
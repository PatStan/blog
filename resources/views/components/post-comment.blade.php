@props(['comment'])
<x-panel class="bg-gray-50">
    <div>
        <article class="flex space-x-4">
            <div class="flex-shrink-0">
                <img src="https://i.pravatar.cc/100?u={{ $comment->user_id }}" alt="" width="60" height="60"
                     class="rounded-xl">
            </div>

            <div>
                <header class="mb-3">
                    <h3 class="font-bold">{{ $comment->author->username }}</h3>

                    <p class="text-xs">
                        <time>{{ $comment->created_at->format('F j Y, g:i a') }}</time>
                    </p>

                </header>
                <p>
                    {{ $comment->body }}
                </p>
            </div>
        </article>
    </div>
</x-panel>

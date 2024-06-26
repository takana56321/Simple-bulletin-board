<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            コメントした投稿の一覧
        </h2>
        <x-validation-errors class="mb-4" :messages="$errors" />
        <x-message :message="session('message')" />

    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if (count($comments) == 0)
        <p class="mt-4">
        あなたはまだコメントしていません。
        </p>
        @else
        @foreach ($comments->unique('post_id') as $comment)
        @php
            //コメントした投稿
            $post = $comment->post;
        @endphp
        <div class="mx-4 sm:p-8">
            <div class="mt-4">

                <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                    <div class="mt-4">
                        <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">
                            <a href="{{route('post.show', $post)}}">{{ $post->title }}</a>
                        </h1><hr class="w-full">
                        <p class="mt-4 text-gray-600 py-4">{{Str::limit ($post->body, 100, ' …' )}} </p>
                        <div class="text-sm font-semibold flex flex-row-reverse">
                            <p> {{ $post->user->name }} • {{$post->created_at->diffForHumans()}}</p>
                        </div>
                        <hr class="w-full mb-2">
                        @if ($post->comments->count())
                        <span class="badge">
                            返信 {{$post->comments->count()}}件
                        </span>
                        @else
                        <span>コメントはまだありません。</span>
                        @endif
                        <x-danger-button class="float-right">
                               <a href="{{route('post.show', $post)}}" style="color:white;">コメントする</a>
                        </x-danger-button> 
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</x-app-layout>
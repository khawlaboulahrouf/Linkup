@extends('layouts.header')
{{-- had blasa li reservit f header hat fiha hadchi li ayji mn had page --}}
@section('content')

    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-4">
        <div class="flex items-center space-x-3">
            <img class="h-10 w-10 rounded-full object-cover shadow-sm" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="Avatar">
            <button class="flex-1 bg-slate-50 border border-slate-200 rounded-full px-4 py-2.5 text-left text-xs sm:text-sm text-slate-500 hover:bg-slate-100 font-medium transition duration-150 shadow-inner">
                Commencer un post, partagez vos compétences...
            </button>
        </div>
        <div class="flex items-center justify-between mt-3 pt-2 border-t border-slate-100 text-xs text-slate-500 font-semibold">
            <button class="flex items-center space-x-2 hover:bg-slate-50 p-2 rounded-lg transition text-blue-500">
                <i class="fas fa-image text-sm"></i> <span class="text-slate-600 hidden sm:inline">Photo</span>
            </button>
            <button class="flex items-center space-x-2 hover:bg-slate-50 p-2 rounded-lg transition text-emerald-500">
                <i class="fas fa-video text-sm"></i> <span class="text-slate-600 hidden sm:inline">Vidéo</span>
            </button>
            <button class="flex items-center space-x-2 hover:bg-slate-50 p-2 rounded-lg transition text-amber-500">
                <i class="fas fa-calendar-alt text-sm"></i> <span class="text-slate-600 hidden sm:inline">Événement</span>
            </button>
            <button class="flex items-center space-x-2 hover:bg-slate-50 p-2 rounded-lg transition text-rose-500">
                <i class="fas fa-newspaper text-sm"></i> <span class="text-slate-600 hidden sm:inline">Rédiger un article</span>
            </button>
        </div>
    </div>

    <div class="flex items-center my-2 text-xs">
        <hr class="flex-1 border-slate-200">
        <div class="px-2 text-slate-500 flex items-center space-x-1">
            <span>Trier par :</span>
            <span class="font-bold text-slate-900 cursor-pointer hover:text-blue-600 flex items-center">
                Plus récent <i class="fas fa-caret-down ml-1 text-[10px]"></i>
            </span>
        </div>
    </div>

{{-- drt bocle 3la les articles bach ytl3o  btrtib  --}}
        @foreach ($posts as $post)
    <article class="bg-white rounded-xl border border-slate-200 shadow-sm p-4 space-y-3 transition duration-150 hover:border-slate-300 mb-4">

        <div class="flex items-start justify-between">
            <div class="flex items-center space-x-3">
                <img class="h-12 w-12 rounded-full object-cover ring-1 ring-slate-100 shadow-sm"
                     src="{{ $post->user->image_url ?? 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=150&q=80' }}"
                     alt="{{ $post->user->name }}">

                <div>
                    <h4 class="text-sm font-bold text-slate-900 hover:text-blue-600 hover:underline cursor-pointer">
                        {{ $post->user->name }}
                    </h4>

                    <p class="text-xs text-slate-500 line-clamp-1 leading-tight mt-0.5">
                        {{ $post->user->headline }}
                        @if($post->user->company)
                            <span class="text-slate-400"> • {{ $post->user->company }}</span>
                        @endif
                    </p>

                    <p class="text-[10px] text-slate-400 flex items-center mt-0.5">
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                        <span class="mx-1.5">•</span>
                        <i class="fas fa-globe-americas text-[10px]" title="Public"></i>
                    </p>
                </div>
            </div>

            <button class="text-slate-400 hover:text-slate-600 rounded-full p-1.5 hover:bg-slate-50 transition">
                <i class="fas fa-ellipsis-h"></i>
            </button>
        </div>

        <div class="text-sm text-slate-800 leading-relaxed whitespace-pre-line">
            {{ $post->content }}
        </div>

        <div class="flex items-center justify-between text-xs text-slate-400 pt-1 border-b border-slate-100 pb-2">
            <div class="flex items-center space-x-1">
                <span class="bg-blue-500 text-white rounded-full h-4 w-4 flex items-center justify-center text-[8px]"><i class="fas fa-thumbs-up"></i></span>
                <span class="bg-emerald-500 text-white rounded-full h-4 w-4 -ml-1.5 flex items-center justify-center text-[8px]"><i class="fas fa-lightbulb"></i></span>
                <span class="text-slate-500 pl-1">24 relations</span>
            </div>
            <div class="space-x-1.5">
                <span class="hover:underline cursor-pointer">3 commentaires</span>
            </div>
        </div>

        <div class="flex items-center justify-between text-slate-500 font-semibold text-xs sm:text-sm pt-1 px-1">
            <button class="flex items-center space-x-2 hover:bg-slate-50 p-2 rounded-lg transition-colors duration-150">
                <i class="far fa-thumbs-up text-base"></i> <span>J'aime</span>
            </button>
            <button class="flex items-center space-x-2 hover:bg-slate-50 p-2 rounded-lg transition-colors duration-150">
                <i class="far fa-comment-dots text-base"></i> <span>Commenter</span>
            </button>
            <button class="flex items-center space-x-2 hover:bg-slate-50 p-2 rounded-lg transition-colors duration-150">
                <i class="fas fa-share text-base"></i> <span>Partager</span>
            </button>
            <button class="flex items-center space-x-2 hover:bg-slate-50 p-2 rounded-lg transition-colors duration-150">
                <i class="far fa-paper-plane text-base"></i> <span>Envoyer</span>
            </button>
        </div>
    </article>
@endforeach

        <div class="bg-white rounded-xl border border-slate-200 p-8 text-center space-y-3">
            <div class="text-slate-300 text-4xl">
                <i class="fas fa-stream"></i>
            </div>
            <p class="text-sm text-slate-500 font-medium">Aucun post n'a été publié sur votre réseau pour le moment.</p>
        </div>


@endsection

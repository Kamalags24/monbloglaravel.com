@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('contenu')
    <h2>Articles</h2>

    <p>
        <a href="/articles/create" class="btn btn-primary">Créer un article</a>
    </p>
    
    @forelse ($articles as $article)
        @include('articles.partials.index')
    @empty
        @include('articles.partials.no-articles')
    @endforelse

    @if($articles)
    {{-- Liens de pagination --}}
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
    @endif
@endsection
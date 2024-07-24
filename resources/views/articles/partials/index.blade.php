<article class="card mb-3">
    <img src="{{ asset('storage/' . $article->image) }}" alt="" class="card-img-top">
    <div class="card-body">
        <h2 class="card-title">
            <a href="/articles/{{$article["id"]}}">
                {{ $article["title"] }}
            </a>
        </h2>
        <p class="card-text text-truncate">{{ $article["body"] }}</p>
        <p>/articles/{{$article["id"]}}</p>
    </div>
</article>

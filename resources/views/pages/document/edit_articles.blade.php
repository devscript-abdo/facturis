<div>
    @foreach ($document->articles as $article)
        @livewire('article.edit', ['article' => $article, 'document' => $document, 'taxes' => $taxes], key($loop->index))
    @endforeach
</div>

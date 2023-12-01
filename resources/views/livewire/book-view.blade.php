

<div>
    <p><span>Isbn: </span>{{ $book->isbn }}</p>
    <p><span>Title: </span>{{ $book->title }}</p>
    <p><span>Author: </span>{{ $book->author }}</p>
    <p><span>Pages: </span>{{ $book->pages }}</p>
     {{-- @dump($item['itemable']->isbn, $item['itemable']->pages, $item['itemable']->title); --}}
</div>

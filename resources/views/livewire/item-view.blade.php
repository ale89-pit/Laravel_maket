<div class="container w-3/4 mx-auto my-5 grid grid-cols-3 gap-4">
    @foreach ($items as $item)
        <a href="{{ route('item.show', $item->id) }}">
            <div class="card overflow-hidden  p-2  ">
                <div class="card-header border-b p-2">
                    <p><span>Name: </span>{{ $item->name }}</p>
                    <p><span>Description: </span>{{ $item->description }}</p>
                </div>
                <div class="card-body border-b p-2">
                    @if ($item['itemable'] instanceof \App\Models\Jewelry)
                        @livewire('jewelry-view', ['jewelry' => $item['itemable']])
                    @elseif($item['itemable'] instanceof \App\Models\Book)
                        @livewire('book-view', ['book' => $item['itemable']])
                    @else
                        @livewire('other-view', ['other' => $item['itemable']])
                    @endif
                </div>
                <div class="card-footer p-2">
                    <p><span>Price:</span>{{ $item->price }} €</p>
                </div>
            </div>
        </a>
    @endforeach
</div>

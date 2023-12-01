<table class="table-fixed w-full text-left text-black ">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Birth date</th>
            <th>Address</th>
            <th>phone</th>
        </tr>
    </thead>
    <tbody>



        @foreach ($customers as $customer)
            @foreach ($customer as $c)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 text-gray-800 ">
                    <td>{{ $c->name }}</td>
                    <td class="truncate" title="{{ $c->email }}">{{ $c->email }}</td>
                    <td>{{ \Carbon\Carbon::parse($c->birth_date)->format('d/m/Y') }}</td>
                    <td class="truncate" title="{{ $c->address }}">{{ $c->address }}</td>
                    <td>{{ $c->phone }}</td>

                    <!-- questo pulsante deve portare solo alla rotta customer/id per vedere la sezione cliente e potergli aggiungere anche gli articoli in vendita una volta nella rotta-->
                    <td><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded uppercase"
                            href="{{ route('customer.update', $c->id) }}">edit</a></td>
                    <form action="{{ route('customer.destroy', $c->id) }}" method="POST" submit.prevent>
                        @csrf
                        @method('DELETE')
                        <td><x-danger-button type="submit" title="Delete">delete</x-danger-button></td>
                    </form>

                </tr>
            @endforeach
        @endforeach

    </tbody>
</table>

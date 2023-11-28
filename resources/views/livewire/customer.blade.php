





    <table class="table-fixed w-full">
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
           
        
    
            @foreach($customers as $customer)

            {{-- @dump($customer[0]) --}}
            @foreach($customer as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->birth_date}}</td>
                <td>{{$c->address}}</td>
                <td>{{$c->phone}}</td>
            </tr>
            @endforeach
        @endforeach
      
  </tbody>
</table>


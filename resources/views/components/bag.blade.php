@extends('components.navbar')
@section('content')

    hello from bag<br/>
    <table
        class="border-2 w-[100%] text-center"
    >
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Quntity</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        @foreach ($bagShowWithDashboards as $i)
            <tr>
                <td>{{ $i->value['book_id'] }}</td>
                <td>
                    <img
                        src="{{ asset('storage/'.$i->dashboard_id->image) }}"
                        alt=""
                        class="w-[20%]"
                    />
                </td>
                <td>{{ $i->dashboard_id->title  }}</td>
                <td>{{ $i->value['quantity'] }}</td>
                <td>${{ $i->dashboard_id->price }}</td>
                <td>${{ $i->dashboard_id->price * $i->value['quantity'] }}</td>
                <td>{{ $i->value['date'] }}</td>
                <td>
                    <form
                        method="POST"
                        action="{{ route('bag_page_delete',$i->value['book_id']) }}"
                    >
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

@endsection
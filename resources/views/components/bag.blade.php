@extends('components.navbar')
@section('content')

<div class="w-[100%] flex justify-center">
    <table
        class="w-[90%] text-center felx justify-center mt-[50px]"
    >
        <tr class="text-[15px] text-gray-700">
            <th class="w-[5%]">Id</th>
            <th class="w-[10%] text-left">Image</th>
            <th class="w-[15%] text-left">Name</th>
            <th class="w-[10%]">Quntity</th>
            <th class="w-[10%]">Price</th>
            <th class="w-[10%]">Amount</th>
            <th class="w-[10%]">Date</th>
            <th class="w-[10%]">Action</th>
        </tr>
        @foreach ($bagShowWithDashboards as $i)
            <tr class="bg-gray-100 border-2">
                <td class="w-[5%]">{{ $i->value['book_id'] }}</td>
                <td class="w-[10%]">
                    <img
                        src="{{ asset('storage/'.$i->dashboard_id->image) }}"
                        alt=""
                        class="w-[70px] my-[10px] rounded-md"
                    />
                </td>
                <td class="w-[15%] text-left">{{ $i->dashboard_id->title  }}</td>
                <td class="w-[10%]">{{ $i->value['quantity'] }}</td>
                <td class="w-[10%]">${{ $i->dashboard_id->price }}</td>
                <td class="w-[10%]">${{ $i->dashboard_id->price * $i->value['quantity'] }}</td>
                <td class="w-[10%]">{{ $i->value['date'] }}</td>
                <td class="w-[10%]">
                    <form
                        method="POST"
                        action="{{ route('bag_page_delete',$i->value['book_id']) }}"
                    >
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
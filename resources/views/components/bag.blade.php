@extends('components.navbar')
@section('content')

<div class="w-[100%] flex flex-col justify-center items-center">
    @if ($total > 0)
        <table
            class="w-[90%] text-center felx justify-center mt-[50px]"
        >
            <tr class="text-[15px] text-gray-700">
                <th class="w-[5%]">ID</th>
                <th class="w-[10%] text-left">Image</th>
                <th class="w-[15%] text-left">Title</th>
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
                            class="w-[70px] my-[10px] rounded-md shadow-md"
                        />
                    </td>
                    <td class="w-[15%] text-left">{{ $i->dashboard_id->title  }}</td>
                    <td class="w-[10%]">{{ $i->value['quantity'] }}</td>
                    <td class="w-[10%]">${{ number_format($i->dashboard_id->price, 2) }}</td>
                    <td class="w-[10%]">${{ number_format($i->dashboard_id->price * $i->value['quantity'], 2) }}</td>
                    <td class="w-[10%]">{{ $i->value['date'] }}</td>
                    <td class="w-[10%]">
                        <form
                            method="POST"
                            action="{{ route('bag_page_delete',$i->value['book_id']) }}"
                        >
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:text-red-500 hover:font-bold">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <section class="border-2 bg-gray-100 mt-[40px] flex w-[50%] p-[10px] justify-around items-center">
            <p>Total</p>
            <p class="text-[30px]">${{ number_format($total, 2) }}</p>
        </section>
    @else
        <p class="text-[40px] h-[80vh] flex items-center">No Item(s)</p>
    @endif
</div>
@endsection
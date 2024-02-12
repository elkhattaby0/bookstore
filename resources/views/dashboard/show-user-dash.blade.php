@extends('dashboard.user-dash')
@section('user_dash')
    <div
        class="w-[95%] h-[98%] mt-[0px] overflow-y-scroll"
    >
    <ul class=" mb-[1%] text-gray-600 leading-5">
        <h1 class="text-[35px] text-blue-600">My Posts</h1><br/>
    </ul>
        <section
            class="w-[100%] flex flex-wrap justify-center"
        >
            @if (session()->has('destroymsg'))
                <x-alert color='green'>
                    {{ session('destroymsg') }}
                </x-alert>
            @endif
            @foreach ($books as $i)
                <div
                
                    class="block m-[8px] h-[100%] text-center hover:border-2 p-[8px] rounded-lg cursor-pointer border-2 border-gray-300 bg-gray-200"
                >
                    <img src='{{ asset('storage/'.$i->image) }}' class="w-[200px] rounded-lg " />
                    <h1 class="font-bold text-[20px] w-[90%]">{{ $i->title }}</h1>
                    <p class="text-gray-500 text-[12px]">{{ $i->created_at }}</p>
                    <h3 class="font-bold text-[18px] text-blue-600">${{ number_format($i->price, 2) }}</h3>
                    <div class="flex justify-between">
                        <a  class="flex items-center justify-center bg-gray-700 hover:bg-gray-800 h-[33px] w-[60px] text-white rounded-lg" href="{{ route('user-edit',$i->id) }}">Edit</a>
                        <form 
                            action="{{ route('user-destroy',$i->id) }}"
                            method="POST"
                            class="flex items-center justify-center bg-red-600 hover:bg-red-700  h-[33px] w-[60px] text-white rounded-lg"
                        >
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
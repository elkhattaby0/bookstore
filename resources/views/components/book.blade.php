@extends('components.navbar')
@section('content')
    <div class="w-[100%] flex justify-center">
        <section class="w-[90%] flex">
            <div class="w-[20%] pt-[10px]">
                <div class="flex items-center justify-between">
                    <p>
                        Avaible in store:<br/>
                        <b class="text-blue-600">Find a store</b>
                    </p>
                    <input type="checkbox" class="mr-[25px]"/>
                </div><hr class="my-[10px]"/>
                <div>
                    <p class="font-bold text-[18px]">Category</p>
                    <form
                        method="GET"
                        action="{{ route('books_page') }}"
                        id="filterForm"
                        onsubmit="return false;"
                    >
                    @csrf
                    <ul class="ml-[20px]" name="byCategory" >
                        @foreach ($categories as $i)                                
                            <li class="flex items-center">
                                <input type="checkbox" 
                                    value="{{ $i->id }}" 
                                    name="byCategory" 
                                    onchange="document.getElementById('filterForm').submit()" 
                                />
                                <p class="ml-[10px]">{{ $i->name }}</p>
                            </li>
                        @endforeach
                    </ul>
                    
                </div><hr class="my-[10px]"/>
                <div class="">
                    <p class="font-bold text-[18px]">Book Format</p>
                    <ul class="ml-[20px]" name='byFormat'>
                        <li class="flex items-center">
                            <input 
                                type="checkbox" 
                                value="1"
                                name='byFormat'
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <p class="ml-[10px]">Hardcover</p>
                        </li>
                        <li class="flex items-center">
                            <input 
                                type="checkbox" 
                                value="2"
                                name='byFormat'
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <p class="ml-[10px]">Paperback</p>
                        </li>
                        <li class="flex items-center">
                            <input 
                                type="checkbox" 
                                value="3"
                                name='byFormat'
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <p class="ml-[10px]">Logo book</p>
                        </li>
                    </ul>
                </div><hr class="my-[10px]"/>
                <div class="">
                    <p class="font-bold text-[18px]">Price</p>
                    <ul class="ml-[20px]" name='byPrice'>
                        <li class="flex items-center">
                            <input 
                                type="checkbox" 
                                value="1"
                                name='byPrice'
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <p class="ml-[10px]">Under $15</p>
                        </li>
                        <li class="flex items-center">
                            <input  
                                type="checkbox" 
                                value="2"
                                name='byPrice'
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <p class="ml-[10px]">$15 - $25</p>
                        </li>
                        <li class="flex items-center">
                            <input 
                                type="checkbox" 
                                value="3"
                                name='byPrice'
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <p class="ml-[10px]">$25 - $50</p>
                        </li>
                        <li class="flex items-center">
                            <input 
                                type="checkbox" 
                                value="4"
                                name='byPrice'
                                onchange="document.getElementById('filterForm').submit()" 
                                />
                            <p class="ml-[10px]">Over $50</p>
                        </li>
                    </ul>
                </div><hr class="my-[10px]"/>
                <div class="">
                    <p class="font-bold text-[18px]">Language</p>
                    <ul class="ml-[20px]" name="byLanguage">
                        @foreach ($language as $i)
                            <li class="flex items-center">
                                <input 
                                    type="checkbox" 
                                    value="{{ $i->id }}"
                                    name="byLanguage" 
                                    onchange="document.getElementById('filterForm').submit()"
                                />
                                <p class="ml-[10px]">{{ $i->name }}</p>
                            </li>
                        @endforeach
                    </ul>
                </form>
                </div><hr/>

            </div>
            {{-- Right --}}
            <div class="w-[80%] flex flex-col items-center">
                <div class="w-[95%] h-[60px] mt-[10px] rounded-lg bg-blue-300 flex justify-center ">
                    <section class=" flex justify-between items-center w-[90%]">
                        <p class="text-gray-500">{{ count($dashboard)}} Item(s)</p>
                        <form
                            method="GET"
                            action="{{ route('books_page') }}"
                        >
                            <select class="border-gray-500 rounded-md" name="category">
                                <option value="1">Best Matches</option>
                                <option value="2">Price Low to High</option>
                                <option value="3">Price High to Low</option>
                                <option value="4">Newest Arriivals</option>
                            </select>
                            <button type="submit">Filter</button>
                        </form>
                    </section>
                    
                </div>
                <div class="w-[100%] mt-[10px]">
                    <section
                        class="w-[100%] flex flex-wrap justify-center items-center"
                    >
                        @foreach ($dashboard as $i)
                            @if (count($dashboard) > 0)
                                <a 
                                    href="{{route('details_page',$i->id)}}"
                                    class="m-[5px] text-center bg-gray-100 border-2 p-[8px] rounded-lg cursor-pointer"
                                >
                                    <img src='{{ asset('storage/'.$i->image) }}' class="w-[200px] rounded-lg" />
                                    <h1 class="font-bold text-[20px] w-[200px]">{{ $i->title }}</h1>
                                    <p class="text-gray-500 text-[13px]">{{ $i->created_at }}</p>
                                    <h3 class="font-bold text-[18px] text-blue-600">${{ number_format($i->price, 2) }}</h3>
                                </a>
                            @endif                            
                        @endforeach
                        @if (count($dashboard) == 0)
                            <p class="text-[40px] h-[100%] flex items-center">No Item(s)</p>
                        @endif
                    </section>
                </div>
                <div class="bg-white text-black">
                    {{ $dashboard->links() }} 
                </div>                
            </div>
        </section>
    </div>
    <x-footer />
@endsection
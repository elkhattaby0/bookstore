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
                    <ul class="ml-[20px]">
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">Sports</p>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">Finance</p>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">Romance</p>
                        </li>
                    </ul>
                </div><hr class="my-[10px]"/>
                <div class="">
                    <p class="font-bold text-[18px]">Book Format</p>
                    <ul class="ml-[20px]">
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">Hardcover</p>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">Paperback</p>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">Logo book</p>
                        </li>
                    </ul>
                </div><hr class="my-[10px]"/>
                <div class="">
                    <p class="font-bold text-[18px]">Price</p>
                    <ul class="ml-[20px]">
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">Under $15</p>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">$15 - $25</p>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">$25 - $50</p>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">Over $50</p>
                        </li>
                    </ul>
                </div><hr class="my-[10px]"/>
                <div class="">
                    <p class="font-bold text-[18px]">Language</p>
                    <ul class="ml-[20px]">
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">Arabic</p>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">English</p>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" />
                            <p class="ml-[10px]">French</p>
                        </li>
                    </ul>
                </div><hr/>
                
            </div>
            {{-- Right --}}
            <div class="w-[80%] flex flex-col justify-center">
                <div class="w-[95%] h-[60px] mt-[10px] rounded-lg bg-blue-300 flex justify-center ">
                    <section class=" flex justify-between items-center w-[90%]">
                        <p class="text-gray-500">100 items</p>
                        <select class="border-gray-500 rounded-md">
                            <option>Best Matches</option>
                            <option>Price Low to High</option>
                            <option>Price High to Low</option>
                            <option>Newest Arriivals</option>
                        </select>
                    </section>
                    
                </div>
                <div class="w-[100%] mt-[10px]">
                    <section
                        class="w-[100%] flex flex-wrap justify-center"
                    >
                        @foreach ($books as $i)
                            <div 
                                class="m-[8px] text-center hover:border-2 p-[8px] rounded-lg cursor-pointer"
                            >
                                <img src={{ $i->img }} class="w-[200px] rounded-lg shadow-md" />
                                <h1 class="font-bold text-[20px]">{{ $i->title }}</h1>
                                <p class="text-gray-500">{{ $i->author }}</p>
                                <h3 class="font-bold text-[18px] text-blue-600">${{ $i->price }}</h3>
                            </div>
                        @endforeach
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection
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

                <div class="relative mb-3">
                    <h6 class="mb-0">
                      <button
                        class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-slate-700 rounded-t-1 group text-dark-500"
                        data-collapse-target="collapse-1"
                      >
                        <span>What is Material Tailwind?</span>
                        <i class="absolute right-0 pt-1 text-xs fa fa-plus group-open:opacity-0"></i>
                        <i class="absolute right-0 pt-1 text-xs opacity-0 fa fa-minus group-open:opacity-100"></i>
                      </button>
                    </h6>
                    <div
                      data-collapse="collapse-1"
                      class="h-0 overflow-hidden transition-all duration-300 ease-in-out"
                    >
                      <div class="p-4 text-sm leading-normal text-blue-gray-500/80">
                        We're not always in the position that we want to be at. We're constantly
                        growing. We're constantly making mistakes. We're constantly trying to
                        express ourselves and actualize our dreams.
                      </div>
                    </div>
                  </div>
                  <div class="relative mb-3">
                    <h6 class="mb-0">
                      <button
                        class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-slate-700 rounded-t-1 group text-dark-500"
                        data-collapse-target="collapse-2"
                      >
                        <span>How to use Material Tailwind?</span>
                        <i class="absolute right-0 pt-1 text-xs fa fa-plus group-open:opacity-0"></i>
                        <i class="absolute right-0 pt-1 text-xs opacity-0 fa fa-minus group-open:opacity-100"></i>
                      </button>
                    </h6>
                    <div
                      data-collapse="collapse-2"
                      class="h-0 overflow-hidden transition-all duration-300 ease-in-out"
                    >
                      <div class="p-4 text-sm leading-normal text-blue-gray-500/80">
                        We're not always in the position that we want to be at. We're constantly
                        growing. We're constantly making mistakes. We're constantly trying to
                        express ourselves and actualize our dreams.
                      </div>
                    </div>
                  </div>
                  <div class="relative mb-3">
                    <h6 class="mb-0">
                      <button
                        class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-slate-700 rounded-t-1 group text-dark-500"
                        data-collapse-target="collapse-3"
                      >
                        <span>What can I do with Material Tailwind?</span>
                        <i class="absolute right-0 pt-1 text-xs fa fa-plus group-open:opacity-0"></i>
                        <i class="absolute right-0 pt-1 text-xs opacity-0 fa fa-minus group-open:opacity-100"></i>
                      </button>
                    </h6>
                    <div
                      data-collapse="collapse-3"
                      class="h-0 overflow-hidden transition-all duration-300 ease-in-out"
                    >
                      <div class="p-4 text-sm leading-normal text-blue-gray-500/80">
                        We're not always in the position that we want to be at. We're constantly
                        growing. We're constantly making mistakes. We're constantly trying to
                        express ourselves and actualize our dreams.
                      </div>
                    </div>
                  </div>
                
            </div>
            {{-- Right --}}
            <div class="w-[80%] flex flex-col items-center">
                <div class="w-[95%] h-[60px] mt-[10px] rounded-lg bg-blue-300 flex justify-center ">
                    <section class=" flex justify-between items-center w-[90%]">
                        <p class="text-gray-500">{{ $count }} items</p>
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
                        @foreach ($dashboard as $i)
                            <a 
                                href="{{route('details_page',$i->id)}}"
                                class="m-[8px] text-center hover:border-2 p-[8px] rounded-lg cursor-pointer"
                            >
                                <img src='{{ asset('storage/'.$i->image) }}' class="w-[200px] rounded-lg shadow-md" />
                                <h1 class="font-bold text-[20px]">{{ $i->title }}</h1>
                                {{-- <p class="text-gray-500">{{ $i->id }}</p> --}}
                                <h3 class="font-bold text-[18px] text-blue-600">${{ number_format($i->price, 2) }}</h3>
                            </a>
                        @endforeach
                    </section>
                </div>
            </div>
        </section>
    </div>
    <x-footer />
@endsection
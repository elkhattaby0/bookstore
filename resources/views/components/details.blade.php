@extends('components.navbar')
@section('content')

    <div
        class="w-[100%] flex flex-col items-center justify-center mt-[30px]"
    >
        <section
            class="w-[90%] flex justify-between"
        >
        @foreach ($books as $i)
            <div 
                class="w-[49%] rounded-2xl bg-gray-100 flex justify-center p-[30px]"
            >
                <img 
                    src='{{ asset('storage/'.$i->image) }}'
                    class="w-[50%] rounded-lg shadow-md"
                />
            </div>
            {{-- RIGHT --}}
            <div class="w-[50%] flex items-center justify-center">
                <section
                    class=" w-[80%]"
                >
                    <div class="w-[100%] flex justify-between">
                        <span>
                            <h1 class="font-bold text-[22px]">{{ $i->title }}</h1>
                            <p class="text-gray-500 text-[15px]">{{ $i->user->fname ??'--'}} <b>{{ $i->user->lname ??'--'}}</b></p>
                            <p class="text-gray-400 text-[12px]">{{$i->created_at}}</p>
                        </span>                        
                        <h1 class="font-bold text-[28px]">${{ number_format($i->price, 2) }}</h1>
                    </div>
                        <hr class="my-[30px]" />
                        <div class="flex my-[10px]">
                            <img src="https://cdn-icons-png.flaticon.com/512/664/664468.png" class="w-[20px] h-[20px] text-black" />
                            <section
                                class="ml-[10px]"
                            >
                                <p class="font-bold">Ship to me</p>                            
                                <p>Free shipping on orders over $35</p>
                            </section>
                        </div>
                        <div class="flex my-[10px]">
                            <img src="https://cdn-icons-png.flaticon.com/512/833/833314.png" class="w-[20px] h-[20px] text-black" />
                            <section
                                class="ml-[10px]"
                            >
                                <p class="font-bold">Buy now & pick up in store</p>                            
                                <a href="#">Select a store</a>
                            </section>
                        </div>
                        <div class="flex my-[10px]">
                            <img src="https://cdn-icons-png.flaticon.com/512/126/126122.png" class="w-[20px] h-[20px] text-black" />
                            <section
                                class="ml-[10px]"
                            >
                                <p class="font-bold">Find it in store</p>                            
                                <a href="#">Select a store</a>
                            </section>
                        </div>
                        <div class="mt-[20px]">
                            <button 
                                class="bg-gray-800 hover:bg-gray-900 shadow-md text-white h-[40px] w-[40px] rounded font-bold"
                            >-</button>
                            <input type="text" value="{{ 1 }}" class=" h-[41px] w-[150px] rounded border-1 border-gray-800" />
                            <button 
                                onclick=""
                                class="bg-gray-800 hover:bg-gray-900 shadow-md text-white h-[40px] w-[40px] rounded font-bold"
                            >+</button>
                        </div>
                        <button
                            class="bg-blue-600 hover:bg-blue-700 h-[45px] w-[500px] rounded-lg text-white font-bold shadow-md mt-[30px]" 
                        >Add to Bag</button>
                </section>
            </div>
        @endforeach
        </section>
        <section class="w-[80%] mt-[80px]">
            <h1 class="font-bold text-[40px]">Overview</h1><br/>
            <p>
                {{$i->details}}
            </p>
        </section>
    </div>
    <x-footer />
@endsection
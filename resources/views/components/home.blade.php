@extends('components.navbar')
@section('content')

    {{-- Section One --}}
    <section
        class="w-[100%] flex flex-col justify-center items-center"
    >
        <div
            class="flex w-[90%] h-[85vh]"
        >
            <section class="mt-[100px] h-[60vh] w-[50%] flex flex-col justify-between">
                <h1 
                    class="text-[40px] font-bold leading-10 w-[88%]"
                >
                    Get your favourite books and create your own library.
                </h1>

                <p
                    class="text-[20px] text-gray-500 leading-7"
                >
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, saepe, quia minus repellendus veniam aperiam recusandae est aspernatur omnis tempore quo quidem? Eaque cum sunt dolorum ipsum hic dolor natus.
                </p>

                <div
                    class="shadow-md w-[80%] h-[70px] rounded-2xl px-[8px] flex justify-between items-center"
                >
                    <input type="text" class="w-[75%] h-[55px] rounded-2xl border-none"
                        placeholder="Find your book here..."
                    />
                    <button
                        class="bg-blue-600 hover:bg-blue-700 font-bold h-[55px] text-white w-[90px] rounded-2xl"
                    >
                        Search
                    </button>
                </div>
            </section>
            <section class="border- w-[50%] flex justify-between items-center ">
                <img 
                    src="https://booksondemand.ma/cdn/shop/products/71951W96oWL.jpg?v=1631701478&width=823"
                    class="w-[50%] rounded-lg shadow-2xl "
                />
                <div
                    class="text-[30px] w-[50%] flex flex-col justify-center items-center text-gray-500 font-bold"
                >
                    <p class="leading-9">
                        <b class="text-blue-600 text-[35px]">165K+</b><br/>
                        Books We Have
                    </p>
                    <img 
                        src="https://booksondemand.ma/cdn/shop/products/RichDad_PoorDadbyRobertT.Kiyosaki-books.jpg?v=1609441318&width=823"
                        class="w-[90%] rounded-lg shadow-2xl"
                    />
                </div>
            </section>
        </div>

        <div
            class="w-[90%] mt-[50px] flex justify-center cursor-pointer"
        >
            @foreach ($sectionTwo as $i)
                <div
                    class="bg-green-100 hover:bg-green-200 m-[8px] h-[190px] w-[400px] rounded-xl font-bold flex items-center justify-center flex-col text-[25px]"
                >
                    <img src={{ $i->img }} class="w-[45px] h-[45px]" />
                    <h1>{{ $i->nbr }}</h1>
                    <p class="text-gray-500">{{ $i->txt }}</p>
                </div>
            @endforeach
        </div>
        

        <div
            class="w-[90%] mt-[80px] flex flex-col justify-center items-center"
        >
            <h1
                class="font-bold text-[40px] pl-[20px] pb-[20px]"
            >Shop by category</h1>
            <div 
                class="w-[100%] flex justify-center flex-wrap"
            >
                @foreach ($category as $i)
                    <div
                        class="hover:bg-{{ $i->bgcolor }}-500 cursor-pointer bg-{{ $i->bgcolor }}-600 rounded-xl text-white m-[8px] h-[190px] w-[380px] text-[35px] font-bold flex items-center justify-center"
                    >
                        <h1>{{ $i->name }}</h1>
                    </div>
                @endforeach
            </div>
            <a
                class="text-blue-400 font-bold text-[20px] bg-gray-100 rounded shadow-xl flex items-center justify-center text-center h-[50px] w-[300px] cursor-pointer"
            >View all categories</a>
        </div>

        <div
            class="w-[90%] mt-[150px] flex justify-around items-center bg-green-200 h-[50vh] rounded-xl"
        >
            <section class="w-[50%]">
                <img 
                    src="https://img.freepik.com/free-vector/stack-money-gold-coins-3d-cartoon-style-icon-coins-with-dollar-sign-wad-cash-currency-flat-vector-illustration-wealth-investment-success-savings-economy-profit-concept_74855-26108.jpg?w=740&t=st=1707206438~exp=1707207038~hmac=efcd763ba1df1c094a5032ed5633c4de3a59d1e170f600669fc5f67880377ff6"
                    class="w-40% mix-blend-multiply	"
                />
            </section>
            <section class="w-[50%] h-[75%] flex flex-col justify-around">
                <h1
                    class="font-bold text-[40px]"
                >
                20% OFF Finance book
                </h1>
                <p
                    class="text-gray-500 text-[30px] leading-9"
                >
                    Stay on top of your finance.<br/>
                    Don't leave that up to others.
                </p>
                <button
                    class="bg-blue-600 hover:bg-blue-500 text-white font-bold w-[250px] h-[45px] rounded-xl shadow-md"
                >
                    Get the offer
                </button>
            </section>
        </div>

        <div 
            class="w-[90%] mt-[150px] flex flex-col justify-center items-center"
        >
            <h1
                class="font-bold text-[40px] pl-[20px] pb-[20px]"
            >
                Trending books of the year
            </h1>
            <section
                class="w-[100%] flex flex-wrap justify-center"
            >
                @foreach ($books as $i)
                    <div 
                        class="m-[8px] text-center hover:border-2 p-[8px] rounded-lg cursor-pointer"
                    >
                        <img src={{ $i->img }} class="w-[250px] rounded-lg shadow-md" />
                        <h1 class="font-bold text-[20px]">{{ $i->title }}</h1>
                        <p class="text-gray-500">{{ $i->author }}</p>
                        <h3 class="font-bold text-[18px] text-blue-600">${{ $i->price }}</h3>
                    </div>
                @endforeach
            </section>
        </div>

        <div 
            class="w-[90%] mt-[150px] flex flex-col justify-center items-center"
        >
            <h1
                class="font-bold text-[40px] pl-[20px] pb-[20px]"
            >
                Pupular books 
            </h1>
            <section
                class="w-[100%] flex flex-wrap justify-center"
            >
                @foreach ($books as $i)
                    <div 
                        class="m-[8px] text-center hover:border-2 p-[8px] rounded-lg cursor-pointer"
                    >
                        <img src={{ $i->img }} class="w-[250px] rounded-lg shadow-md" />
                        <h1 class="font-bold text-[20px]">{{ $i->title }}</h1>
                        <p class="text-gray-500">{{ $i->author }}</p>
                        <h3 class="font-bold text-[18px] text-blue-600">${{ $i->price }}</h3>
                    </div>
                @endforeach
            </section>
            <a
                class="text-blue-400 font-bold text-[20px] bg-gray-100 rounded shadow-xl flex items-center justify-center text-center h-[50px] w-[300px] cursor-pointer"
            >View all books</a>
        </div>
    </section>

@endsection

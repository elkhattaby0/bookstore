@extends('components.navbar')
@section('content')

    {{-- Section One --}}
    <section
        class="w-[100%] flex justify-center items-center"
    >
        <div
            class="flex w-[90%] "
        >
            <section class="mt-[100px] h-[50vh] w-[50%] flex flex-col justify-between">
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
                    class="shadow-md w-[70%] h-[50px] rounded-2xl px-[8px] flex justify-between items-center"
                >
                    <input type="text" class="w-[75%] h-[42px] rounded-2xl border-none"
                        placeholder="Find your book here..."
                    />
                    <button
                        class="bg-blue-600 hover:bg-blue-700 font-bold h-[42px] text-white w-[90px] rounded-2xl"
                    >
                        Search
                    </button>
                </div>
            </section>
            <section class="border- w-[50%]"></section>
        </div>
        
    </section>

@endsection

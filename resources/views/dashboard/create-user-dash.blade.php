@extends('dashboard.user-dash')
@section('user_dash')
    <div
        class="w-[55%] mt-[20px]"
    >
        <form
            method="POST"
            action="{{ route('store') }}"
            enctype="multipart/form-data"
        >
            @csrf
            <label class="w-[100%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Image</p>
                <input
                    type="file"
                    name="image"
                    class="border-[1px] border-gray-600 h-[50px] rounded-lg"
                />
                <p>
                    @error('image')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[100%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Title</p>
                <input
                    type="text"
                    name="title"
                    class=" rounded-lg"
                    placeholder="Book name..."
                />
                <p>
                    @error('title')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[100%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Price</p>
                <input
                    type="text"
                    name="price"
                    class=" rounded-lg"
                    placeholder="Ex: 10.00"
                />
                <p>
                    @error('price')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[100%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Details</p>
                <textarea
                    name="details"
                    class=" rounded-lg"
                    placeholder="Ex: This book is about..."                    
                ></textarea>
                <p>
                    @error('details')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[100%] h-[70px] flex flex-col justify-between my-[20px] text-white font-bold">
                <button
                    class="bg-blue-600 hover:bg-blue-500 h-[45px] rounded-lg shadow-md"
                >
                    Post
                </button>
            </label>
        </form>
    </div>
@endsection
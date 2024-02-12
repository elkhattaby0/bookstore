@extends('dashboard.user-dash')
@section('user_dash')
    <div
        class="w-[70%] h-[100%]" 
    >
        <ul class=" mb-[1%] text-gray-600 leading-5">
            <h1 class="text-[35px] text-blue-600">New Post</h1><br/>
            <li class=" list-disc ml-[20px]">You can add new post.</li>
            <li class=" list-disc ml-[20px]">All fields must be full.<li>
        </ul>
        
        <form
            method="POST"
            action="{{ route('store') }}"
            enctype="multipart/form-data"
            class="w-[100] flex flex-wrap justify-between "
        >
            @csrf
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Image</p>
                <input
                    type="file"
                    name="image"
                    class="border-[1px] border-gray-600 h-[41px] rounded-lg bg-white"
                />
                <p>
                    @error('image')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
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
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
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
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>catigory</p>
                <select 
                    name="catigory_id"
                    class=" rounded-lg"
                >
                    @foreach ($catigorie as $i)
                        <option value="{{ $i->id }}">{{ $i->name }}</option>
                    @endforeach                    
                </select>
                <p>
                    @error('catigory_id')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Language</p>
                <select 
                    name="language_id"
                    class=" rounded-lg"
                >
                    @foreach ($language as $i)
                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                    @endforeach                    
                </select>
                <p>
                    @error('language_id')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
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
            <label class="w-[48%] h-[41px] flex flex-col justify-between my-[20px] text-white font-bold">
                <button
                    class="bg-blue-600 hover:bg-blue-500 h-[45px] rounded-lg shadow-md"
                >
                    Post
                </button>
            </label>
        </form>
    </div>
@endsection
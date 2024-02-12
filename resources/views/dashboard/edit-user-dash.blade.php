@extends('dashboard.user-dash')
@section('user_dash')
    <div
        class="w-[90%] mt-[0px] "
    >   
    <ul class=" mb-[1%] text-gray-600 leading-5">
        <h1 class="text-[35px] text-blue-600">Edit Post</h1><br/>
        <li class=" list-disc ml-[20px]">You can edit your post.</li>
    </ul>
    @foreach ($dashboard as $i) 
        <form
            method="POST"
            action="{{ route('user-update',$i->id) }}"
            enctype="multipart/form-data"
            class="w-[100] flex justify-between"
        >
            @csrf
            @method('PUT')
            <div class="w-[25%] flex items-center">
                <label class="w-[100%] ">
                    <img 
                        src="{{ asset('storage/'.$i->image)}}"
                        alt=""
                        class="w-[200px] rounded-lg"
                    />
                </label>
            </div>
            <div class="w-[70%] flex flex-wrap justify-between ">
                <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                    <p>Image</p>
                    <input
                        type="file"
                        name="image"
                        class="border-[1px] border-gray-600 h-[41px] bg-white rounded-lg"
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
                        value="{{ old('title', $i->title) }}"
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
                        value="{{ old('price', $i->price) }}"
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
                        value="{{ old('catigory_id', $i->catigory_id) }}"
                    >
                        {{-- @foreach ($catigorie as $i)
                            <option value="{{ $i->id }}">{{ $i->name }}</option>
                        @endforeach                     --}}
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
                        value="{{ old('language_id', $i->language_id) }}"
                    >
                        {{-- @foreach ($language as $i)
                        <option value="{{ $i->id }}">{{ $i->name }}</option>
                        @endforeach                     --}}
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
                    >{{ old('details', $i->details) }}</textarea>
                    <p>
                        @error('details')
                            {{ $message }}
                        @enderror
                    </p>
                </label> 
                <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px] text-white font-bold">
                    <button
                        class="bg-blue-600 hover:bg-blue-500 h-[45px] rounded-lg shadow-md"
                    >
                        Edit
                    </button>
                </label>
            </div>
        </form>
    @endforeach
    </div>
@endsection
@props(['color'])
<div
    class="text-white bg-{{$color}}-500 w-[90%] h-[50px] text-center flex items-center justify-center rounded text-bold text-[18px] shadow-md"
>
    {{$slot}}
</div>
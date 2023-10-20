@php
$type ??='text';
$name ??= '';
$titre ??= '';
$value ??='';
@endphp

<div>

        <label>{{$titre}}</label>
        @if($type=='textarea')
            <textarea>

            </textarea>

    @else
        <input type="{{$type}}" name="{{$name}}"  value="{{$value}}">

    @endif

</div>

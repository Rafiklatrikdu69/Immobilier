@php
$type ='text';
$name ??= '';
$titre ??= '';
$value ??='';
@endphp

<div>

        <label>{{$titre}}</label>

        <input type="{{$type}}" name="{{$name}}"  value="{{$value}}">



</div>

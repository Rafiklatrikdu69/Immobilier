@php
$type ='text';
$name ??= '';
$titre ??= '';
@endphp

<div>
    <form>
        <label>{{$titre}}</label>
        <input type="{{$type}}" name="{{$name}}" >
    </form>

</div>

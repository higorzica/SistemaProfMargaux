@if ($errors->any())
    <ul class="errors_form">
        @foreach ($errors->all() as $error)
            <li class="error"> {{$error}} </li>
        @endforeach
    </ul>
@endif
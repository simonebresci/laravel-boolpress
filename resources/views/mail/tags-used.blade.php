@component('mail::message')
## POST
### ID:{{$post->id}}
### TITLE:{{$post->title}}
### BODY:{{$post->body}}

## TAG UTILIZZATI:
@foreach($tags as $tag)
  #### {{$tag->name}}
@endforeach

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
Boolpress
@endcomponent

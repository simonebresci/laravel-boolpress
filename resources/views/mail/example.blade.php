Mail di esempio.

{{$post->id}}
{{$post->title}}
{{$post->body}}

@foreach($tags as $tag)
  {{$tag->name}}
@endforeach

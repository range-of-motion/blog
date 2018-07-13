@extends('layouts.backend')

@section('content')
    <div class="wrapper">
        <form method="POST" action="/admin/posts">
            {{ csrf_field() }}
            <div class="troep">
                <label>Title</label>
                <input type="text" name="title" />
            </div>
            <div class="troep">
                <label>Body</label>
                <textarea name="body" id="testThing"></textarea>
            </div>
            <ul class="troep">
                @foreach ($tags as $tag)
                    <li>
                        <input id="tag-{{ $tag->id }}" type="checkbox" name="tags[]" value="{{ $tag->id }}" /> <label for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
                    </li>
                @endforeach
            </ul>
            <button>Submit</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        var editor = new Editor();

        editor.render();
    </script>
@endsection

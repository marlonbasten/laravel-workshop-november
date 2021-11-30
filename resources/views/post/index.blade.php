@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Inhalt</th>
        <th scope="col">Kategorien</th>
        <th scope="col">Aktionen</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ substr($post->content, 0, 15) }}</td>
                <td>
                    @foreach ($post->categories as $category)
                        <span class="badge badge-secondary">{{ $category->name }}</span>
                    @endforeach
                </td>
                <td>
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Löschen">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

  {{ $posts->links() }}

@endsection

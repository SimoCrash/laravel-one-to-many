@extends('layouts.app');

@section('content')
    <div class="container">
      @if (session('success_delete'))
        <div class="alert alert-warning" role="alert">
          La categoria {{ session('success_delete')->name }} è stata eliminato correttamente.
        </div>
      @endif

      <h1>Categorie</h1>
      
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Slug</th>
              <th scope="col">Nome</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($categories as $category)
                  <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->slug }}</td>
                      <td>{{ $category->name }}</td>
                      <td>
                          {{-- <a href="/posts/{{ $category->id }}" class="btn btn-primary">Visita</a> --}}
                          <a href="{{ route('admin.categories.show', ['category' => $category->id])}}" class="btn btn-primary">Visit</a>
                      </td>
                      <td>
                          <a href="{{ route('admin.categories.edit', ['category' => $category])}}" class="btn btn-warning">Edit</a>
                      </td> 
                      <td>
                        <form action="{{ route('admin.categories.destroy', ['category' => $category])}}" method="post">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                  </tr>
              @endforeach 
          </tbody>
      </table>
      {{ $categories->links() }}
    </div>
@endsection
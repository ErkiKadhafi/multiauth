@extends('layouts.app')

@section('content')
<div class="container">
    <div class="border-bottom mb-3 d-flex justify-content-between">
        <h1>List of the Books</h1>
        <a href="{{ route('admin.books.create') }}"><button type="button" class="btn btn-md btn-dark">+ Add New Book</button></a>
    </div>
    @if (session()->has('success'))
        <div class="book-added alert alert-success" role="alert">
           {{ session()->get('success') }}
        </div>
    @endif
    <table class="table align-middle">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ISBN</th>
                <th>Title</th>
                <th>Cathegory</th>
                <th>Language</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th>{{ $book->isbn }}</th>
                    <th>{{ $book->title }}</th>
                    <th>{{ $book->cathegory }}</th>
                    <th>{{ $book->language }}</th>
                    <th>{{ $book->stock }}</th>
                    <th >
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="{{ route('admin.books.edit', $book) }}"><button type="button" class="btn btn-sm btn-dark">Edit</button></a>
                            <button type="button" class="btn btn-sm btn-danger mx-2">Delete</button>
                        </div>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

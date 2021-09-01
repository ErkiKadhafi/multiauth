@extends('layouts.app')

@section('content')
<div class="container">
    <div class="border-bottom mb-3 d-flex justify-content-center">
        <h1>Add new Books</h1>
    </div>
    <div>
        <form action="{{ route('admin.books.update', $book) }}" method="POST">
			@csrf
            @method('put')
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="isbn">ISBN</label>
					<input type="text" class="form-control" id="isbn" name="isbn" value="{{ $book->isbn }}">
					@error('isbn')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
				<div class="form-group col-md-6">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
					@error('title')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="publisher">Publisher</label>
					<input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}">
					@error('publisher')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
				<div class="form-group col-md-3">
					<label for="language">Language</label>
					<select id="language" class="form-control" name="language" value="{{ $book->language }}">
						<option selected>English</option>
						<option>Bahasa</option>
						<option>Arab</option>
					</select>
					@error('language')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
				<div class="form-group col-md-3">
					<label for="cathegory">Cathegory</label>
					<select id="cathegory" class="form-control" name="cathegory">
						<option @if ($book->cathegory == 'Teens'){{ 'selected' }}@endif>Teens</option>
						<option @if ($book->cathegory == 'Thriller'){{ 'selected' }}@endif>Thriller</option>
						<option @if ($book->cathegory == 'Comedy'){{ 'selected' }}@endif>Comedy</option>
						<option @if ($book->cathegory == 'Romance'){{ 'selected' }}@endif>Romance</option>
						<option @if ($book->cathegory == 'Education'){{ 'selected' }}@endif>Education</option>
					</select>
					@error('cathegory')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="stock">Stock</label>
					<input type="number" class="form-control" id="stock" name="stock" value="{{ $book->stock }}">
					@error('stock')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="pages">Pages</label>
					<input type="number" class="form-control" id="pages" name="pages" value="{{ $book->pages }}">
					@error('pages')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="rack">Rack</label>
					<select id="inputState" class="form-control" id="rack" name="rack">
						<option @if ($book->cathegory == '1'){{ 'selected' }}@endif>1</option>
						<option @if ($book->cathegory == '2'){{ 'selected' }}@endif>2</option>
						<option @if ($book->cathegory == '3'){{ 'selected' }}@endif>3</option>
						<option @if ($book->cathegory == '4'){{ 'selected' }}@endif>4</option>
						<option @if ($book->cathegory == '5'){{ 'selected' }}@endif>5</option>
					</select>
					@error('rack')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
			</div>
			<button type="submit" class="btn btn-dark">Add Books</button>
		</form>
    </div>
</div>
@endsection

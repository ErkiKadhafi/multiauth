@extends('layouts.app')

@section('content')
<div class="container">
    <div class="border-bottom mb-3 d-flex justify-content-center">
        <h1>Add new Books</h1>
    </div>
    <div>
        <form action="{{ route('admin.books.store') }}" method="POST">
			@csrf
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="isbn">ISBN</label>
					<input type="text" class="form-control" id="isbn" name="isbn">
					@error('isbn')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
				<div class="form-group col-md-6">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title">
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
					<input type="text" class="form-control" id="publisher" name="publisher">
					@error('publisher')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
				<div class="form-group col-md-3">
					<label for="language">Language</label>
					<select id="language" class="form-control" name="language">
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
						<option selected>Teens</option>
						<option>Thriller</option>
						<option>Comedy</option>
						<option>Romance</option>
						<option>Education</option>
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
					<input type="number" class="form-control" id="stock" name="stock">
					@error('stock')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="pages">Pages</label>
					<input type="number" class="form-control" id="pages" name="pages">
					@error('pages')
						<div class="text-danger mt-2">
							{{$message}}
						</div>
					@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="rack">Rack</label>
					<select id="inputState" class="form-control" id="rack" name="rack">
						<option selected>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
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

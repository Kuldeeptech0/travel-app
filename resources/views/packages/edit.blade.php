<!DOCTYPE html>
<html>
<head>
    <title>Edit Package</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Package</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('packages.update', $package) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $package->name) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" value="{{ old('category', $package->category) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Cities (comma separated)</label>
                <input type="text" name="cities" class="form-control" value="{{ old('cities', $package->cities) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4" required>{{ old('description', $package->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" name="price" class="form-control" step="0.01" value="{{ old('price', $package->price) }}" required>
            </div>

            <div class="mb-3">
                <a href="{{ route('packages.index') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Update Package</button>
            </div>
        </form>
    </div>
</body>
</html>

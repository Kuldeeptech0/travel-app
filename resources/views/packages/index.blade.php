<!DOCTYPE html>
<html>
<head>
    <title>Travel Packages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Travel Packages</h2>
            <a href="{{ route('packages.create') }}" class="btn btn-primary">Add New Package</a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Cities</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($packages as $package)
                    <tr>
                        <td>{{ $package->name }}</td>
                        <td>{{ $package->category }}</td>
                        <td>{{ $package->cities }}</td>
                        <td>${{ number_format($package->price, 2) }}</td>
                        <td>
                            <a href="{{ route('packages.edit', $package) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('packages.destroy', $package) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

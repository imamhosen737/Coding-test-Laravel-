<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MyUser List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
        <h2 class="text-center text-success">My User List</h2>
		<table class="table table-success table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email  }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $list->links() !!}
    </div>

</body>

<style>
	.w-5{
		display: none;
	}
</style>
</html>
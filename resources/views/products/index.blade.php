<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex justify-center items-center h-screen">
<div class="max-w-4xl mx-auto">
<h1 class="text-center mb-4"><strong>Movies</strong></h1>
<table class="table-auto border border-gray-500 rounded-lg my-4">
<thead>
<tr>
<th class="border border-gray-500 px-4 py-2">Title</th>
<th class="border border-gray-500 px-4 py-2">Director</th>
<th class="border border-gray-500 px-4 py-2">Year</th>
</tr>
</thead>
<tbody>
@foreach($products as $product)
<tr>
<td class="border border-gray-500 px-4 py-2">{{ $product['title'] }}</td>
<td class="border border-gray-500 px-4 py-2">{{ $product['director'] }}</td>
<td class="border border-gray-500 px-4 py-2">{{ $product['year'] }}</td>
</tr>
@endforeach
</tbody>
</table>
<div class="flex justify-center">
</div>
</div>
</body>
</html>
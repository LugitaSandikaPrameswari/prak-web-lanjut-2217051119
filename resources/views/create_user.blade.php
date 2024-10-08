<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/img/BG_LUGITA.png'); /* Keep the original background */
            background-size: cover;
            background-position: center;
        }

        .form-container {
            background: linear-gradient(135deg, #ffe4e9, #ffd6dc); /* Soft pink gradient */
            border: 3px solid #ffb6c1; /* Lighter pink border */
            padding: 20px;
            border-radius: 12px; /* Slightly more rounded corners */
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: absolute;
            top: 50%; 
            left: 56%;
            transform: translate(-50%, -50%);
        }

        .form-content label {
            color: #6b7280; /* Neutral gray for label text */
        }

        .form-content input {
            background-color: #fff; /* White input background */
        }

        .form-content input[type="submit"] {
            background-color: #f78da7; /* Soft pink button */
        }

        .form-content input[type="submit"]:hover {
            background-color: #f66d8f; /* Slightly darker pink on hover */
        }

        .flower-img {
            position: absolute;
            top: -63px; /* Set to make the image go beyond the top of the form */
            right: -60px; /* Set to make the image go beyond the right side of the form */
            width: 155px; /* Set the size of the image */
            height: auto;
        }
    </style>
</head>
<body class="h-screen flex items-center justify-center">
    <div class="form-container">
        <img src="/img/BUNGA.png" alt="Bouquet Image" class="flower-img"> <!-- Gambar yang ditambahkan -->
        <h1 class="text-2xl font-bold text-center mb-6">Create User</h1>
        <form action="{{ route('user.store') }}" method="post" class="form-content space-y-4">
            @csrf
            <div>
                <label for="nama" class="block text-sm font-medium">Nama: </label>
                <input type="text" id="nama" name="nama" value="lugita" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-300 focus:border-pink-300 sm:text-sm">
            </div>
            <div>
                <label for="kelas" class="block text-sm font-medium">Kelas</label>
                <select name="kelas_id" id="kelas_id">
                    @foreach($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="npm" class="block text-sm font-medium">NPM</label>
                <input type="text" id="npm" name="npm" value="2217051119" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-300 focus:border-pink-300 sm:text-sm">
            </div>
            <div>
                <input type="submit" value="Submit" class="w-full bg-pink-400 text-white py-2 rounded-md hover:bg-pink-500 cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>


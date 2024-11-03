<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/img/BG_LUGITA.png');
            background-size: cover;
            background-position: center;
        }

        .form-container {
            background: linear-gradient(135deg, #ffe4e9, #ffd6dc);
            border: 3px solid #ffb6c1;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: absolute;
            top: 50%; 
            left: 56%;
            transform: translate(-50%, -50%);
        }

        .form-content label {
            color: #6b7280;
        }

        .form-content input,
        .form-content select {
            background-color: #fff;
            width: 100%;
            padding: 6px; /* Reduce padding for tighter spacing */
            margin-top: 4px; /* Add a small margin for better readability */
        }

        .form-content input[type="submit"] {
            background-color: #FF69B4; /* Distinct button color */
            color: white;
            padding: 10px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .form-content input[type="submit"]:hover {
            background-color: #f66d8f;
        }

        .flower-img {
            position: absolute;
            top: -63px;
            right: -60px;
            width: 155px;
            height: auto;
        }

        /* Custom file upload button */
        .custom-file-upload {
            background-color: #FFB6C1;
            color: #fff;
            padding: 8px 16px;
            border-radius: 8px;
            display: inline-block;
            cursor: pointer;
            margin-top: 4px; /* Reduced margin for tighter layout */
            text-align: center;
        }

        #foto {
            display: none; /* Hides the default file input */
        }
    </style>
</head>
<body class="h-screen flex items-center justify-center">
    <div class="form-container">
        <img src="/img/BUNGA.png" alt="Bouquet Image" class="flower-img"> <!-- Added Image -->
        <h1 class="text-2xl font-bold text-center mb-4">Create User</h1>
        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" class="form-content space-y-2">
            @csrf

            <!-- Input Nama -->
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Nama" required>

            <!-- Input NPM -->
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" placeholder="NPM" required>

            <!-- Select Kelas -->
            <label for="kelas_id">Kelas:</label>
            <select id="kelas_id" name="kelas_id" required>
                <option value="" disabled selected>Pilih Kelas</option>
                @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>

            <!-- Select Jurusan (Moved to a new row) -->
            <label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan" required>
                <option value="" disabled selected>Pilih Jurusan</option>
                <option value="S1 - Ilmu Komputer">S1 - Ilmu Komputer</option>
                <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
            </select>

            <!-- Select Semester -->
            <label for="semester">Semester:</label>
            <select id="semester" name="semester" required>
                <option value="" disabled selected>Pilih Semester</option>
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
                <option value="3">Semester 3</option>
                <option value="4">Semester 4</option>
                <option value="5">Semester 5</option>
                <option value="6">Semester 6</option>
                <option value="7">Semester 7</option>
                <option value="8">Semester 8</option>
            </select>

            <!-- Custom File Upload -->
            <label for="foto">Upload Foto:</label>
            <label for="foto" class="custom-file-upload">Pilih Foto</label>
            <input type="file" id="foto" name="foto">

            <!-- Submit Button -->
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

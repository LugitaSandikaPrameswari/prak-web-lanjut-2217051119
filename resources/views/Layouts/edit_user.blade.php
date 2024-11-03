<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User_PWL</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #FFEFD5; /* Background gradient */
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            width: 700px; /* Increased width for a wider form */
            text-align: center;
        }
        h1 {
            color: #333;
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 30px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
            font-size: 16px;
        }
        input, select {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        input:focus, select:focus {
            border-color: #28a745;
            box-shadow: 0 0 8px rgba(40, 167, 69, 0.5);
            outline: none;
        }
        input:hover, select:hover {
            border-color: #999;
        }
        .form-actions {
            display: flex;
            justify-content: space-between;
            gap: 10px; /* Close gap between buttons */
            width: 100%;
        }
        button, .btn-back {
            background-color: #FFEFD5; /* Papaya Whip color */
            color: #333;
            padding: 14px 20px;
            font-size: 18px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 48%; /* Each button takes 48% of the width for a close, even look */
        }
        button:hover, .btn-back:hover {
            background-color: #FFDEAD; /* Lighter Papaya Whip on hover */
        }
        button:active, .btn-back:active {
            transform: scale(0.98); /* Slight scale-down on click */
        }
        .form-group {
            width: 100%;
            text-align: left;
            margin-bottom: 20px;
        }
        img {
            margin-top: 10px;
            border-radius: 10px;
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 20px;
            }
            input, select, button {
                font-size: 14px;
                padding: 12px;
            }
            .form-actions {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <h1 class="text-center">Edit Data User</h1>

    <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $user->nama) }}">
        </div>
        <div class="form-group">
            <label for="npm">NPM</label>
            <input type="text" class="form-control" name="npm" id="npm" value="{{ old('npm', $user->npm) }}">
        </div>
        <div class="form-group">
            <label for="kelas_id">Kelas</label>
            <select class="form-select" name="kelas_id" id="kelas_id" required>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control">
            @if($user->foto)
                <img src="{{ asset($user->foto) }}" alt="User Photo" width="150" class="mt-2">
            @endif
        </div>

        <!-- Flex container for Submit and Back button -->
        <div class="form-actions">
            <button type="submit">Submit</button>
            <a href="{{ route('users.index') }}" class="btn-back">Kembali</a>
        </div>
    </form>
</div>

@endsection
</html>
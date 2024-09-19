<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: rgba(173, 216, 230, 0.9);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: black;
    }

    .background-wrapper {
        position: relative;
        width: 300px;
        height: 400px;
        background-position: center;
    }

    .profile-card {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        padding: 20px;
        width: 300px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .avatar {
        width: 100px;
        height: 100px;
        margin: 0 auto 20px;
        border-radius: 50%;
        overflow: hidden;
    }

    .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .info {
        margin-top: 10px;
    }

    .label {
        background-color: #e0e0e0;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }
</style>
</head>
<body>

    <div class="background-wrapper">
        <div class="profile-card">
            <div class="avatar">
                <img src="/img/howl.jpeg" alt="Profile Picture">
            </div>
            <div class="info">
            <div class="label">Nama: {{ $nama }}</div>
                <div class="label">Npm: {{ $npm }}</div>
                <div class="label">Kelas: {{ $kelas }}</div>
            </div>
        </div>
    </div>
</body>
</html>
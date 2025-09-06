<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action='{{ route("room.store") }}' method='post' enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="room_name" id="room_name" placeholder="Nama Kamar">
        <input type="number" name="price" id="price" placeholder="Harga">
        <select name="period" id="period">
            <option value="day">Harian</option>
            <option value="month">Bulanan</option>
            <option value="year">Tahunan</option>
        </select>
        <input type="file" name="pictures[]" id="pictures" multiple accept="image/*">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
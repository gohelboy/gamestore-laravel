<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product upload</title>
</head>

<style>

    *{
        box-sizing: border-box;
        margin: 0%;
        padding: 0%;
    }

    .container{
        width: 100%;
        height: 100vh;
        background: #f2f2f2;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form{
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 14px;
    }
</style>

<body>
    <div class="container">
            <h1>Upload game to database</h1>
            <form method="POST" action="{{ url('/') }}/product" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" placeholder="Game name" required/>
                <input type="file" name="image" accept="image/*" required/>
                <input type="file" name="img1" accept="image/*" required/>
                <input type="file" name="img2" accept="image/*" required/>
                <input type="file" name="img3" accept="image/*" required/>
                <input type="file" name="img4" accept="image/*" required/>
                <input type="number" name="price" placeholder="Price" required/>
                <input type="text" name="description" placeholder="Game info" required/>
                <input type="submit" value="Upload"/>
            </form>
    </div>
</body>
</html>
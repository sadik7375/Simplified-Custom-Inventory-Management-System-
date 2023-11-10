
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    /* Basic styling for the form container */
    form {
        max-width: 400px;
        margin: 70px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    h1 {
        max-width: 400px;
        margin-left: 70px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Styling for form labels */
    label {
        display: block;
        margin-bottom: 5px;
        color: #333;
        font-weight: bold;
    }

    /* Styling for input fields */
    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Styling for the submit button */
    input[type="submit"] {
        background-color: #3490dc;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #2779bd;
    }

    h1{
        margin-left:70px;
    }
</style>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}" />
        </div>
        <div>
            <label>quatity</label>
            <input type="text" name="quantity" placeholder="quantity" value="{{$product->quantity}}" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}" />
        </div>
       
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>
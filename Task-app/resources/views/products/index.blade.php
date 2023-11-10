<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #3490dc;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    a {
        text-decoration: none;
        color: red;
        margin-left:  30px;
        margin-right:  30px;
        margin-top:  60px;
    
        
    }

    a:hover {
        text-decoration: underline;
    }

    input[type="submit"] {
        background-color: #dc3545;
        color: #fff;
        border: none;
        padding: 6px 10px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #bd2130;
    }
</style>

<body>
    <h1>Products</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
    <div>
           <button><a href="{{route('product.create')}}">Add Product</a></button>
        </div>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
               
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                   
                </tr>
            @endforeach
        </table>
       

    </div>
</body>
</html>
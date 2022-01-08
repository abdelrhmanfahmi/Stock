<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-12">
                    <h3 class="text-center">Main Stock</h3>
                </div>
            </div>
            @if(count($stocks) > 0)
                <div class="row mb-3">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Stock Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($stocks as $key => $stock)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $stock->stock_name }}</td>
                                <td>
                                    <a href="productsOfStocks/show/{{$stock->id}}" class="btn btn-success">Show Products In Stock</a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="row pt-3">
                    <div class="col-md-6 text-center">
                        <a href="/products" class="btn btn-success">All Products</a>
                    </div>
                    <div class="col-md-6 text-center">
                        <a href="/stocks/create" class="btn btn-primary">Add Stock</a>
                    </div>
                </div>
            @else
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h3 class="text-center text-danger">There Is No Stocks Yet, Add Stock First </h3>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12 text-center">
                        <a href="/stocks/create" class="btn btn-success">Add Stock</a>
                    </div>
                </div>
            @endif
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>

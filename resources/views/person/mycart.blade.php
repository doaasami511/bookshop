@extends('layouts.app')

@section('content')
    @if(isset(Auth::user()->name))
        <?php $ID_OF_P_BOOKS = Auth::user()->ID_OF_P_BOOKS;?>
        <?php $ID_OF_P_BOOKS_arr = explode (",", $ID_OF_P_BOOKS);?> <!-- array of int -->
        <h1>My cart:</h1>
            <div class="jumbotron" style="color:black;padding:2%;">
            <ol>
            @foreach ($ID_OF_P_BOOKS_arr as $id)
                @foreach ($books as $book)
                    @if ($book->id==$id)
                        <h4><li>{{$book->title}}<p style="float:right">{{$book->price}}$</p></li></h4>
                        <?php 
                        $total = 0;
                        $total+=$book->price; 
                        ?>
                    @endif
                @endforeach
            @endforeach
            </ol>
        </div>
        <div style="float:right;">
            <p style="display:inline;font-size:20px;">Total: <?php print($total) ?>$</p>
            
            <a href="" class="btn btn-primary">Confirm</a>
        </div>
    @else
        <body onload="myFunction()">
            <h4 style="display:inline">You must</h4> <h1 style="display:inline">Login</h1><h4 style="display:inline"> to continue</h4>
        </body>
    @endif

    <script>
        
        function myFunction() {
            setTimeout(function() {
                Done();
            }, 2000);
        }
        function Done(){
            location.replace("/login");
        }
    </script>
@endsection
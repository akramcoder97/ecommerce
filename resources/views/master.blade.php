<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
    <!-- jqeury link -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- ------ -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Lates*u44t compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




    <title>eCommerce project</title>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}



    <style>
        #image,.image{
            height: 400px; !important
            width: 100% ;!important
        } 
        #trending-img{
            height: 100px;
        }
        #myCarousel{
            background-color: white; important
        }
        .carousel-item{
            height: 500px; !important
         }
        .custom-product{
            margin-top: 50px;
/*             background-color: black; !important
 */        }
        .login-section{
            height: 500px;
            padding-top: 80px;
        }
        .tren{
           /*  float:left  */
           display:flex; important
           justify-content: center; important        
        }
        .trending-item,.trending-wrapper{
            margin:30px;
       }
       .carousel-caption{
        color: black;
       }
       .detail-image{
            height: 250px;
       }
      
       /* cart list page-------- */

        .trending-wraper{
            margin-left: 30px;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-around;
        }
       .trending-img{
            width:130px;
        }
    </style>
</body>
</html>
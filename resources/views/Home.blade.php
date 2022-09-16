<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Home</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="text-center">
        <nav class="nav nav-tabs">
            <a href="{{url('/')}}" class="nav-link active">Home</a>
            <a href="{{url('/About')}}" class="nav-link">About</a>
            <a href="{{url('/Courses')}}" class="nav-link">Courses</a>
        </nav>
        <h1>Home Page</h1>

        <div class="card shadow-sn mx-auto" style="width: 500px">
            <div class="card-body">
            <div class="card-title"><b><i>Mater Dei College</i></b></div>
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/305522394_819282102587154_7137802223449543650_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeHGJBQ5ZGMT1exGmMaB5qGkRuXANwqFZJBG5cA3CoVkkL3n8F5LBUi4k-FAuC02TXax-8Uw3knnfsJb5gAwnw-y&_nc_ohc=JpQZOziL_QIAX8fWZHx&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVJl-2AHXhE3ydW2QNJQ-RBceTVzJV4JkwHqRcnMCcB3qg&oe=63485C4C" alt="MDC Logo" style="width:300px;height:300px;">          

            </div>
        </div>
    </div>
</body>
</html>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-12" style="margin-bottom: 2em;">
         <center><h1>Sport News</h1><br> <div></center>
    
        <?php $i = 0; ?>
        @foreach($news as $news)
        <?php $i++ ?>
            <label class="form-control" align="center"><h2>{{$news->name}}</h2></label><br>
            <center><img src="{{$news->img}}" style="width:500px;height:600px;"></center><br><br>
            <label class="form-control" align="center"><h2>เนื้อหาข่าว</h2></label><br>
            <textarea readonly class="form-control" rows="10">{{$news->detail}}</textarea><br><br>
        @endforeach
    </div>
</div>
@endsection

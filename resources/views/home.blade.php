<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href="" class="navbar-brand fw-bold"><u>R M S</u></a>

            <form action="{{route('search')}}" class="d-flex">
                <input type="text" class="form-control" name="search" placeholder="enter roll no">
                <input type="submit" class="btn btn-success">
            </form>
        </div>
    </nav>
        <div class="container">
        <div class="row">
            <div class="col-3">
                @if(session("msg"))
                <div class="alert alert-success">
                    {{session("msg")}}
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="<?= route('store');?>" method="post">
                        @csrf
                            <div class="mb-3">
                                <label for="">name</label>
                                <input type="text" value="{{old('name')}}" name="name" class="form-control">
                                @error("name")
                                    <p class="text-small fw-bold text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">contact</label>
                                <input type="text" value="{{old('contact')}}" name="contact" class="form-control">
                                @error("contact")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">maths</label>
                                <input type="text" value="{{old('maths')}}" name="maths" class="form-control">
                                @error("maths")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">sci</label>
                                <input type="text" value="{{old('sci')}}" name="sci" class="form-control">
                                @error("sci")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">sst</label>
                                <input type="text" value="{{old('sst')}}" name="sst" class="form-control">
                                @error("sst")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">hindi</label>
                                <input type="text" value="{{old('hindi')}}" name="hindi" class="form-control">
                                @error("hindi")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">eng</label>
                                <input type="text" value="{{old('eng')}}" name="eng" class="form-control">
                                @error("eng")
                                    <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-danger w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-9">
                @if(session("error"))
                <div class="alert alert-danger">{{session("error")}}</div>
                @endif
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Maths</th>
                        <th>Sci</th>
                        <th>Sst</th>
                        <th>Hindi</th>
                        <th>Eng</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    @foreach($students as $s)
                    <tr>
                        <td>{{$s->id}}</td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->contact}}</td>
                        <td>{{$s->maths}}</td>
                        <td>{{$s->sci}}</td>
                        <td>{{$s->sst}}</td>
                        <td>{{$s->hindi}}</td>
                        <td>{{$s->eng}}</td>
                        <td>
                            @php
                                 echo $total = $s->maths + $s->sci + $s->sst + $s->hindi + $s->eng;
                            @endphp
                        </td>
                        <td>
                            <a href="{{route('remove',['std_id'=> $s->id])}}" class="btn btn-danger btn-sm">Delete</a>
                            <a href="{{route('view',['roll'=> $s->id])}}" class="btn btn-success btn-sm">view</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 mx-auto">
                <a href="#" onclick="window.print();" class="btn btn-warning d-print-none">Print</a>
                <table class="table table-bordered">
                    <tr>
                        <th colspan="2">persnal details</th>
                    </tr>
                    <tr>
                        <th colspan="2">name</th>
                        <th>{{$student->name}}</th>
                    </tr>
                    <tr>
                        <th colspan="2">contact</th>
                        <th>{{$student->contact}}</th>
                    </tr>
                    <tr>
                        <th colspan="4">mark details</th>
                    </tr>
                    <tr>
                        <th>subject name</th>
                        <th>total marks</th>
                        <th>pass marks</th>
                        <th>obtain marks</th>
                    </tr>
                    <tr>
                        <td>maths</td>
                        <td>100</td>
                        <td>30</td>
                        <td>{{$student->maths}}</td>
                    </tr>
                    <tr>
                        <td>sst</td>
                        <td>100</td>
                        <td>30</td>
                        <td>{{$student->sst}}</td>
                    </tr>
                    <tr>
                        <td>sci</td>
                        <td>100</td>
                        <td>30</td>
                        <td>{{$student->sci}}</td>
                    </tr>
                    <tr>
                        <td>hindi</td>
                        <td>100</td>
                        <td>30</td>
                        <td>{{$student->hindi}}</td>
                    </tr>
                    <tr>
                        <td>eng</td>
                        <td>100</td>
                        <td>30</td>
                        <td>{{$student->eng}}</td>
                    
                    </tr>
                    <tr>
                        <th colspan="4">result details</th>
                    </tr>
                    <tr>
                        <th colspan="2">total marks</th>
                        <td>
                            @php
                            echo $total = $student->maths + $student->sci + $student->hindi + $student->eng + $student->sst;

                            @endphp
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>
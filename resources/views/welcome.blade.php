<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
    <title>Document</title>
  </head>
  <style>
    .main-box{
        display:flex;

    }
    .box{
        width: 50%;
        height: 563px;
        margin-top: 45px;
        /* margin-left: 394px; */
        /* background-color: red; */
        border:red 2px;
    }
    .form{
        width: 324px;
        margin-left: 154px;
    }
    .table{
        margin-top: 68px;
        text-align:center;
        margin-left: 164px;
    }
  </style>
<body>
<div class="main-box">
<div class=box>
    <form action="{{route('saveList')}}" method="post" class="row g-3" style="width: 324px;
        margin-left: 154px;">
            @csrf
           
            <label class="form-label" for="">Id no.:</label>
            <input class="form-control"  type="number" name="id">
            <br>
   

            <label class="form-label" for="">Batch no.:</label>
            <input class="form-control" type="number" name="batch_no">

            <label class="form-label" for="">Quantity:</label>
            <input class="form-control" type="number" name="quantity">


            <label class="form-label" for="">Created At:</label>
            <input class="form-control" type="date" name="created_at">
   
            <label class="form-label" for="">Status:</label>
            <select class="form-label" name="status" >
                <option value="good">Good</option>
                <option value="better">Better</option>
                <option value="high_quality">High Quality</option>
            </select>
 
            <label class="form-label" for="">Remark:</label>
            <input class="form-control" type="text" name="remark">
   
            <button type="submit" class="btn btn-primary">Save</button>
  
    </form>
</div>

   <div class="table">
    <h1>Table</h1>
    <table class="table table-bordered border-primary" style="width: 350px; margin-top: 59px;">
    <tr>
        <th>Batch No.</th>
        <th>Quantity</th>
        <th>Manufacture Date:</th>
        <th>Status</th>
        <th>Remarks</th>
        <th colspan='2'>Action</th>
    </tr>
    @foreach($List as $value)
    <tr>
        <td>{{$value->BatchNo}}</td>
        <td>{{$value->Quantity}}</td>
        <td>{{$value->DateOfManufactrue}}</td>
        <td>{{$value->Status}}</td>
        <td>{{$value->Remarks}}</td>
        <td><a href="{{url('/edit/'. $value->id)}}">edit</a></td>
        <td><a href="{{url('/delete/'. $value->id)}}">Delete</a></td>
    </tr>
    @endforeach
    </table>
    </div>
</div>
</body>
</html>
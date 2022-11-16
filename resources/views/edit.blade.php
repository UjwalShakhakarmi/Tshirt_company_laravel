<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .box{
        width: 30%;
        height: 563px;
        margin-top: 45px;
        margin-left: 521px;
        /* background-color: red; */
        border:red 2px;
        text-align:center;
    }
    /* .form{
        width: 324px;
        margin-left: 154px;
    } */
</style>
<body>
    <div class="box">
        <h1>Edit Box</h1>
    <form action="{{route('editlist')}}" method="post">

    @csrf
           
           <!-- <label class="form-label" for="">Id no.:</label> -->
           <input name="id" type="hidden" value={{$value->id}}>
           <!-- <br> -->
  

           <label class="form-label" for="">Batch no.:</label>
           <input class="form-control" type="number" name="editbatch" value={{$value->BatchNo}}>
           <br>
   
  

           <label class="form-label" for="">Quantity:</label>
           <input class="form-control" type="number" name="editquantity" value={{$value->Quantity}}>
           <br>


           <label class="form-label" for="">Created At:</label>
           <input class="form-control" type="date" name="edit_date" value={{$value->DateOfManufactrue}}>
           <br>
  
           <label class="form-label" for="">Status:</label>
           <select class="form-label" name="edit_status" value={{$value->Status}}>
               <option value="good">Good</option>
               <option value="better">Better</option>
               <option value="high_quality">High Quality</option>
           </select>
           <br>


           <label class="form-label" for="">Remark:</label>
           <input class="form-control" type="text" name="edit_remark" value={{$value->Remarks}}>
  
   
        <button type="submit" class="btn btn-primary">Save</button>
<!-- 
        @csrf
        <input type="text" name="id" value={{$value->id}}>
        <label for="">Batch no:</label>
        <input type="number" name="editbatch" value={{$value->BatchNo}}>
        <br>
        <label for="">Quantity:</label>
        <input type="number" name="editquantity" value={{$value->Quantity}}> 
        <br>
        <label for="">Created At:</label>
        <input type="date" name="edit_date" value={{$value->DateOfManufactrue}}>
        <br>
        <select name="edit_status" value={{$value->Status}}>
            <option value="rigatoni">Rigatoni</option>
            <option value="dave">Dave</option>
            <option value="pumpernickel">Pumpernickel</option>
            <option value="reeses">Reeses</option>
        </select>
        <br>
        <br>
        <br>
        <label for="">Remark:</label>
        <input type="text" name="edit_remark" value={{$value->Remarks}}>
        <button type="submit">Save</button> -->
    </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<style>
#reservations {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#reservations td, #reservations th {
  border: 1px solid #ddd;
  padding: 8px;
}

#reservations tr:nth-child(even){background-color: #f2f2f2;}

#reservations tr:hover {background-color: #ddd;}

#reservations th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Month Report</h1>
<h3>Daily reservation classification report</h3>

<table id="reservations">
  <tr>
    <th>Date</th>
    <th>Student</th>
    <th>Senior/PWD</th>
    <th>Foreign</th>
    <th>Resident</th>
    <th>Total</th>
  </tr>
  @foreach ($reservations as $date=>$reservation)
    <tr>
        <td>{{$date}}</td>
        <td>{{$reservation['student']??0}}</td>
        <td>{{$reservation['senior']??0}}</td>
        <td>{{$reservation['foreign']??0}}</td>
        <td>{{$reservation['resident']??0}}</td>
        <td>{{$reservation['total']??0}}</td>
    </tr>
  @endforeach
</table>

</body>
</html>



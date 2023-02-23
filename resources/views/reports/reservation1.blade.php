<!DOCTYPE html>
<html>

<head>
  <style>
    #reservations {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #reservations td,
    #reservations th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #reservations tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #reservations tr:hover {
      background-color: #ddd;
    }

    #reservations th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    .headerimg{
      width: 100%;
      display: list-item;
      list-style-image: url('/images/header.png');
      list-style-position: inside;
      text-align: center;
    }
    
    .footerimg{
      width: 100%;
      text-align: center;
      /* position: absolute; */
      bottom: 0;
      display: list-item;
      list-style-image: url('/images/footer.png');
      list-style-position: inside;
    }
    .printcontent{
      margin-top: 100px;
      margin-bottom: 100px;
    }
  </style>
</head>

<body>

  <div class="headerimg"></div>
  <div class="content">

  {{-- <h1>Month Report</h1> --}}
  <h3>Daily reservation classification report</h3>
    <table id="reservations">
      <tr>
        <th>{{$type=='daily'?'Date':($type=='monthly'?'Month':($type=='yearly'?'Year':'Date'))}}</th>
        <th>Regular</th>
        <th>Student</th>
        <th>Senior/PWD</th>
        <th>Foreign</th>
        <th>Resident</th>
        <th>Total</th>
      </tr>
      @php
      $totals=[];
          $totals['regular']=0;
          $totals['regular']=0;
          $totals['student']=0;
          $totals['senior']=0;
          $totals['foreign']=0;
          $totals['resident']=0;
          $totals['total']=0;
      @endphp
      @foreach ($reservations as $date=>$reservation)
      <tr>
        <td>{{$date}}</td>
        <td>{{$reservation['regular']??0}}</td>
        <td>{{$reservation['student']??0}}</td>
        <td>{{$reservation['senior']??0}}</td>
        <td>{{$reservation['foreign']??0}}</td>
        <td>{{$reservation['resident']??0}}</td>
        <td>{{$reservation['total']??0}}</td>
      </tr>
      
      @php
          $totals['regular']+=$reservation['regular']??0;
          $totals['student']+=$reservation['student']??0;
          $totals['senior']+=$reservation['senior']??0;
          $totals['foreign']+=$reservation['foreign']??0;
          $totals['resident']+=$reservation['resident']??0;
          $totals['total']+=$reservation['total']??0;
      @endphp
      @endforeach
      <tr>
        <td>Totals</td>
        <td>{{$totals['regular']??0}}</td>
        <td>{{$totals['student']??0}}</td>
        <td>{{$totals['senior']??0}}</td>
        <td>{{$totals['foreign']??0}}</td>
        <td>{{$totals['resident']??0}}</td>
        <td>{{$totals['total']??0}}</td>
      </tr>
    </table>
  </div>
  <div class="footerimg"></div>

</body>

</html>
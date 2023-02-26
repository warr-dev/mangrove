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

      @php $regular = 0;@endphp
      @php $student = 0;@endphp
      @php $senior = 0;@endphp
      @php $foreign = 0;@endphp
      @php $resident = 0;@endphp
      @foreach ($reservations as $date=>$reservation)
      <tr>
        <td>{{$date}}</td>
        <td>{{$reservation['regular']??0}}</td>
           @if(empty($reservation['regular']))
            @php $regular = 0;@endphp
          @else
          @php $regular = $regular + $reservation['regular'];@endphp

          @endif
        <td>{{$reservation['student']??0}}</td>
         @if(empty($reservation['student']))
            @php $student = 0;@endphp
          @else
          @php $student = $student + $reservation['student'];@endphp
          @endif


        <td>{{$reservation['senior']??0}}</td>

          @if(empty($reservation['senior']))
            @php $senior = 0;@endphp
          @else
            @php $senior = $senior + $reservation['senior'];@endphp
          @endif

        <td>{{$reservation['foreign']??0}}</td>
        @if(empty($reservation['foreign']))
            @php $foreign = 0;@endphp
          @else
            @php $foreign = $foreign + $reservation['foreign'];@endphp
          @endif

        <td>{{$reservation['resident']??0}}</td>
        @if(empty($reservation['resident']))
            @php $resident = 0;@endphp
          @else
            @php $resident = $resident + $reservation['resident'];@endphp
          @endif

        <td>{{$reservation['total']??0}}</td>
      </tr>

       @php $totalStudent = $student * 20;@endphp
       @php $totalRegualr = $regular * 50;@endphp
       @php $totalSenior = $senior * 20;@endphp
       @php $totalForeign = $foreign * 50;@endphp
       @php $totalResident = $resident * 10;@endphp

       @php $totalAmountOfReservation = $totalStudent + $totalRegualr + $totalSenior + $totalForeign + $totalResident;@endphp

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
        <td colspan="6"></td>
        <td>{{$totalAmountOfReservation}}</td>
      </tr>
    </table>
  </div>
  <div class="footerimg" style="margin-top: 10em;"></div>

</body>

</html>
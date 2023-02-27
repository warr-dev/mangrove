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

  <div class="headerimg" ></div>

    <div class="printcontent">

      <h1>Donation Report</h1>
      <h3>Statement of fundraising summary</h3>
      <table id="reservations">
        <tr>
          <th>{{$type=='daily'?'Date':($type=='monthly'?'Month':($type=='yearly'?'Year':'Date'))}}</th>
          {{-- <th>Name</th> --}}
          <th>Donation Type</th>
          <th>Total Donation</th>
        </tr>
        @php
            $total=0;
        @endphp
        @foreach ($donations as $date=>$donation)
        <tr>
          <td>{{$date}}</td>
          {{-- <td>{{$donation->donator->getFullName()}}</td> --}}
          <td>GCASH</td>
          @php
              $total+=$donation[0]['total'];
          @endphp
          <td>{{$donation[0]['total']}}</td>
        </tr>
        @endforeach
        <tr>
          <td colspan="2">Total:</td>
          <td>{{$total}}</td>
        </tr>
      </table>
    </div>
    
    <div  class="footerimg" ></div>


</body>
</html>
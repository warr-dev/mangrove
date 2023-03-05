<!DOCTYPE html>
<html>
<head>
  <style>
    #donations {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #donations td,
    #donations th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #donations tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #donations tr:hover {
      background-color: #ddd;
    }

    #donations th {
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

    .nav-div{
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-btn{
      padding-block: 1em;
      padding-inline: 1.5em;
      margin-inline-end: .25em;
      color: #04AA6D;
      font-weight: 700;
      background-color: #f2f2f2;
      border: 1px solid #04AA6D;
      cursor: pointer;
    }

    .nav-btn:hover{
      color: #f2f2f2;
      background-color: #04AA6D;
      border: none;
    }

    @media print{
      .btn-div{
        display: none;
      }
    }
  </style>
</head>

<body>

  <div class="headerimg" ></div>

    <div class="printcontent">

      <h1>Donation Report</h1>
      <div class="nav-div">
        <h3>Statement of fundraising summary</h3>
        <div class="btn-div">
          <button class="nav-btn" onclick="window.print()">Print</button>
          <button class="nav-btn" onclick="location.reload()">Dashboard</button>
        </div>
      </div>
      <table id="donations">
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
          @if ($donation[0]['total']!=0)
          <tr>
          <td>{{date('F m, Y', strtotime($date))}}</td>
            {{-- <td>{{$donation->donator->getFullName()}}</td> --}}
            <td>GCASH</td>
            @php
                $total+=$donation[0]['total'];
            @endphp
            <td>{{$donation[0]['total']}}</td>
          </tr>
          @endif
        @endforeach
        <tr>
        <td colspan="2">TOTAL INCOME:</td>
          <td>{{'₱ '.$total.'.00'}}</td>
        </tr>
      </table>
    </div>
    
    <div  class="footerimg" ></div>


</body>
</html>
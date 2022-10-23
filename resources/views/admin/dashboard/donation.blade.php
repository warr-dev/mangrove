@extends('layouts.base2')

@section('content')
    @include('admin.components.header')
    <div class="mt-5 mx-20">
        <div class="bg-green-700 text-4xl text-white py-4 px-8 ">
            Donations
        </div>
        <div class="content">
            <div class="flex items-center justify-center">
                <div class="container p-4">
                    <div class="grid grid-cols-3 gap-4 py-4 px-8">

                        <div class="col-span-3">
                            <div class="lg:h-full py-8 px-6 text-gray-600 rounded-xl border border-gray-200 bg-white">
                                <div class="bg-white">
                                    <canvas id="myChart"></canvas>
                                </div>
                                <div class="flex justify-end px-4">
                                    <button type="button" onclick="location.href='{{ route('admin.report') }}'"
                                        class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 transition duration-200 each-in-out">Print
                                        Report</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="modal-container">

    </div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
           @foreach (array_keys($classBD) as $item)
            '{{ $item }}',
            @endforeach 
        ],
        datasets: [{
            label: 'Reservations class breakdown',
            data: [
                {{implode(',',array_values($classBD))}}
            ],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
    </script>
@endpush

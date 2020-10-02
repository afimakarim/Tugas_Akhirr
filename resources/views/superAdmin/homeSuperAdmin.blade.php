@extends('templateSuperAdmin')
@section('main')
<div class="right_col" role="main">


    <div class="col-12">
        <div class="total-revenue4" id="chart" style="height: 350px;"></div>
    </div>

</div>
@stop



@section('footer')
@stop

@section('additional_script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>

        const url = '{{ config('app.url') }}';

        async function chart() {

            const data = await getData();

            console.log(data);

            var options = {
                series: data,
                // series: [
                //     {
                //         name: "matic",
                //         data: [1, 2, 4, 9, 0, 4, 12, 4, 2, 1, 11, 23]
                //     },
                //     {
                //         name: "bebek",
                //         data: [1, 2, 4, 9, 0, 4, 12, 4, 2, 1, 11, 21]
                //     },
                //     {
                //         name: "sport",
                //         data: [1, 7, 6, 9, 0, 4, 12, 4, 2, 1, 11, 23]
                //     },
                // ],
                chart: {
                    height: 350,
                    type: 'area'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    categories: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'],
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        }

        chart();

        function getData(){
            return fetch(url+'/superAdmin/chart').then(res => res.json()).then(res => res)
        };
    </script>
@endsection
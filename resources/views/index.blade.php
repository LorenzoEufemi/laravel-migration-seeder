<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabellone Treni</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Share Tech Mono", monospace;
            font-weight: 400;
            font-style: normal;
        }
        .table-container {
            margin-top: 30px;
        }
        .status-on-time {
            color: green !important;
            font-weight: bold;
        }
        .status-delayed {
            color: red !important;
            font-weight: bold;
        }
        .status-cancelled {
            color: gray !important;
            font-weight: bold;
        }
        .train-code {
            font-weight: bold;
        }
        .status-active {
            color: green !important;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container table-container">
    <h2 class="text-center mb-4">Tabellone Partenze</h2>
    
    <table class="table table-striped table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>Azienda</th>
                <th>Stazione di Partenza</th>
                <th>Stazione di Arrivo</th>
                <th>Orario di Partenza</th>
                <th>Orario di Arrivo</th>
                <th>Codice Treno</th>
                <th>Carrozze</th>
                <th>Stato</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                <td>{{$train['azienda']}}</td>
                <td>{{$train['stazione_partenza']}}</td>
                <td>{{$train['stazione_arrivo']}}</td>
                <td>{{$train['orario_partenza']}}</td>
                <td>{{$train['orario_arrivo']}}</td>
                <td class="train-code">{{$train['codice_treno']}}</td>
                <td>{{$train['totale_carrozze']}}</td>
                <td class="{{ $train['in_orario'] ? 'status-on-time' : 'status-delayed' }}"> {{ $train['in_orario'] ? 'In Orario' : 'In Ritardo' }}</td>
                <td class="{{ $train['cancellato'] ? 'status-cancelled' : 'status-active' }}">{{ $train['cancellato'] ? 'Sì' : 'No' }}</td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>
</body>
</html>
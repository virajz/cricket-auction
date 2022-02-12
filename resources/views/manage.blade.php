<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shreemali Cricket League - Season 2</title>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: auto;
            padding: 2rem 0;
        }

        table {
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
            white-space: nowrap;
        }

        table,
        td {
            border: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        td {
            padding: 0.5rem 1rem;
        }

        select,
        input {
            padding: 0.5rem;
            width: 100%;
            outline: none;
            border: 1px solid #ddd;
            font-size: 16px;
            min-width: 200px;
        }

        .points,
        input {
            text-align: right;
        }

    </style>
    @livewireStyles
</head>

<body>
    <table>
        @foreach ($players as $key => $player)
            @livewire('player', ['player' => $player, 'teams' => $teams], key($player->id))
        @endforeach
    </table>
    @livewireScripts
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shreemali Box Cricket Championship</title>
    <!-- Fonts -->
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            padding: 1rem 2rem;
            text-align: right;
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
            padding: 1rem;
        }

        .points {
            text-align: right;
        }

        @media(max-width: 1023px) {
            nav {
                text-align: center;
            }
        }

    </style>
    @livewireStyles
</head>

<body>
    <nav>
        <a href="/">Teams</a>
    </nav>
    <table>
        @foreach ($players as $key => $player)
            <tr>
                <td style="width: 75px">{{ $key + 1 }}</td>
                <td>{{ $player->name }}</td>
                <td><strong>{{ $player->team ? $player->team->name : '' }}</strong></td>
                <td class="points">{{ $player->points }}</td>
            </tr>
        @endforeach
    </table>
    @livewireScripts
    <script type="text/javascript">
        setTimeout(function() {
            location = ''
        }, 30000);
    </script>

</body>

</html>

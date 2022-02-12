<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shreemali Cricket League - Season 2</title>
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

        section {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 50vh);
            column-gap: 2rem;
            row-gap: 2rem;
        }

        .team {
            padding: 1rem;
            background-color: #f2f2f2;
            /* color:#fff; */
        }

        h2 {
            padding: 0 0 2rem;
            display: flex;
            justify-content: space-between;
            font-size: 1.2rem;
        }

        small {
            /* font-weight: 400; */
            padding: 0 1rem 0 0;
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

        td {
            padding: 0.5rem 1rem;
        }

        .points {
            text-align: right;
        }

        @media(max-width: 1023px) {
            section {
                grid-template-columns: 1fr;
                grid-template-rows: 1fr;
                column-gap: 2rem;
                row-gap: 2rem;
            }

            nav {
                text-align: center;
            }
        }

    </style>
    @livewireStyles
</head>

<body>
    <nav>
        <a href="/players">Players List</a>
    </nav>
    <section>
        @foreach ($teams as $key => $team)
            <div class="team">
                <h2><span>{{ $team->name }}</span> <small>{{ $team->remaining }}</small></h2>
                <table>
                    @foreach ($team->players as $key => $player)
                        <tr>
                            <td width="50px">{{ $key + 1 }}</td>
                            <td>{{ $player->name }}</td>
                            <td class="points">{{ $player->points }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @endforeach
    </section>
    @livewireScripts
    {{-- <script type="text/javascript">
			setTimeout(function(){
				location = ''
			}, 30000);
		</script> --}}

</body>

</html>

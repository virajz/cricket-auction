<table>
	@foreach($players as $key => $player)
		<tr>
			<td>{{ $key + 1 }}</td>
			<td>{{ $player->name }}</td>
			<td>
				<select name="team_id">
					<option disabled selected>Select team</option>
					@foreach($teams as $key => $team)
						<option value="{{ $team->id }}">{{ $team->name }}</option>
					@endforeach
				</select>
			</td>
			<td class="points">
				<input name="points" type="number" value="0">
			</td>
		</tr>
	@endforeach
</table>

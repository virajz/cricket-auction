<tr>
	<td>{{ $player->id }}</td>
	<td>{{ $player->name }}</td>
	<td>
		<select wire:model="team">
			<option selected value="0">Select team</option>
			@foreach($teams as $team)
				<option value="{{ $team->id }}">{{ $team->name }}</option>
			@endforeach
		</select>
	</td>
	<td class="points">
		<input name="points" type="number" wire:model.lazy="points">
	</td>
</tr>

@isAdmin

<div class="input-field col s12">
	<select name="assignTo">
		<option value="" disabled selected>Assign to:</option>
		<option value="{{ Auth::user()->id }}">To myself</option>
			@foreach($coworkers as $coworker)
			@if(isset($task) && $coworker->worker->id == $task->user->id)
			<option selected value="{{ $coworker->worker->id }}">{{ $coworker->worker->name }}</option>
			@else
			<option value="{{ $coworker->worker->id }}">{{ $coworker->worker->name }}</option>
			@endif
			@endforeach
	</select>
	<label>Assign task</label>
</div>
@endisAdmin
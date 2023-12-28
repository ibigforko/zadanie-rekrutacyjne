<div class="col-12 m-b-sm">
    <label>Nazwa projektu*</label>
    <input type="text" class="form-control" name="name" value="{{ old('name', $project->name) }}">
</div>
<div class="col-12 m-b-sm">
    <label>Klient</label>
    <select type="text" class="form-control" name="client_id">
        <option value=""></option>
        @foreach ($clients as $client)
            <option value="{{ $client->id }}"
                {{ old('client_id', $project->client_id) == $client->id ? 'selected' : '' }}>{{ $client->name }}</option>
        @endforeach
    </select>
</div>
<div class="col-12 m-b-sm">
    <label>Termin</label>
    <input type="date" class="form-control" name="deadline" value="{{ old('deadline', $project->deadline) }}">
</div>
<div class="col-12 m-b-sm">
    <label>Opis projektu</label>
    <textarea class="form-control" name="description">{{ old('description', $project->description) }}</textarea>
</div>

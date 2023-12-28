<div class="col-12 m-b-sm">
    <label>Nazwa*</label>
    <input type="text" class="form-control" name="name" value="{{ old('name', $client->name) }}">
</div>
<div class="col-12 m-b-sm">
    <label>NIP*</label>
    <input type="text" class="form-control" name="tax_no" value="{{ old('tax_no', $client->tax_no) }}">
</div>
<div class="col-12 m-b-sm">
    <label>Adres</label>
    <textarea class="form-control" name="address">{{ old('address', $client->address) }}</textarea>
</div>

<div class="col-12 m-b-sm">
    <label>Państwo</label>
    <input type="text" class="form-control" name="country" value="{{ old('country', $client->country) }}">
</div>

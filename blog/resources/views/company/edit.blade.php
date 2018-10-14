<form action="{{ url('/companies/'.$companies->id) }}" method="post" id="edit-company-form">
    @csrf
    @method('put')
    <div class="row">

        <div class="col-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control form-control-sm" name="name" value="{{ $companies->name }}">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control form-control-sm" name="phone" value="{{ $companies->phone }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control form-control-sm" name="email" value="{{ $companies->email }}">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Established Date</label>
                <input type="text" class="form-control form-control-sm" name="established_date"
                       value="{{ $companies->established_date }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>License Number</label>
                <input type="text" class="form-control form-control-sm" name="license_number"
                       value="{{ $companies->license_number}}">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Category</label>
                <select name="company_category_id" class="form-control form-control-sm">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                                @if($category->id == $companies->company_category_id) selected @endif> {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Province</label>
                <select name="province_id" class="form-control form-control-sm">
                    @foreach($provinces as $province)
                        <option value="{{ $province->id }}"
                                @if($province->id == $companies->province_id) selected @endif> {{ $province->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label>Address</label>
                <input name="address" class="form-control form-control-sm" value="{{ $companies->address }}">
            </div>
        </div>
    </div>
</form>

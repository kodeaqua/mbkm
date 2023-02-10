<style>
    #btn-subtle {
        --bs-bg-opacity: .2;
        background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;

    }
</style>
@extends('layouts.materialyou')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h3 class="text-center">Overview</h3>

                <div class="card p-3">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Village</th>
                                    @foreach ($categories as $key => $value)
                                        <th scope="col">C {{ 1 + $key }}</th>
                                    @endforeach
                                    <th scope="col">Total</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($villages as $key => $value)
                                    <tr style="vertical-align: middle">
                                        <th scope="row">{{ $places->firstItem() + $key }}</th>
                                        <td>{{ $value->name }}</td>
                                        @foreach ($categories as $key => $subvalue)
                                            <td>
                                                @php
                                                    $usedvalue = 0;
                                                    $curr = 0;
                                                @endphp
                                                @foreach ($villages as $key => $subsubvalue)
                                                    @php
                                                        $i = $places
                                                            ->where('category_id', $subvalue->id)
                                                            ->where('village_id', $subsubvalue->id)
                                                            ->count();
                                                        if ($subvalue->severity == 'very_high' || $subvalue->severity == 'high' || $subvalue->severity == 'normal') {
                                                            if ($i > $usedvalue) {
                                                                $usedvalue = $i;
                                                            }
                                                        } elseif ($subvalue->severity == 'low' || $subvalue->severity == 'no_effect') {
                                                            if ($i < $usedvalue) {
                                                                $usedvalue = $i;
                                                            }
                                                        }
                                                        $curr++;
                                                    @endphp
                                                @endforeach
                                                @php
                                                    $result = 0.0;
                                                    if ($subvalue->severity == 'very_high' || $subvalue->severity == 'high' || $subvalue->severity == 'normal') {
                                                        $result =
                                                            $places
                                                                ->where('village_id', $value->id)
                                                                ->where('category_id', $subvalue->id)
                                                                ->count() / $usedvalue;
                                                    } elseif ($subvalue->severity == 'low' || $subvalue->severity == 'no_effect') {
                                                        if ($usedvalue > 0) {
                                                            $result =
                                                                $usedvalue /
                                                                $places
                                                                    ->where('village_id', $value->id)
                                                                    ->where('category_id', $subvalue->id)
                                                                    ->count();
                                                        }
                                                    }
                                                @endphp
                                                @if ($result)
                                                    {{ $result }}
                                                @else
                                                    0
                                                @endif
                                            </td>
                                        @endforeach
                                        <td>
                                            {{ $places->where('village_id', $value->id)->count() }}
                                        </td>

                                        

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $places->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@foreach ($places as $key => $value)
    <!-- Modal -->
    <div class="modal fade" id="editModal{{ $value->id }}" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <form action="{{ route('places.update', $value->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel">Edit place</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formControlName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="formControlName" name="name"
                                placeholder="{{ $value->name }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" aria-label="Category" name="category_id">
                                @foreach ($categories as $subkey => $subvalue)
                                    <option value="{{ $subvalue->id }}"
                                        @if ($value->category->id == $subvalue->id) selected @endif>{{ $subvalue->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formControlAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="formControlAddress" name="address"
                                placeholder="{{ $value->address }}">
                        </div>
                        <div class="mb-3">
                            <label for="formControlContact" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="formControlContact" name="contact"
                                placeholder="{{ $value->contact }}">
                        </div>
                        <div class="mb-3">
                            <label for="formControlAdditionalDescription" class="form-label">Additional
                                Description</label>
                            <input type="text" class="form-control" id="formControlAdditionalDescription"
                                name="additional_description" placeholder="{{ $value->additional_description }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Village</label>
                            <select class="form-select" aria-label="Village" name="village_id">
                                @foreach ($villages as $subkey => $subvalue)
                                    <option value="{{ $subvalue->id }}"
                                        @if ($value->village->id == $subvalue->id) selected @endif>{{ $subvalue->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formControlLatitude" class="form-label">Latitude</label>
                            <input type="text" class="form-control" id="formControlLatitude" name="latitude"
                                placeholder="{{ $value->latitude }}">
                        </div>
                        <div class="mb-3">
                            <label for="formControlLongitude" class="form-label">Longitude</label>
                            <input type="text" class="form-control" id="formControlLongitude" name="longitude"
                                placeholder="{{ $value->longitude }}">
                        </div>
                        <div class="mb-3 d-flex flex-row justify-content-between align-items-baseline">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckMascot"
                                    name="is_village_mascot" @if ($value->is_village_mascot) checked @endif>
                                <label class="form-check-label" for="flexCheckMascot">
                                    Mascot
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1"
                                    id="flexCheckOnlineStore" name="has_online_store"
                                    @if ($value->has_online_store) checked @endif>
                                <label class="form-check-label" for="flexCheckOnlineStore">
                                    Online store
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1"
                                    id="flexCheckSmartPayment" name="has_smart_payment_support"
                                    @if ($value->has_smart_payment_support) checked @endif>
                                <label class="form-check-label" for="flexCheckSmartPayment">
                                    Smart Payment
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endforeach

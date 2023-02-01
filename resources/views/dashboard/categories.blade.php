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

                <h3 class="text-center">All categories</h3>

                @if (session('success'))
                    <div class="alert alert-success border-0 text-center" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger border-0 text-center" role="alert">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="d-flex flex-row align-items-baseline">
                    <div class="flex-grow-1 me-auto pe-3">
                        <form action="{{ route('categories.index') }}" method="GET">
                            <div class="input-group">
                                <input type="search" name="search" class="form-control" placeholder="Search by name"
                                    @if (request('search')) value="{{ request('search') }}" @endif
                                    aria-label="Search" aria-describedby="search">
                                <button type="submit" class="btn btn-primary btn-primary-subtle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFormAdd" aria-expanded="false" aria-controls="collapseFormAdd">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                        </svg>
                        Add new
                    </button>
                </div>

                @if (request('search'))
                    <div class="d-flex align-items-baseline flex-row">
                        @if ($categories->count() > 0)
                            Showing {{ $categories->count() }} results for '{{ request('search') }}'
                        @else
                            Not found matching data for query '{{ request('search') }}'
                        @endif
                        <a href="{{ route('categories.index') }}" class="btn btn-sm btn-danger ms-2">Clear</a>
                    </div>
                    <div class="my-3"></div>
                @endif

                <div class="collapse" id="collapseFormAdd">
                    <div class="card p-3 d-flex flex-column">
                        <h5 class="text-center">New category</h5>
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="formControlName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="formControlName" name="name"
                                    placeholder="Example: Cafe">
                            </div>
                            <div class="mb-3">
                                <label for="formControlValue" class="form-label">Value</label>
                                <input type="text" class="form-control" id="formControlValue" name="value"
                                    placeholder="Example: 0.1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Severity</label>
                                <select class="form-select" aria-label="Severity" name="severity">
                                    <option value="no_effect">No Effect</option>
                                    <option value="low">Low</option>
                                    <option value="normal">Normal</option>
                                    <option value="high">High</option>
                                    <option value="very_high">Very High</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>

                    <div class="my-3"></div>
                </div>

                <div class="card p-3">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Value</th>
                                    <th scope="col">Severity</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $value)
                                    <tr style="vertical-align: middle">
                                        <th scope="row">{{ $categories->firstItem() + $key }}</th>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->value }}</td>
                                        <td>{{ $value->severity }}</td>
                                        <td align="center">
                                            <button type="button" class="btn btn-sm btn-primary mx-1"
                                                data-bs-toggle="modal" data-bs-target="#editModal{{ $value->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                                Edit
                                            </button>
                                            <a href="{{ route('categories.destroy', $value->id) }}"
                                                class="btn btn-sm btn-danger mx-1"
                                                onclick="event.preventDefault(); document.getElementById('delete-id-{{ $value->id }}').submit();">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                </svg>
                                                Delete
                                            </a>
                                            <form id="delete-id-{{ $value->id }}"
                                                action="{{ route('categories.destroy', $value->id) }}" method="POST"
                                                class="d-none">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@foreach ($categories as $key => $value)
    <!-- Modal -->
    <div class="modal fade" id="editModal{{ $value->id }}" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <form action="{{ route('categories.update', $value->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel">Edit category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formControlName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="formControlName" name="name"
                                placeholder="{{ $value->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="formControlValue" class="form-label">Value</label>
                            <input type="text" class="form-control" id="formControlValue" name="value"
                                placeholder="{{ $value->value }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Severity</label>
                            <select class="form-select" aria-label="Severity" name="severity">
                                <option value="no_effect" @if ($value->severity == 'no_effect') selected @endif>No Effect
                                </option>
                                <option value="low" @if ($value->severity == 'low') selected @endif>Low</option>
                                <option value="normal" @if ($value->severity == 'normal') selected @endif>Normal
                                </option>
                                <option value="high" @if ($value->severity == 'high') selected @endif>High</option>
                                <option value="very_high" @if ($value->severity == 'very_high') selected @endif>Very High
                                </option>
                            </select>
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

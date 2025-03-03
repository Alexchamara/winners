@extends('admin.layouts.app')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h5 class="card-title">Customers</h5>
                            </div>
                            <div class="col-lg-6 text-end">
                                @include('admin.customer.components.create')
                            </div>
                        </div>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    {{-- <th>Phone</th>
                                    <th>Address</th> --}}
                                    <th>Winner</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->user->name }}</td>
                                        <td>{{ $customer->user->email }}</td>
                                        {{-- <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->address }}</td> --}}
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input winner-toggle" type="checkbox"
                                                    id="winnerToggle{{ $customer->id }}"
                                                    data-customer-id="{{ $customer->id }}"
                                                    {{ $customer->is_winner ? 'checked' : '' }}>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                @include('admin.customer.components.view')
                                                @include('admin.customer.components.edit')
                                                @include('admin.customer.components.remove')
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const toggles = document.querySelectorAll('.winner-toggle');

                toggles.forEach(toggle => {
                    toggle.addEventListener('change', function() {
                        const customerId = this.getAttribute('data-customer-id');
                        const isWinner = this.checked;
                        const originalState = this.checked;

                        // Disable the toggle while processing
                        this.disabled = true;

                        console.log(
                            `Sending request to update customer ${customerId} winner status to ${isWinner}`
                            );

                        fetch(`/admin/customers/${customerId}/toggle-winner`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').getAttribute('content'),
                                    'X-Requested-With': 'XMLHttpRequest', // Important for Laravel to recognize AJAX
                                    'Accept': 'application/json'
                                },
                                body: JSON.stringify({
                                    is_winner: isWinner
                                })
                            })
                            .then(response => {
                                console.log('Status:', response.status);
                                // Check for specific error statuses
                                if (response.status === 419) {
                                    throw new Error(
                                    'CSRF token mismatch. Please refresh the page.');
                                } else if (response.status === 404) {
                                    throw new Error(
                                        'Endpoint not found. Check your routes configuration.');
                                } else if (!response.ok) {
                                    return response.text().then(text => {
                                        throw new Error(
                                            `Error (${response.status}): ${text || 'Unknown error'}`
                                            );
                                    });
                                }
                                return response.json();
                            })
                            .then(data => {
                                console.log('Response:', data);
                                if (data.success) {
                                    // Add a visual confirmation
                                    const toast = document.createElement('div');
                                    toast.className =
                                        'alert alert-success alert-dismissible fade show';
                                    toast.innerHTML = `
                                    <i class="bi bi-check-circle me-1"></i>
                                    Winner status updated!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                `;

                                    // Find a good place to show the toast
                                    const container = document.querySelector('.card-body');
                                    container.insertBefore(toast, container.firstChild);

                                    // Remove after 3 seconds
                                    setTimeout(() => toast.remove(), 3000);
                                } else {
                                    throw new Error(data.message || 'Unknown error');
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                this.checked = !originalState; // Revert to original state
                                alert('Failed to update winner status: ' + error.message);
                            })
                            .finally(() => {
                                // Re-enable the toggle
                                this.disabled = false;
                            });
                    });
                });
            });
        </script>
    @endpush
@endsection

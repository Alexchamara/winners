<button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewCustomerModal{{ $customer->id }}">
    <i class="bi bi-eye"></i>
</button>

<div class="modal fade" id="viewCustomerModal{{ $customer->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Customer Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Name:</div>
                    <div class="col-md-8">{{ $customer->name }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Email:</div>
                    <div class="col-md-8">{{ $customer->email }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Phone:</div>
                    <div class="col-md-8">{{ $customer->phone }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Address:</div>
                    <div class="col-md-8">{{ $customer->address }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Registered:</div>
                    <div class="col-md-8">{{ $customer->created_at->format('M d, Y') }}</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
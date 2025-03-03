<button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#removeCustomerModal{{ $customer->id }}">
    <i class="bi bi-trash"></i>
</button>

<div class="modal fade" id="removeCustomerModal{{ $customer->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete customer <strong>{{ $customer->name }}</strong>?
                <p class="text-danger mt-2">This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('admin.customers.destroy', $customer) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete Customer</button>
                </form>
            </div>
        </div>
    </div>
</div>
<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editCustomerModal{{ $customer->id }}">
    <i class="bi bi-pencil"></i>
</button>

<div class="modal fade" id="editCustomerModal{{ $customer->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.customers.update', $customer) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="name{{ $customer->id }}" class="col-sm-3 col-form-label">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name{{ $customer->id }}" name="name" value="{{ $customer->user->name }}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email{{ $customer->id }}" class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email{{ $customer->id }}" name="email" value="{{ $customer->user->email }}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password{{ $customer->id }}" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password{{ $customer->id }}" name="password" placeholder="Leave blank to keep current">
                            <small class="text-muted">Only fill if you want to change password</small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone{{ $customer->id }}" class="col-sm-3 col-form-label">Phone <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone{{ $customer->id }}" name="phone" value="{{ $customer->phone }}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="address{{ $customer->id }}" class="col-sm-3 col-form-label">Address <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address{{ $customer->id }}" name="address" value="{{ $customer->address }}" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Customer</button>
                </div>
            </form>
        </div>
    </div>
</div>
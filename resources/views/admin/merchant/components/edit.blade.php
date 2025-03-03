<button type="button" class="badge rounded-pill px-3 bg-info border-0" data-bs-toggle="modal" data-bs-target="#updateMerchantModal{{ $merchant->id }}">
    Edit
</button>

<div class="modal fade" id="updateMerchantModal{{ $merchant->id }}" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Merchant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('merchant.update', $merchant->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6 mb-3 text-start">
                            <label for="name" class="form-label fw-bold">Merchant Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" required value="{{ $merchant->name }}">
                        </div>
                        <div class="col-lg-6 mb-3 text-start">
                            <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" required value="{{ $merchant->email }}">
                        </div>
                        <div class="col-lg-6 mb-3 text-start">
                            <label for="phone" class="form-label fw-bold">Phone Number <span class="text-danger">*</span></label>
                            <input type="number" name="phone" id="phone" class="form-control" required value="{{ $merchant->phone }}">
                        </div>
                        <div class="col-lg-6 mb-3 text-start">
                            <label for="address" class="form-label fw-bold">Address <span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control" required value="{{ $merchant->address }}">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Merchant</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

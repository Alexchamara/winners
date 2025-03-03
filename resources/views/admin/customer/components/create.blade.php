<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCustomerModal">
    <i class="ri-add-circle-line align-bottom"></i> Add Customer
</button>

<div class="modal fade" id="createCustomerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.customers.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-3 col-form-label">Name <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 col-form-label">Email <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 col-form-label">Password <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.getElementById('togglePassword').addEventListener('click', function () {
                            const passwordField = document.getElementById('password');
                            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                            passwordField.setAttribute('type', type);
                            this.querySelector('i').classList.toggle('ri-eye-line');
                            this.querySelector('i').classList.toggle('ri-eye-off-line');
                        });
                    </script>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-3 col-form-label">Phone <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="address" class="col-sm-3 col-form-label">Address <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Customer</button>
                </div>
            </form>
        </div>
    </div>
</div>
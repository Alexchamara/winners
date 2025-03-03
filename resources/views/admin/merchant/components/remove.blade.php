<button type="button" class="btn btn-primary badge rounded-pill bg-danger border-0" data-bs-toggle="modal" data-bs-target="{{'#remove-merchant'.$merchant->id}}">
    Delete
  </button>

  <div class="modal fade" id="{{'remove-merchant'.$merchant->id}}" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            Remove Merchant: {{$merchant->name}}
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('merchant.destroy', $merchant->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <p>Are you sure you want to remove this merchant from the system?</p>
            <p class="text-danger">This action cannot be undone.</p>
            <input type="hidden" name="merchant_id" value="{{$merchant->id}}"/>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Yes</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

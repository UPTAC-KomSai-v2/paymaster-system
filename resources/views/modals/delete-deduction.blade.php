<div class="modal fade" id="confirmDeleteDeductionModal" tabindex="-1" aria-labelledby="confirmDeleteDeductionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmDeleteDeductionModalLabel">Confirm Deletion</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this deduction (<b><span id="deductionName"></span></b> @ <b><span id="deductionAmount"></span></b>)? This action cannot be undone.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="deleteConfirmBtn">Confirm Deletion</button>
      </div>
    </div>
  </div>
</div>
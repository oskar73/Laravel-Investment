<div class="modal fade" role="dialog" aria-modal="true" id="add-card-modal">
   <div class="modal-dialog  modal-dialog-scrollable modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-body p-4">
            <div class="row">
               <div class="col-lg-12">
                  <div class="d-flex justify-content-between align-items-center mb-4">
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio21" value="option1" checked>
                        <label class="form-check-label h5" for="inlineRadio21">Debit Card</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio22" value="option2">
                        <label class="form-check-label h5" for="inlineRadio22">Credit Card</label>
                     </div>
                  </div>
                  <div class="my-4">
                     <select class="form-select  form-control mb-3">
                        <option selected="">Select Card Type</option>
                        <option value="1">Visa Card</option>
                        <option value="2">Master Card</option>
                        <option value="3">Rupay Card</option>
                        <option value="4">Express Card</option>
                     </select>
                  </div>
                  <div class=" form-group">
                     <label for="name" class="form-label h6">Full Name</label>
                     <input type="text" class="form-control" id="name" aria-describedby="name" placeholder=" ">
                  </div>
                  <p class="mb-3">
                     *Same as on the card.
                  </p>
                  <h6 class="mb-3">Expiry Date</h6>
                  <div class="input-group">
                     <input type="text" class="form-control vanila-datepicker" placeholder="MM/YY">
                  </div>
                  <div class="text-center mt-4">
                     <button type="button" class="btn btn-primary"  data-bs-dismiss="modal">
                        Add Card
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

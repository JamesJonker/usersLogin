
<div class="modal fade" id="addPersonModal" tabindex="-1" aria-labelledby="addPersonModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addPersonModal">Add Person</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="addPersonModal">
        <form id="addPerson" action="">
          <div class="mb-3 row">
            <label for="new_first_name" class="col-md-3 form-label">First name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="new_first_name" name="new_first_name" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="new_last_name" class="col-md-3 form-label">Last Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="new_last_name" name="new_last_name">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="new_id_number" class="col-md-3 form-label">Id Number</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="new_id_number" name="new_id_number">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="new_contact_number" class="col-md-3 form-label">Contact Number</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="new_contact_number" name="new_contact_number">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="new_email" class="col-md-3 form-label">Email</label>
            <div class="col-md-9">
              <input type="email" class="form-control" id="new_email" name="new_email">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="new_dob" class="col-md-3 form-label">Date of Birth</label>
            <div class="col-md-9">
              <input type="date" class="form-control" id="new_dob" name="new_dob" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="new_langauge" class="col-md-3 form-label">Langauge</label>
            <div class="col-md-9">
                <select class="form-control" id="new_langauge" name="new_langauge" >
                    <option value="">--- Choose a Langauge ---</option>
                    <option value="English">English</option>
                    <option value="Afrikaans">Afrikaans</option>
                    <option value="Other">Other</option>
                </select>
              <!--<input type="text" class="form-control" id="new_langauge" name="new_langauge">-->
            </div>
          </div>
          <div class="mb-3 row">
            <label for="new_interests" class="col-md-3 form-label" >Interests</label>
            <div class="col-md-9">
              <select class="form-control" id="new_interests" name="new_interests[]" multiple>
                      <option value="">--- Choose a Interests ---</option>
                      <option value="cooking">cooking</option>
                      <option value="hunting">hunting</option>
                      <option value="Fishing">Fishing</option>
                      <option value="tracking">tracking</option>
                      <option value="Other">Other</option>
                  </select>
              <!--<input type="text" class="form-control" id="new_interests" name="new_interests">-->
            </div>
          </div>
          <div class="text-center">
            <button type="submit" name="add_person" class="btn btn-primary">Submit</button>
          </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 
 
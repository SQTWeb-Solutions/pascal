<!-- TODO: Submit the form to server and save to the database and send email to the user and admin as confirmation -->
<form action="#" method="POST" id="xs-contact-form">
  <div class="row xs-margin-0 xs-mb-30">
    <div class="col-md-6 xs-padding-0 xs-pr-15">
      <div class="xs-input-group">
        <label for="xs_contact_name">{{_t('Firstname')}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-user color-green xs-input-addon"></i>
          <input type="text" name="lastname" id="xs_contact_name" class="xs-input-control" placeholder="Enter your firstname...">
        </div>
      </div>
    </div>
    <div class="col-md-6 xs-padding-0 xs-pl-15">
      <div class="xs-input-group">
        <label for="xs_contact_email">{{_t('Lastname')}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-user color-green xs-input-addon"></i>
          <input type="text" name="lastname" id="xs_contact_email" class="xs-input-control" placeholder="Enter your lastname...">
        </div>
      </div>
    </div>
  </div>
  <div class="row xs-margin-0 xs-mb-30">
    <div class="col-md-6 xs-padding-0 xs-pr-15">
      <div class="xs-input-group">
        <label for="xs_contact_name">{{_t('Phone Number')}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-phone color-green xs-input-addon"></i>
          <input type="text" name="numbber" id="xs_contact_name" class="xs-input-control" placeholder="Enter your phone number...">
        </div>
      </div>
    </div>
    <div class="col-md-6 xs-padding-0 xs-pl-15">
      <div class="xs-input-group">
        <label for="xs_contact_email">{{_t('Email Address')}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-envelope-o color-green xs-input-addon"></i>
          <input type="email" name="email" id="xs_contact_email" class="xs-input-control" placeholder="Enter your email...">
        </div>
      </div>
    </div>
  </div>
  <div class="xs-massage-group xs-mb-30">
    <label for="x_contact_massage">{{_t('Residential Address')}}</label>
    <div class="xs-massage-group-addon">
      <i class="fa fa-pencil color-green xs-input-addon"></i>
      <textarea name="massage" id="x_contact_massage" class="xs-textarea-control" cols="30" rows="5" placeholder="Enter your full adddress..."></textarea>
    </div>
  </div>
  <div class="xs-input-group xs-mb-30">
    <label for="xs_contact_subject">{{_t('What State do you reside')}}</label>
    <div class="xs-input-group-addon">
      <!-- TODO: Select states from the list of provider states -->
      <select class="xs-input-control">
        <option value="">Select State</option>
        <option value="Tennis">Nigerian States</option>
      </select>
    </div>
  </div>
  <div class="xs-input-group xs-mb-30">
    <label for="xs_contact_subject">{{_t('Profession')}}</label>
    <div class="xs-input-group-addon">
      <input type="text" name="profession" id="xs_contact_subject" class="xs-input-control" placeholder="What do you do...">
    </div>
  </div>
  <div class="xs-input-group xs-mb-30">
    <label for="xs_contact_subject">{{_t('How would you sopport us?')}}</label>
    <div class="xs-input-group-addon">
      <input type="text" name="profession" id="xs_contact_subject" class="xs-input-control" placeholder="How would you like to support PRSF...">
    </div>
  </div>

  <div class="xs-massage-group xs-mb-30">
    <label for="x_contact_massage">{{_t('Additional Information')}}</label>
    <div class="xs-massage-group-addon">
      <i class="fa fa-pencil color-green xs-input-addon"></i>
      <textarea name="massage" id="x_contact_massage" class="xs-textarea-control" cols="30" rows="10" placeholder="Enter your additional informtion..."></textarea>
    </div>
  </div>
  <div class="xs-submit-wraper content-center">
    <input type="submit" name="submit" value="Submit your message" id="xs_contact_submit" class="xs-submit-btn">
  </div>
</form>

<!-- TODO: Submit the form to server and save to the database and send email to the user and admin as confirmation -->
<form action="#" method="POST" id="xs-contact-form">
  <h4>{{_t('Your Information')}}</h4>
  <span class="xs-separetor dashed-separetor fundpress-separetor"></span>
  <div class="row xs-margin-0 xs-mb-30">
    <div class="col-md-6 xs-padding-0 xs-pr-15">
      <div class="xs-input-group">
        <label for="xs_contact_name">{{_t('Firstname')}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-user color-green xs-input-addon"></i>
          <input type="text" name="lastname" id="xs_contact_name" class="xs-input-control" placeholder="{{_t('Enter your firstname...')}}">
        </div>
      </div>
    </div>
    <div class="col-md-6 xs-padding-0 xs-pl-15">
      <div class="xs-input-group">
        <label for="xs_contact_email">{{_t('Lastname')}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-user color-green xs-input-addon"></i>
          <input type="text" name="lastname" id="xs_contact_email" class="xs-input-control" placeholder="{{_t('Enter your lastname...')}}">
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
          <input type="text" name="numbber" id="xs_contact_name" class="xs-input-control" placeholder="{{_t('Enter your phone number...')}}">
        </div>
      </div>
    </div>
    <div class="col-md-6 xs-padding-0 xs-pl-15">
      <div class="xs-input-group">
        <label for="xs_contact_email">{{_t('Email Address')}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-envelope-o color-green xs-input-addon"></i>
          <input type="email" name="email" id="xs_contact_email" class="xs-input-control" placeholder="{{_t('Enter your email...')}}">
        </div>
      </div>
    </div>
  </div>
  <div class="xs-massage-group xs-mb-30">
    <label for="x_contact_massage">{{_t('Residential Address')}}</label>
    <div class="xs-massage-group-addon">
      <i class="fa fa-pencil color-green xs-input-addon"></i>
      <textarea name="massage" id="x_contact_massage" class="xs-textarea-control" cols="30" rows="5" placeholder="{{_t('Enter your full adddress...')}}"></textarea>
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
      <input type="text" name="profession" id="xs_contact_subject" class="xs-input-control" placeholder="{{_t('What do you do...')}}">
    </div>
  </div>
  <div class="xs-input-group xs-mb-30">
    <label for="xs_contact_subject">{{_t('Relationship with the kid')}}</label>
    <div class="xs-input-group-addon">
      <input type="text" name="profession" id="xs_contact_subject" class="xs-input-control" placeholder="{{_t('What is your relationship with the kid...')}}">
    </div>
  </div>

  <hr />
  <h4>{{_t("The Kid's information")}}</h4>
  <span class="xs-separetor dashed-separetor fundpress-separetor"></span>
  <div class="row xs-margin-0 xs-mb-30">
    <div class="col-md-6 xs-padding-0 xs-pr-15">
      <div class="xs-input-group">
        <label for="xs_contact_name">{{_t('Firstname')}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-user color-green xs-input-addon"></i>
          <input type="text" name="lastname" id="xs_contact_name" class="xs-input-control" placeholder="{{_t("Enter the kid's firstname...")}}">
        </div>
      </div>
    </div>
    <div class="col-md-6 xs-padding-0 xs-pl-15">
      <div class="xs-input-group">
        <label for="xs_contact_email">{{_t('Lastname')}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-user color-green xs-input-addon"></i>
          <input type="text" name="lastname" id="xs_contact_email" class="xs-input-control" placeholder="{{_t("Enter the kid's lastname...")}}">
        </div>
      </div>
    </div>
  </div>
  <div class="row xs-margin-0 xs-mb-30">
    <div class="col-md-6 xs-padding-0 xs-pr-15">
      <div class="xs-input-group">
        <label for="xs_contact_name">{{_t("Kid's/Guardian's Phone number")}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-phone color-green xs-input-addon"></i>
          <input type="text" name="numbber" id="xs_contact_name" class="xs-input-control" placeholder="{{_t("Enter Kid's/Guardian's phone number...")}}">
        </div>
      </div>
    </div>
    <div class="col-md-6 xs-padding-0 xs-pl-15">
      <div class="xs-input-group">
        <label for="xs_contact_email">{{_t("Kid's/Guardian's  Email Address")}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-envelope-o color-green xs-input-addon"></i>
          <input type="email" name="email" id="xs_contact_email" class="xs-input-control" placeholder="{{_t("Enter Kid's/Guardian's email...")}}">
        </div>
      </div>
    </div>
  </div>
  <div class="xs-massage-group xs-mb-30">
    <label for="x_contact_massage">{{_t('Residential Address (Kids)')}}</label>
    <div class="xs-massage-group-addon">
      <i class="fa fa-pencil color-green xs-input-addon"></i>
      <textarea name="massage" id="x_contact_massage" class="xs-textarea-control" cols="30" rows="5" placeholder="{{_t("Enter the kid's full adddress...")}}"></textarea>
    </div>
  </div>
  <div class="xs-input-group xs-mb-30">
    <label for="xs_contact_subject">{{_t('What State does the kid reside')}}</label>
    <div class="xs-input-group-addon">
      <!-- TODO: Select states from the list of provider states -->
      <select class="xs-input-control">
        <option value="">Select State</option>
        <option value="Tennis">Nigerian States</option>
      </select>
    </div>
  </div>
  <hr  />
  <div class="xs-input-group xs-mb-30">
    <label for="xs_contact_subject">{{_t('Sport type')}}</label>
    <div class="xs-input-group-addon">
      <!-- TODO: Select from list of sports from the admin -->
      <select class="xs-input-control">
        <option value="">{{_t('Select sport type')}}</option>
        <option value="Tennis">{{_t('Tennis')}}</option>
        <option value="Tennis">{{_t('Football')}}</option>
        <option value="Tennis">{{_t('Basketball')}}</option>
        <option value="Tennis">{{_t('Lawn Tennis')}}</option>
      </select>
    </div>
  </div>
  <div class="xs-massage-group xs-mb-30">
    <label for="x_contact_massage">{{_t('Kids core talent(s)')}}</label>
    <div class="xs-massage-group-addon">
      <i class="fa fa-pencil color-green xs-input-addon"></i>
      <textarea name="massage" id="x_contact_massage" class="xs-textarea-control" cols="30" rows="5" placeholder="{{_t('Enter the core talent of the kid...')}}'"></textarea>
    </div>
  </div>
  <div class="xs-massage-group xs-mb-30">
    <label for="x_contact_massage">{{_t('How well do you know the kid')}}</label>
    <div class="xs-massage-group-addon">
      <i class="fa fa-pencil color-green xs-input-addon"></i>
      <textarea name="massage" id="x_contact_massage" class="xs-textarea-control" cols="30" rows="5" placeholder="{{_t('Give full details about how you know the kid...')}}'"></textarea>
    </div>
  </div>
  <div class="xs-massage-group xs-mb-30">
    <label for="x_contact_massage">{{_t('Aditional Information')}}</label>
    <div class="xs-massage-group-addon">
      <i class="fa fa-pencil color-green xs-input-addon"></i>
      <textarea name="massage" id="x_contact_massage" class="xs-textarea-control" cols="30" rows="5" placeholder="{{_t('Any other information you would like us to know...')}}'"></textarea>
    </div>
  </div>
  <div class="xs-submit-wraper content-center">
    <input type="submit" name="submit" value="{{_t('Submit form')}}" id="xs_contact_submit" class="xs-submit-btn">
  </div>
</form>

<!-- TODO: Submit the form to server and send to mail using Ajax-->
<form action="#" method="POST" id="xs-contact-form">
  <div class="row xs-margin-0 xs-mb-30">
    <div class="col-md-6 xs-padding-0 xs-pr-15">
      <div class="xs-input-group">
        <label for="xs_contact_name">{{_t('Name')}}</label>
        <div class="xs-input-group-addon">
          <i class="fa fa-user color-green xs-input-addon"></i>
          <input type="text" name="name" id="xs_contact_name" class="xs-input-control" placeholder="Enter your name...">
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
  <div class="xs-input-group xs-mb-30">
    <label for="xs_contact_subject">{{_t('Subject')}}</label>
    <div class="xs-input-group-addon">
      <i class="fa fa-sticky-note color-green xs-input-addon"></i>
      <input type="text" name="subject" id="xs_contact_subject" class="xs-input-control" placeholder="Subject of your message">
    </div>
  </div>
  <div class="xs-massage-group xs-mb-30">
    <label for="x_contact_massage">{{_t('Message')}}</label>
    <div class="xs-massage-group-addon">
      <i class="fa fa-pencil color-green xs-input-addon"></i>
      <textarea name="massage" id="x_contact_massage" class="xs-textarea-control" cols="30" rows="10" placeholder="Enter your message..."></textarea>
    </div>
  </div>
  <div class="xs-submit-wraper content-center">
    <input type="submit" name="submit" value="Submit your message" id="xs_contact_submit" class="xs-submit-btn">
  </div>
</form>

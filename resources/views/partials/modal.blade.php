<div class="modal xs-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<h3>{{_t('Donate to support Pascal Rufi Sports Foundation')}}</h3>
			<span class="xs-separetor dashed-separetor fundpress-separetor"></span>
			<p>
				{{_t('The Pascal Rufi Foundation is proud to be able to leave positive footprints in the community by providing beneficial intervention to youths in need.')}}
			</p>
			<p>
				{{_t('To donate, select your payment option available for you and fill the form to proceed your donation payment.')}}
			</p>
			<div class="fundpress-tab-nav-v5">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#paypal" role="tab" data-toggle="tab">
							{{_t('Paypal')}}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#paystack" role="tab" data-toggle="tab">
							{{_t('Paystack')}}
						</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fadeInRights show fade in active" id="paypal">
					<form action="#" method="POST" id="xs-login-form">
						<div class="xs-input-group-v2">
							<i class="icon icon-profile-male"></i>
							<input type="text" class="xs-input-control" placeholder="{{_t('Enter your fullname *')}}">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-email"></i>
							<input type="email" class="xs-input-control" placeholder="{{_t('Enter your email address  *')}}">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-contact"></i>
							<input type="text" class="xs-input-control" placeholder="{{_t('Enter your phone number *')}}">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-money-3"></i>
							<input type="text" class="xs-input-control" placeholder="{{_t('Enter amount to donate *')}}">
						</div>
						<div class="xs-input-group-v2">
							<textarea placeholder="{{_t('Additional information...')}}" class="xs-textarea-control"></textarea>
						</div>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="{{_t('Proceed to paypal')}}" id="xs_contact_get_action" class="btn btn-warning btn-block">
						</div>
					</form>
				</div><!-- tab-pane -->
				<div role="tabpanel" class="tab-pane fadeInRights fade" id="paystack">
					<form action="#" method="POST" id="xs-register-form">
						<div class="xs-input-group-v2">
							<i class="icon icon-profile-male"></i>
							<input type="text" class="xs-input-control" placeholder="{{_t('Enter your fullname *')}}">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-email"></i>
							<input type="email" class="xs-input-control" placeholder="{{_t('Enter your email address  *')}}">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-contact"></i>
							<input type="text" class="xs-input-control" placeholder="{{_t('Enter your phone number *')}}">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-money-3"></i>
							<input type="text" class="xs-input-control" placeholder="{{_t('Enter amount to donate *')}}">
						</div>
						<div class="xs-input-group-v2">
							<textarea placeholder="{{_t('Additional information...')}}" class="xs-textarea-control"></textarea>
						</div>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="{{_t('Proceed to paystack')}}" id="xs_contact_get_action" class="btn btn-warning btn-block">
						</div>
					</form>
				</div><!-- tab-pane -->
			</div>
		</div>
	</div>
</div>

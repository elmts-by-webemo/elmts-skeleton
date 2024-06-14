<div class="toast text-bg-succes m-1 shadow-sm" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="15000">
	<div class="toast-header">
		<strong class="me-auto">{{ __('messages.status.success') }}</strong>
		<small><?php echo date('H:i:s');?></small>
		<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
	</div>
	<div class="toast-body">
		{{ __('messages.content.text') }}
	</div>
</div>
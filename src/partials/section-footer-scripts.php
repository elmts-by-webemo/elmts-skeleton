
<div class="position-fixed bottom-0 left-0 p-3" style="z-index: 1115; left: 0; bottom: 0;">
	<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
		<div class="toast-header">
			<strong class="me-auto">Zrobione!</strong>
			<small>Przed chwilą</small>
			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('.toast').toast('show');
	});
</script>

<!-- ============================== FOOTER-SCRIPTS ============================== -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="js/jquery.functions.js"></script>
</body>
</html>
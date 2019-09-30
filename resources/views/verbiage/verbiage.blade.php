<div class="verbiage-container col-md-5ths col-sm-3">
	<div class="verbiage-index">{{ $key < 9 ? "0".($key+1) : $key+1 }}</div>
	<div class="verbiage-link" data-verbiage="{{ $verbiage.message }}">
	    <i class="{{ $verbiage.icon }}"></i>
	    <p>{{ $verbiage.title }}</p>
	</div>
</div>
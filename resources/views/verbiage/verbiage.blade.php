<div class="verbiage-container col-6 col-md-3 col-lg-5ths">
	<div class="verbiage-index">{{ $key < 9 ? "0".($key+1) : $key+1 }}</div>
	<div class="verbiage-link" data-verbiage="{{ $verbiage.message }}">
	    <i class="{{ $verbiage.icon }}"></i>
	    <p>{{ $verbiage.title }}</p>
	</div>
</div>
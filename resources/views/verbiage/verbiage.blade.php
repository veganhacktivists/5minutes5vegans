<div class="verbiage-container col-md-5ths col-sm-3">
	<div class="verbiage-index">{{ $key < 9 ? "0".($key+1) : $key+1 }}</div>
	<div class="verbiage-link" data-verbiage="{{ $verbiage[2] }}">
		<div class="verbiage-inner">
		    <i class="{{ $verbiage[1] }}"></i>
		    <p>{{ $verbiage[0] }}</p>
		</div>
	</div>
</div>
<script type="text/javascript">
	toastr.options = {
		  	"debug": false,
		  	"positionClass": "toast-bottom-left",
		  	"onclick": null,
		  	"fadeIn": 300,
	}
    @if (Session::has('success'))
    	toastr.success("{{ Session::get('success') }}")
    @endif
    @if (Session::has('warning'))
        toastr.success("{{ Session::get('warning') }}")
    @endif
    @if (Session::has('error'))
        toastr.success("{{ Session::get('error') }}")
    @endif
    @if (Session::has('info'))
        toastr.success("{{ Session::get('info') }}")
    @endif
</script>
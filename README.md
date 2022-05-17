# How to add eventListener to input field in Ninja Forms

WordPress loads a lot of scripts and not everything is ready when a custom script should run. The task was to get the hidden field filled in from the information in the visible fields. Normal eventLister did not work with JavaScript or JQuery.

```HTML
<script async>
jQuery(document).on( 'nfFormReady', function() {
	jQuery(".nf-form-content input[type=text]").on('change', function(){
		  const address = jQuery('#nf-field-17').val();
		  const zip = jQuery('#nf-field-48').val();
		  const city = jQuery('#nf-field-46').val();
		  const newValue = address +' '+ zip +' '+ city;
		  jQuery('#nf-field-56').val(newValue);
	});
});
</script>

<style>#nf-form-3-cont #nf-field-56-container { display: none }</style>
```

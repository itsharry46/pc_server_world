<script type="text/javascript">

	function login_submit() 
	{
    	var login_data = $('#formAuthentication').serialize();

    	$.ajax({
    		type : 'POST',
    		url  : '<?php echo base_url(); ?>Authentication/login_authentication',
    		data : login_data,
    		dataType : 'html',
    		success : function (data)
    		{
    			// alert("Ok");
    		}
    	});

    	return;
    }
	
	function login_validation()
	{

	}

</script>
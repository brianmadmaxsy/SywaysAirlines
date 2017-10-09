<html>
<head>
	<title>sample calculate</title>
	<script type="text/javascript">
	    function DisplayPrice(price){
	        var val1 = 0;
	        for( i = 0; i < document.form1.price.length; i++ ){
	            if( document.form1.price[i].checked == true ){
	                val1 = document.form1.price[i].value;
	            }
	        }

	        var val2 = 0;
	        for( i = 0; i < document.form2.price2.length; i++ ){
	            if( document.form2.price2[i].checked == true ){
	                val2 = document.form2.price2[i].value;
	            }
	        }

	        var sum=parseInt(val1) + parseInt(val2);
	        document.getElementById('totalSum').value=sum;
	    }
	</script>
</head>
<body>
    Choose a number:<br>
    <form name="form1" id="form1" runat="server">
        <br>
        <input id="rdo_1" type="radio" value="159" name="price" onclick="DisplayPrice(this.value);">159
        <br>
        <input id="rdo_2" type="radio" value="259" name="price" onclick="DisplayPrice(this.value);">259
        <br>
    </form>

    Choose another number:<br>
    <form name="form2" id="form2" runat="server">
        <br>
        <input id="rdo_1" type="radio" value="345" name="price2" onclick="DisplayPrice(this.value);">345
        <br>
        <input id="rdo_2" type="radio" value="87" name="price2" onclick="DisplayPrice(this.value);">87
        <br>
    </form>
    <input type="text" name="totalSum" id="totalSum" value="" size="2" readonly="readonly">


</body>
</html>
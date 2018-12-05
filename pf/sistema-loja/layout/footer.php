<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.priceformat.min.js"></script>
<script type="text/javascript">
	$('.price').priceFormat({ // Mascara para formatar moeda na entrada do usuário
    prefix: '',
    centsSeparator: ',',
    thousandsSeparator: '.'
	});
</script>
<script>
	setTimeout(function(){
		$(".esconde").fadeOut();
	}, 4000);
</script>
</body>
</html>
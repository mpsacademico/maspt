<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Documentação MASPT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="skeleton204.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="twelve columns">
					<header>
						<h1>MASPT</h1>
						<h2>Documentação</h2>
					</header>
					<h3>Previsão do Tempo</h3>
					<h4>Previsão completa para uma localidade</h4>
					<p>Parâmetros</p>
					<table class="u-full-width">
						<tr>
							<th>cl</th>
							<td>Código da localidade</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th>tr</th>
							<td>Tipo de retorno</td>
							<td>Especifica em que formato de dado o retorno dos dados será fornecido</td>
							<td>
								<ul>
									<li>json</li>
									<li>xml</li>
								</ul>
							</td>
						</tr>
					</table>
					<p><strong>Exemplo: previsão para a cidade de São Paulo no formato JSON</strong><br>					
					<code>
						http://<?php echo $_SERVER["SERVER_NAME"]; ?>/api/previsao.php?cl=244&tr=json
					</code></p>
				</div>
			</div>
		</div>
	</body>
</html> 
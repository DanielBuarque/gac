<!DOCTYPE html>
<html>
	<head>
        <?php 
            include_once '../model/Conexao.class.php';
            include_once '../model/Gerenciador.class.php';
            include_once 'dependencias.php'; 

            $gerenciador = new Gerenciador();

            $id = $_POST['id'];
        ?>
        <style> 
			tr {
  				margin: 0;
  				padding: 0;
  				text-align:center;
			}

			table {
  				color: #000;
				font-size: .9em;
				font-weight: 300;
				line-height: 40px;
				border-collapse: separate;
				border-spacing: 0;
				border: 0px solid #000;
				min-width: 400px;
				margin: 50px auto;
				border-radius: 2px;
			}	

			th {
  				background: #343a40;
  				color: #fff;
  				border: none;
			}

			tr:hover:not(th) {background-color: rgba(237,28,64,.1);}

			input[type="button"] {
 	 			transition: all .3s;
    			border: 1px solid #ddd;
    			padding: 8px 16px;
    			text-decoration: none;
    			border-radius: 3px;
  				font-size: 11px;
			}

			input[type="button"]:not(.active) {
  				background-color:transparent;
			}

			.active {
  				background-color: #343a40; /*#007bff; */
  				color :#fff;
			}

			input[type="button"]:hover:not(.active) {
  				background-color: #ddd;
			}
		</style>
	</head>
    <body>
        <form method="POST" action="../view/exibe_nota">
            <div class="container">
                <div class="jumbotron">
                    <h2 class="text-center">
                        <span class="fa fa-user-edit"></span>
                        Notas de serviço do cliente
                    </h2>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-hover" id="myTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Data</th>
                                    <th>Descrição</th>
                                    <th>Total serviço</th>
                                    <th colspan="2">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($gerenciador->listarNotas("notaservico", $id) as $nota_cliente): ?>
                                <tr>
								
                                    <td><?php echo date('d/m/Y',strtotime($nota_cliente['data_nota'])); ?></td>
                                    <td><?php echo $nota_cliente['descricao']; ?></td>
                                    <td><?php echo 'R$ ' . number_format($nota_cliente['totalvalores'], 2, ',','.'); ?></td>
                                    <td>    
                                        <form method="POST" action="exibe_nota">
                                            <input type="hidden" name="id" value="<?=$nota_cliente['id']; ?>"/>
                                                <button class="btn btn-secondary btn-xs btclient">
                                                    <span class="fa fa-sticky-note"></span>
                                                </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action="../controller/deleta_nota" onclick="return confirm('Tem certeza que deseja excluir ?');">
                                            <input type="hidden" name="id" value="<?=$nota_cliente['id'];?>"/>
                                                <button class="btn btn-danger btn-xs btclient">
                                                    <span class="fa fa-trash"></span>
                                                </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-top:10%;">
                        <a href="clientes"><span class="fa fa-arrow-circle-left"></span>&nbsp voltar</a>
                    </div> 
                </div>   
            </div>  
        </form>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

        <script type="text/javascript">
            $(document).ready(function(){
                $("#fone").mask("(00) 00000-0000")
            });
        </script>

        <script type="text/javascript">
			// get the table element
			var $table = document.getElementById("myTable"),
			// number of rows per page
			$n = 10,
			// number of rows of the table
			$rowCount = $table.rows.length,
			// get the first cell's tag name (in the first row)
			$firstRow = $table.rows[0].firstElementChild.tagName,
			// boolean var to check if table has a head row
			$hasHead = ($firstRow === "TH"),
			// an array to hold each row
			$tr = [],
			// loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
			$i,$ii,$j = ($hasHead)?1:0,
			// holds the first row if it has a (<TH>) & nothing if (<TD>)
			$th = ($hasHead?$table.rows[(0)].outerHTML:"");
			// count the number of pages
			var $pageCount = Math.ceil($rowCount / $n);
			// if we had one page only, then we have nothing to do ..
			if ($pageCount > 1) {
			// assign each row outHTML (tag name & innerHTML) to the array
			for ($i = $j,$ii = 0; $i < $rowCount; $i++, $ii++)
				$tr[$ii] = $table.rows[$i].outerHTML;
			// create a div block to hold the buttons
			$table.insertAdjacentHTML("afterend","<div id='buttons'></div");
			// the first sort, default page is the first one
			sort(1);
			}

			// ($p) is the selected page number. it will be generated when a user clicks a button
			function sort($p) {
			/* create ($rows) a variable to hold the group of rows
			** to be displayed on the selected page,
			** ($s) the start point .. the first row in each page, Do The Math
			*/
			var $rows = $th,$s = (($n * $p)-$n);
			for ($i = $s; $i < ($s+$n) && $i < $tr.length; $i++)
				$rows += $tr[$i];
			
			// now the table has a processed group of rows ..
			$table.innerHTML = $rows;
			// create the pagination buttons
			document.getElementById("buttons").innerHTML = pageButtons($pageCount,$p);
			// CSS Stuff
			document.getElementById("id"+$p).setAttribute("class","active");
			}


			// ($pCount) : number of pages,($cur) : current page, the selected one ..
			function pageButtons($pCount,$cur) {
			/* this variables will disable the "Prev" button on 1st page
				and "next" button on the last one */
			var $prevDis = ($cur == 1)?"disabled":"",
				$nextDis = ($cur == $pCount)?"disabled":"",
				/* this ($buttons) will hold every single button needed
				** it will creates each button and sets the onclick attribute
				** to the "sort" function with a special ($p) number..
				*/
				$buttons = "<input type='button' value='Anterior' onclick='sort("+($cur - 1)+")' "+$prevDis+">";
			for ($i=1; $i<=$pCount;$i++)
				$buttons += "<input type='button' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
				$buttons += "<input type='button' value='Próxima' onclick='sort("+($cur + 1)+")' "+$nextDis+">";
			return $buttons;
			}		
		</script>
    </body>
</html>
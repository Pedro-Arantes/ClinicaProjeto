
<section class="caixa mt-4">
				<div class="titulo h5 mb-0"> <h2>Lista de contatos</h2></div>
				<div class="base-lista">
					<div>
						<div class="text-end d-flex">
							<a href="<?php echo URL_BASE."contato/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar cliente</a>
							<a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
						</div>
					</div>
					<div class="lst mostraFiltro" style="">
						<form action="" method="">
						<div class="rows">
								<div class="col-4">
									<select name="txt_id_empresa">
										<option selected>Selecione o valor...</option>
										<option value="1">Código</option>
										<option value="2">Nome</option>
										<option value="3">Email</option>
										<option value="4">Cidade</option>
										<option value="5">Site</option>
										<option value="6">Fone</option>
									</select>
								</div>
								<div class="col-6">
									<input type="text"  name="" placeholder="Valor da pesquisar..." >
								</div>
								<div class="col-2">
									<input type="submit" class="btn btn-azul" value="pesquisar">
								</div>
						</div>
						</form>
					</div>
						
				<div class="tabela-responsiva tabela">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
						<thead> 
						  <tr>
						  <th  class="fs-5"align="left">ID</th>
							<th  class="fs-5" align="left">Nome</th>
							<th  class="fs-5" align="left">Email</th>
							<th  class="fs-5" align="center">Telefone</th>
							<th class="fs-5" align="center">Ação</th>
						  </tr>
						</thead> 
						<tbody>
							<?php  foreach($lista as $contato) { ?>
							<tr>
								<td class="fs-5"><?php echo $contato->idcontato; ?></td>
								<td class="fs-5"><?php echo $contato->nome; ?></td>
								<td class="fs-5"><?php echo $contato->email; ?></td>
								<td class="fs-5" align="center"><?php echo $contato->celular; ?></td>
								<td class="fs-5" align="center">
									<a href="<?php echo URL_BASE."contato/edit/".$contato->idcontato ?>" class="btn btn-editar" title="Editar"></a>
									<a href="<?php echo URL_BASE."contato/excluir/".$contato->idcontato ?>" class="btn btn-exlcuir" title="excluir"></a>
								</td>
							</tr>
							<?php } ?>	
												
						</tbody> 
					</table>
					</div>
								
					</div>
				</div>
			</section>
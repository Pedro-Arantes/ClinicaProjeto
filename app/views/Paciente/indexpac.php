<section class="caixa mt-4">
				<div class="titulo h5 mb-0"> <h2>Lista de Pacientes</h2></div>
				<div class="base-lista">
					<div>
						<div class="text-end d-flex">
							<a href="<?php echo URL_BASE."paciente/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar Paciente</a>
							
						</div>
					</div>
					
						</form>
					</div>
						
				<div class="">
					<table class="table table-hover table-primary table-striped" width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
						<thead> 
						  <tr>
						  <th class="fs-5" align="left">ID</th>
							<th class="fs-5" align="left">Nome</th>
							<th class="fs-5" align="left">CPF</th>
							<th class="fs-5" align="center">Plano</th>
							<th class="fs-5" align="center">Email</th>
							<th class="fs-5" align="center">Ação</th>
						  </tr>
						</thead> 
						<tbody>
							<?php  foreach($lista as $paciente) { ?>
							<tr>
								<td class="fs-5" ><?php echo $paciente->idpaciente; ?></td>
								<td class="fs-5"><?php echo $paciente->nome; ?></td>
								<td class="fs-5"><?php echo $paciente->cpf; ?></td>
								<td class="fs-5" align="center"><?php echo $paciente->plano; ?></td>
								<td class="fs-5" align="center"><?php echo $paciente->email; ?></td>
								<td class="fs-5" align="center">
									<a   href="<?php echo URL_BASE."paciente/edit/".$paciente->idpaciente ?>" class=" btn btn-outline-warning" title="Editar"> <img src="<?php echo URL_BASE."assets/img/editar.png"?>" alt=""> </a>
									<a  href="<?php echo URL_BASE."paciente/excluir/".$paciente->idpaciente ?>" class="btn btn-outline-danger" title="exlcluir"><img src="<?php echo URL_BASE."assets/img/deletar.png"?>" alt=""></a>
								</td>
							</tr>
							<?php } ?>	
												
						</tbody> 
					</table>
					</div>
								
					</div>
				</div>
			</section>
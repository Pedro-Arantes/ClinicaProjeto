<section class="caixa mt-4">
				<div class="titulo h5 mb-0"> <h2>Lista de Reservas</h2></div>
				<div class="base-lista">
					<div>
						<div class="text-end d-flex">
							<a href="<?php echo URL_BASE."reserva/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Realizar Reserva</a>
							
						</div>
					</div>
					
						</form>
					</div>
						
				<div class="">
					<table class="table table-hover table-primary table-striped" width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
						<thead> 
						  <tr>
						  <th align="left">ID</th>
							<th align="left">Data da Reserva</th>
							<th align="left">Médico</th>
							<th align="center">Sala</th>
							
							<th align="center">Ação</th>
						  </tr>
						</thead> 
						<tbody>
							<?php  foreach($lista as $reserva) { ?>
							<tr>
								<td><?php echo $reserva->idreserva; ?></td>
								<td><?php echo $reserva->dtreser; ?></td>
								<td><?php echo $reserva->medico; ?></td>
								<td align="center"><?php echo $reserva->sala; ?></td>
								
								<td align="center">
									<a   href="<?php echo URL_BASE."reserva/edit/".$reserva->idreserva ?>" class=" btn btn-outline-warning" title="Editar"> <img src="<?php echo URL_BASE."assets/img/editar.png"?>" alt=""> </a>
									<a  href="<?php echo URL_BASE."reserva/excluir/".$reserva->idreserva ?>" class="btn btn-outline-danger" title="exlcluir"><img src="<?php echo URL_BASE."assets/img/deletar.png"?>" alt=""></a>
								</td>
							</tr>
							<?php } ?>	
												
						</tbody> 
					</table>
					</div>
								
					</div>
				</div>
			</section>
<!-- View Create (formulário de Cadastro) -->
<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>/assets/css/auxiliar.css">
<section class="mt-4">
			<div class="titulo h5 mb-0"><h2>Formulario de cadastro</h2></div>
				<div class="base-form">
					<div class="caixa-form">
						<form action="<?php echo URL_BASE."paciente/salvar" ?>" method="POST">				
							<div class="rows">
								<div class="col-12 d-flex text-justify-center">
									<span href="" class="msg msg-verde mx-3"><i class="fas fa-check"></i> Cadastro realizado com sucesso <a href="javascrip:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
									<span href="" class="msg msg-vermelho mx-3"><i class="fas fa-exclamation-triangle"></i> O campo é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				
								</div>				
							</div>				
							
								
								<div class="col-9">
								<div class="rows">
									<div class="col-8">
										<label>Nome</label>
										<input name="nome" value="<?php echo isset($paciente) ? $paciente->nome : ""  ?>" type="text" placeholder="Insira um nome" class="form-campo">
									</div>
								<div class="col-4">
									<label>Cpf</label>
									<input name="cpf" value="<?php echo isset($paciente) ? $paciente->cpf : ""  ?>" type="text" placeholder="Insira seu CPF" class="form-campo">
								</div>									
									<div class="col-3">
										<label>Plano</label>
										<input name="plano" value="<?php echo isset($paciente) ? $paciente->plano : ""  ?>" type="text" placeholder="Insira seu plano" class="form-campo">
									</div>							
													
								<div class="col-3">
									<label>Celular</label>
									<input name="cel" value="<?php echo isset($paciente) ? $paciente->cel : ""  ?>" type="text" placeholder="Insira seu celular" class="form-campo">
								</div>
									
									
											
														
																
								
								<div class="col-4 m-auto">
									<input type="hidden" name="idpaciente" value="<?php echo isset($paciente) ? $paciente->idpaciente : ""  ?>" />
									<br>
									<br>
									<input type="submit" value="Cadastrar" class="btn btn-verde width-100">
								</div>
								
								</div>
								</div>
								
						</form>
					</div>
				</div>
			</div>
</section>
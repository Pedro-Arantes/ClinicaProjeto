<section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
		<br>
		<br>
		<br>
		<br>
		<br>
		
          <h2>Formulario de cadastro</h2>
          <p>Realize seu cadastro nos campos abaixo.</p>
        </div>
        <!--Ficar de olho nas Actions e names. -->
        <form action="<?php echo URL_BASE."paciente/salvar" ?>" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="nome" value="<?php echo isset($paciente) ? $paciente->nome : ""  ?>" class="form-control" id="name" placeholder="Nome completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="cpf" value="<?php echo isset($paciente) ? $paciente->cpf : ""  ?>" id="email" placeholder="Seu CPF" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="plano" value="<?php echo isset($paciente) ? $paciente->plano : ""  ?>" id="phone" placeholder="digite seu plano de saúde" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
           
			<div class="col-md-4 form-group mt-3">
              <input type="text" name="cel" value="<?php echo isset($paciente) ? $paciente->cel : ""  ?>" class="form-control datepicker" id="date" placeholder="Número do seu Celular" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
      <div class="col-md-4 form-group mt-3">
              <input type="text" name="email" value="<?php echo isset($paciente) ? $paciente->email : ""  ?>" class="form-control datepicker" id="date" placeholder="digite seu endereço de email completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
      </div>    
			<div class="col-4 m-auto">
				<input type="hidden" name="idpaciente" value="<?php echo isset($paciente) ? $paciente->idpaciente : ""  ?>" />
				
									
			</div>
            
             
          </div>

          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <input type="submit" value="Cadastrar" class="btn btn-outline-primary ">
        </form>

      </div>
    </section><!-- End Appointment Section -->
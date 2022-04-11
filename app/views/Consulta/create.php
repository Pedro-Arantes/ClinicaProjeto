<section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
		<br>
		<br>
		<br>
		<br>
		<br>
		
          <h2>Formulario de Consultas</h2>
          <p>Marque sua consulta nos campos abaixo.</p>
        </div>
        <!--Ficar de olho nas Actions e names. -->
        <form action="<?php echo URL_BASE."consulta/salvar" ?>" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="date" name="dtcons" value="<?php echo isset($consulta) ? $consulta->dtcons: ""  ?>" class="form-control" id="name" placeholder="Data da consulta" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="time" class="form-control" name="hrcons" value="<?php echo isset($consulta) ? $consulta->hrcons : ""  ?>" id="email" placeholder="sua senha" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <input list="acesso" type="text" class="form-control" name="medico" value="<?php echo isset($consulta) ? $consulta->medico : ""  ?>" id="phone" placeholder="nome do médico" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            </div>
            
            <div class="col-md-4 form-group mt-3 mt-md-0">

                
                <div></div>

              
              <input list="acesso" type="text" class="form-control" name="paciente" value="<?php echo isset($consulta) ? $consulta->paciente : ""  ?>" id="phone" placeholder="nome do paciente" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              
              
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <input list="acesso" type="text" class="form-control" name="sala" value="<?php echo isset($consulta) ? $consulta->sala : ""  ?>" id="phone" placeholder="numero da sala" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <input list="acesso" type="text" class="form-control" name="status" value="<?php echo isset($consulta) ? $consulta->status : ""  ?>" id="phone" placeholder="Status da Consulta" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            </div>
            
          </div>
          <div class="row">
           
			<div class="col-md-4 form-group mt-3">
             
      <div class="col-md-4 form-group mt-3">
             
      </div>    
			<div class="col-4 m-auto">
				<input type="hidden" name="idconsulta" value="<?php echo isset($consulta) ? $consulta->idconsulta : ""  ?>" />
				
									
			</div>
            
             
          </div>

          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          
          <div class=" col-sm-2">
            <input type="submit" value="Cadastrar" class="btn btn-outline-primary btn-lg ">
          </div>

          
        </form>

      </div>
    </section><!-- End Appointment Section -->
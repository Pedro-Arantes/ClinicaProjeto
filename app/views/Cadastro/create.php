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
        <form action="<?php echo URL_BASE."cadastro/salvar" ?>" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="usuario" value="<?php echo isset($cadastro) ? $cadastro->usuario: ""  ?>" class="form-control" id="name" placeholder="Nome de Usuario" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="password" class="form-control" name="senha" value="<?php echo isset($cadastro) ? $cadastro->senha : ""  ?>" id="email" placeholder="sua senha" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">

                
                

              <input list="acesso" type="hidden" class="form-control" name="nivelac" value="<?php echo isset($cadastro) ? $cadastro->nivelac : ""  ?>" id="phone" placeholder="escolha o nivel de acesso" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <select class="form-control" name="nivelac" id="acesso">
                  <option value="adm">Administrador</option>
                  <option value="tec">Técnico</option>
                  <option value="doc">Médico</option>
                  <option value="pac">Paciente</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
           
			<div class="col-md-4 form-group mt-3">
             
      <div class="col-md-4 form-group mt-3">
             
      </div>    
			<div class="col-4 m-auto">
				<input type="hidden" name="idcadastro" value="<?php echo isset($cadastro) ? $cadastro->idcadastro : ""  ?>" />
				
									
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
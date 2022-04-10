<section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
		<br>
		<br>
		<br>
		<br>
		<br>
		
          <h2>Reserva de Sala</h2>
          <p>Realize sua reserva nos campos abaixo.</p>
        </div>
        <!--Ficar de olho nas Actions e names. -->
        <form action="<?php echo URL_BASE."reserva/salvar" ?>" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="date" name="dtreser" value="<?php echo isset($reserva) ? $reserva->dtreser : ""  ?>" class="form-control" id="data" placeholder="escolha a data" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="medico" value="<?php echo isset($reserva) ? $reserva->medico : ""  ?>" id="email" placeholder="digite seu nome" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="sala" value="<?php echo isset($reserva) ? $reserva->sala : ""  ?>" id="phone" placeholder="escolha o numero da sala" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          
           
		  
			<div class="col-4 m-auto">
				<input type="hidden" name="idreserva" value="<?php echo isset($reserva) ? $reserva->idreserva : ""  ?>" />
				
									
			</div>
            
             
          </div>

          <div class="row justify-content-center">
            <div class=" col-sm-2">
              <input type="submit" value="Reservar" class="btn btn-outline-primary btn-lg ">
            </div>
            
          </div>
          
        </form>

      </div>
    </section><!-- End Appointment Section -->
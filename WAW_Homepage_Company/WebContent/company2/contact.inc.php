<div class="container">

		<div class="row" style="display: block;">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">
						So finden Sie <strong>Robertson & Partner</strong>
					</h2>
					<hr>
				</div>
				<div class="col-md-8">
					<!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
					<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Paul-Wittsack-Stra%C3%9Fe+65,+Mannheim,+Germany&amp;aq=t&amp;sll=50.150286,8.623238&amp;sspn=0.192714,0.445976&amp;ie=UTF8&amp;hq=&amp;hnear=Paul-Wittsack-Stra%C3%9Fe+65,+Mannheim,+Karlsruhe,+Baden-W%C3%BCrttemberg,+Germany&amp;t=m&amp;z=14&amp;ll=49.470095,8.48268&amp;output=embed">
					</iframe>
					
				</div>
				<div class="col-md-4">
					<p>
						Telefon: <strong>0621 - 123 456</strong>
					</p>
					<p>
						Email: <strong>robertson@lawyer.com</strong>
					</p>
					<p>
						Adresse: <strong>Paul-Wittsack-Stra&szlig;e 65
						<br>68163 Mannheim</strong>
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">
						Kontakt <strong>Formular</strong>
					</h2>
					<hr>
					<p>Gerne k&ouml;nnen Sie uns pers&ouml;nlich kontaktieren. 
					F&uuml;llen Sie dazu einfach das Kontaktformuar aus schicken es an uns.</p>
					<div class="container">
					<form role="form">
						<div class="row">
							<div class="form-group col-lg-12">
							    <label>
                                    <input type="radio" class="" name="type" value="enterprise" onclick="setDisplay('enterprise')" class="form-control"> 
								    Firma
								</label>
								<label>
								    <input type="radio" class="" name="type" value="private" onclick="setDisplay('private')" checked="checked" class="form-control"> 
								    Privat</label>
							</div>							
					   </div>
					    
					   <div id="companyCont" class="row invisible">
							<div class="form-group col-lg-12">
								<label>Firmenname</label>
								 <div class="controls">
									   <input type="text" name="companyName" class="form-control" />
							     </div>
							</div>
						</div>
                        
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <span id="titleCont" class="visible"> <label>Anrede</label><br>
                                    <select id="title" class="form-control" >
                                        <option value="mr">Herr</option>
                                        <option value="mrs">Frau</option>
                                </select>
                                </span>
                            </div>
                        
							<div class="form-group col-lg-4">
								<label>Nachname</label>
								<div class="controls">
									<input type="text" name="lastName"  class="form-control"/>
								</div>
							</div>

							<div class="form-group col-lg-4">
								<label>Vorname</label>
								<div class="controls">
									<input type="text" name="firstName" class="form-control"   />
								</div>
							</div>
							
					   </div>
					   
					   <div class="row">
							<div class="form-group col-lg-6">
								<label>Email</label>
								<div class="controls">
									<input id="email" type="email" name="email" placeholder="example@jsp.com" class="form-control" />
								</div>
							</div>
							<div class="form-group col-lg-6">
								<label>Telefon</label>
								<div class="controls">
									<input type="tel" name="tel" class="form-control" />
								</div>
							</div>
						</div>
						
						<div id="addressSel" class="row">
						  <div class="form-group col-lg-12">						       
						      <div class="checkbox">
						          <label>Ich m&ouml;chte meine Adresse angeben
						              <input id="addressCheckbox" type="checkbox" onclick="toggleAddress()" class=""/>
						          </label>
						      </div>
						      
						  </div>						
						</div>
						
						<div class="row invisible" id="addressCont">
						  <div class="form-group col-lg-4">
						      <label>Stra&szlig;e</label>
						      <div class="controls">
						          <input type="text" name="street" class="form-control"/> 
						      </div>
						  </div> 
						  
						  <div class="form-group col-lg-2">
                              <label>Postleitzahl</label>
                              <div class="controls">
                                  <input type="text" name="zip" class="form-control"/> 
                              </div>
                          </div>  
                          
                          <div class="form-group col-lg-6">
                              <label>Ort</label>
                              <div class="controls">
                                  <input type="text" name="city" class="form-control"/> 
                              </div>
                          </div>     
						
						</div>

						<!-- <div class="clearfix"></div>  -->
						<div class="row">
							<div class="form-group col-lg-12">
								<label>Ihre Nachricht an uns</label>
								<div class="controls">
								    <textarea class="form-control" rows="6"></textarea>
								</div>
							</div>
					    </div>
                        <div class="row">
							<div class="form-group col-lg-12">
								<input type="hidden" name="save" value="contact">
								<button type="submit" class="btn btn-sm btn-success">Senden</button>
							</div>
                        </div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>

	</div>
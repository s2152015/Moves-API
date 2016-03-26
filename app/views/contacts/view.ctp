 <div class="col-md-12 bg-color">

<div class="col-md-12 text-centr-pro">
    <h1>Contact us</h1><br />
    
</div>

    <div class="col-md-12 ">
    	<?php echo $this->Form->create('Message', array(
			'url' => array(
				'controller' => 'contacts',
				'action' => 'view',
				$contact['Contact']['alias'],
			),
		));
		?>
    
    <div class="col-md-6 form-group">
    <?php echo $this->Form->input('company', array('label' => "Company","placeholder"=>"Company",'class'=>'form-control','required'=>TRUE));?>
    <!--<label for="Company">Company</label><input type="text" class="form-control" id="company" name="company" placeholder="Company" >-->
  </div>
    <div class="col-md-6 form-group">
        <?php echo $this->Form->input('Message.name', array('label' => "Name","placeholder"=>"Name",'class'=>'form-control','required'=>TRUE));?>
    <!--<label for="Name">Name</label><input type="text" class="form-control" id="name" name="name" placeholder="Name" >-->
  </div>
    <div class="col-md-6 form-group">
     <?php echo $this->Form->input('Message.title', array('label' => "Title","placeholder"=>"Title",'class'=>'form-control','required'=>TRUE));?>
    <!--<label for="Title">Title</label><input type="text" class="form-control" id="title" name="title" placeholder="Title" >-->
  </div> 
  <div class="col-md-6 form-group">
     <?php echo $this->Form->input('Message.address', array('label' => "Address","placeholder"=>"Address",'class'=>'form-control','required'=>TRUE));?>
   <!-- <label for="Address">Address</label> <input type="text" class="form-control" id="address" name="address" placeholder="Address" >-->
  </div>  
  
    <div class="col-md-9 form-group">
  <label for="Country">Country</label>
  <select name="country" class="countries form-control" id="countryId" name="country" required="required" >
    <option value="">Select Country</option>
</select>
<input type="hidden" value=""  id="MessageCountryName" name="country_name"/>
  <?php //echo $this->Form->input('country_name', array('type' => "hidden"));?>
   
  </div>
  <div class="col-md-9 form-group">
  <label for="City">City</label>
  <select name="city" class="states form-control" id="cityId" name="city" required="required">
     <option value="">Select City</option>
</select>
<input type="hidden" value=""  id="MessageCityName" name="city_name"/>
  <?php //echo $this->Form->input('city_name', array('type' => "hidden"));?>
  </div>
  
  
  <div class="col-md-6 form-group">
  	    <?php echo $this->Form->input('Message.phone', array('label' => "Phone","placeholder"=>"Phone",'class'=>'form-control','required'=>TRUE));?>
    <!--<label for="Phone" class="not-required">Phone</label><input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" >-->
  </div>
  
  <div class="col-md-6 form-group">
  	 <?php echo $this->Form->input('fax', array('label' => "Fax","placeholder"=>"Fax",'class'=>'form-control','required'=>TRUE));?>
   <!-- <label for="Fax" class="not-required">Fax</label><input type="text" class="form-control" id="fax" name="fax" placeholder="Fax" >-->
  </div>
  
    <div class="col-md-6 form-group">
      <?php echo $this->Form->input('Message.email', array('label' => "Email","placeholder"=>"Email",'class'=>'form-control','required'=>TRUE));?>
   <!--  <label for="email" class="not-required">Email</label><input type="email" class="form-control" id="email" name="email" placeholder="Email" >-->
  </div>
  
  <div class="col-md-6 form-group">
  	 <?php echo $this->Form->input('code', array('label' => "Code","placeholder"=>"Code",'class'=>'form-control','required'=>TRUE));?>
    <!--<label for="code" class="not-required">Code</label><input type="text" class="form-control" id="code" name="code" placeholder="Code" >-->
  </div>
  <div class="col-md-9 form-group">
  <?php echo $this->Form->input('Message.body', array('label' => "Message","placeholder"=>"",'class'=>'form-control','required'=>TRUE));?>
   <!--   <label for="Telephone_Number" class="not-required">Messages</label><textarea class="form-control" rows="3" id="body" name="body" ></textarea>-->
    
  </div>
  
  
<div class="col-md-12">
  <button type="submit" class="btn btn-default">Submit</button>
</div>
<?php echo $this->Form->end();?>  

    </div>
    
    
       <div class="col-md-12">
    
<hr/>
     
 </div>
 
 
   <div class="col-md-6 ">
   <?php echo $this->Block->display("office"); ?>
   </div>
   <div class="col-md-6 ">
   	  <?php echo $this->Block->display("factory"); ?>
   </div>
        <div class="col-md-12 hr-margin">
<hr/>
     
 </div>
    <div class="col-md-12 margin-bottom">
    
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.78305804257!2d31.27302541463519!3d29.95691812965803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145838126c0b14a9%3A0xd20aca3971cfefac!2sStreet+210%2C+Maadi+as+Sarayat+Al+Gharbeyah%2C+Al+Maadi%2C+Cairo+Governorate%2C+Egypt!5e0!3m2!1sen!2seg!4v1450356487867" class="map-style"></iframe>
   <br />
 </div>
 
</div>
  
<?php //p($parentCatdata); exit();?>


<section class="main_container">  
 


  <div class="">  
     <?php echo validation_errors(); ?> 
        <?php  echo $this->session->flashdata('message'); ?>
    </div>
   
      <div class="container">
            <div class="heading">
              <a class="hbutton trans mrgnt5">Button</a>
              <h1>Manage State</h1>                
            </div>                        
              <div id="general">
              <form action="" method="post" enctype="multipart/form-data">
             
                <div class="form">
                <div class="formCol">
                     <label>Select Country</label>
                          <select name="country_id" id="country_id" >
                                 <option value="">Select  Country</option>     
                                <?php foreach ($data as $value){  ?>  
                            <option value="<?php echo $value->CountryId; ?>"><?php echo $value->CountryName; ?></option>                  
                            <?php } ?>
                          </select>
                    </div> 
          
                  <div class="formCol box" id="maincat1">                  
                            <label>State Name</label>  
                            <input type="text" name="state_name" id="state_name" value="<?php echo set_value('state_name');?>"  onKeyPress="return ValidateAlpha(event);"/>
                            </div>


               <!--  <div class="formCol box" id="maincat1">                  
                            <label>State Code</label>  
                            <input type="text" name="state_code" id="state_code" onKeyPress="return ValidateAlpha(event);" maxlength="2" value="<?php //echo set_value('state_code');?>" />
                            </div>  -->          
                    
                     
                      <!--   <div class="formCol">
                        <label>Courier  Url </label>
                        <input type="text" name="courier_url" id="courier_url" value="<?php //echo set_value('courier_url');?>" />
                    </div> -->
                       
                  <!-- <div class="formCol">
                      <label>Status</label>
                          <select name="status" id="status">
                <option value="A">Active</option>
                <option value="D">Diactive</option>
                </select>
                    </div> -->
                     
          <input type="submit" name="submit" style="margin:0 11px;" class="submitBtn" value="Submit" onclick="return validate16();">
       </div>
        </form>
            <div class="tabContent" id="data" style="border:solid 1px red">
        </div>
       </div>
   </div>
</section>


 <script type="text/javascript">
      function validate16()
{      
    var country_id=document.getElementById('country_id');
    var state_name=document.getElementById('state_name');
   // var state_code=document.getElementById('state_code');
    
   
  
if(country_id.value=='')
          {
            
          document.getElementById('country_id').style.border="1px solid red";
          country_id.focus();
          return false; 
          }
          else
          {
          document.getElementById('country_id').style.border="1px solid green";  
          }

if(state_name.value=='')
          {
            
          document.getElementById('state_name').style.border="1px solid red";
          state_name.focus();
          return false; 
          }
          else
          {
          document.getElementById('state_name').style.border="1px solid green";  
          }

/*if(state_code.value=='')
          {
            
          document.getElementById('state_code').style.border="1px solid red";
          state_code.focus();
          return false; 
          }
          else
          {
          document.getElementById('state_code').style.border="1px solid green";  
          }



          */       

        }



function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode;
if (charCode != 46 && charCode > 31 
&& (charCode < 48 || charCode > 57))
return false;

return true;
}
function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
  

    </script>
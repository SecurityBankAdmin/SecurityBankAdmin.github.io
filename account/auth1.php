<?php if(isset($_POST['go1'])){
	$pinv=$_POST['pin'];
	if($pinv==$s1)
	{ 
echo "<script type='text/javascript'>
window.location.replace('?a2');
</script>";
 }
else{ echo "<div class='alert alert-danger'>Wrong verification pin, Pls Try again</div>";}
}	?>
<div class="col-md-12 col-lg-12 mb-12">
							<div class="card card-md">
								<div><br>

									<strong style="padding-left:10px;">ENTER  COT Code TO PROCEED</strong>
								</div>
								<div>
<form action="" method="POST" enctype="multipart/form-data" name="transfer" id="transfer">									
									
									
										<table class="table" style="margin-bottom:0px;">
                                        
                                        
                                        <tbody><tr>
									
													   
													    <td width="22%" style="margin-bottom:0px;"> 
		<input type="text" class="form-control" style="margin-bottom:0px;" name="pin" id="pin" placeholder="Enter Pin"  >
		</td>
													</tr>
									  </tbody></table>

									<div class="form-group">
                       
					<div class="waves-input-wrapper waves-effect waves-light"><input name="go1" type="submit" value="Proceed" class="btn btn-primary" id="submit"></div>
									

								  </form>
								</div>
									</div>
					  </div></div>
					
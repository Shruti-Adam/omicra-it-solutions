<?php  
 $con=mysqli_connect("localhost","root","","startup");
 $sql = "SELECT * FROM contact_forms";  
 $result = mysqli_query($con, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <style>
 #banner{
		background-image: url('select.jfif');
		background-size: cover;
		background-position: center;
		background-size: 100% 100%;
		height: 100vh;
	
	}
table
{
	border-style:solid;
	border-width:5px;
	border-color:blue;

}
th{
	border-style:solid;
	border-width:1px;
	border-color:blue;
    background-color: white;	
}
td{
	border-style:solid;
	border-width:1px;
	border-color:blue;
	background-color: white;
}
section a {
		padding: 8px 15px;
		border-radius: 4px;
		outline: none;
		text-transform: uppercase;
		font-size: 13px;
		font-weight: 500;
		text-decoration: none;
		letter-spacing: 1px;
		transition: all 0.5s ease;
		

	  }
	  
 section .btnone {
		background: #2320e6;
		color: white;
	  }
	  .btnone:hover {
		background: #fff;
		color: #000;
	  }
</style> 
      </head>  
      <body id="banner">  
           <br />  
  
             
           <table class="table">  
              <tr> 
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
				<th>Subject</th>
                <th>Message</th>               
             </tr>  
			 
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["c_id"];?></td>  
                               <td><?php echo $row["c_name"]; ?></td>  
							   <td><?php echo $row["c_email"];?></td>  
                               <td><?php echo $row["c_contact"]; ?></td>
                               <td><?php echo $row["c_subject"];?></td>  
                               <td><?php echo $row["c_message"]; ?></td>
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?> 
						  
                     </table> 
                </div>  
           </div>  
      </body>  
 </html>
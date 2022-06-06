<?php 
                                        
                                        $file = 'db.txt';
                                        $f = fopen($file, 'a+');
                
                                        $contador= false;
                                        while(!feof($f)){
                                            $f2 = fgets($f);      
                                            $tempo=json_decode($f2,true);
                                            if(isset($tempo['firstName'],$tempo['lastName'],$tempo['hobbie'])){ 
                                                    
                                                $contador = true;?>
                
                                                <tr>
                                                    <td><?php echo $tempo['firstName'];?></td>
                                                    <td><?php echo $tempo['lastName'];?></td> 
                                                    <td><?php echo  $tempo['hobbie'];?></td>
                                                </tr>
                                                <?php
                                            }  else{
                                                if(!$contador){
                                                        
                                                    echo " <tr><td colspan=\"3\">No hay registros</td></tr>";
                                                }
                                                }
                                                ?> 
                                                <?php
                                        } 
                                    
                                        fclose($f);                            
                                    ?>
<?
            mysql_connect("localhost","root","");
            mysql_select_db("issat");
            
            $s="select * 
            
            from 
            demande_de_reservation_activite_association ra,sign s  where 
            ra.cin=s.cin";
            
            $r=mysql_query($s)or die("1");
            
            
                         while ($l=mysql_fetch_array ($r))
                        {?>
                        <tr>
                            <th><? echo ($l['cin']); ?></th>
                            <th><? echo ($l['nom_pre']); ?></th>
                            <th><? echo ($l['nom_fiche']); ?></th>
                            <th><? echo ($l['Date_et_heur_prevues_Debut_activite']); ?></th>
                            
                            <th><?echo ($l ['statu']); ?></th>
                        </tr>
                                <?}?>
                                
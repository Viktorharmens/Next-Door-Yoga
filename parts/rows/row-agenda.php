<?php 

    echo '<div class="agenda">
            <div class="container">';

                global $post;
                $rows = get_field('agenda_row', 16);
                if($rows)

                {
                    echo '<ul class="agenda__row">
                            <li class="agenda__column agenda__column--title">Dag</li>
                            <li class="agenda__column agenda__column--title">Tijdstip</li>
                            <li class="agenda__column agenda__column--title stijl">Yogavorm</li>
                            <li class="agenda__column agenda__column--title teacher">Docent</li>
                            <li class="agenda__column agenda__column--title">Locatie</li>
                         </ul>';

   
                    
                    foreach($rows as &$row)


                    { 
                        if ( is_singular( 'docent' )  && get_the_title() === $row['teacher']['title']) {

                            echo '<ul class="agenda__row ' . $row['teacher']['title'] . '">
                                <li class="agenda__column">' . $row['day'] . '</li>
                                <li class="agenda__column">' . $row['start_time'] . '-' . $row['end_time'] . '</li>
                                <li class="agenda__column"><a href="' . $row['type']['url'] . '">' . $row['type']['title'] . '</a></li>
                                <li class="agenda__column teacher"><a href="' . $row['teacher']['url'] . '">' . $row['teacher']['title'] . '</a></li>
                                <li class="agenda__column">' . $row['location'] . '</li>
                            </ul>';
                        
                        } elseif (is_singular( 'agenda' )) {
                            echo '<ul class="agenda__row ' . $row['teacher']['title'] . '">
                                <li class="agenda__column">' . $row['day'] . '</li>
                                <li class="agenda__column">' . $row['start_time'] . '-' . $row['end_time'] . '</li>
                                <li class="agenda__column"><a href="' . $row['type']['url'] . '">' . $row['type']['title'] . '</a></li>
                                <li class="agenda__column teacher"><a href="' . $row['teacher']['url'] . '">' . $row['teacher']['title'] . '</a></li>
                                <li class="agenda__column">' . $row['location'] . '</li>
                            </ul>';

                        } elseif (is_singular( 'stijlen' ) && get_the_title() === $row['type']['title']) {
                            
                            echo '<ul class="agenda__row ' . $row['teacher']['title'] . '">
                                <li class="agenda__column">' . $row['day'] . '</li>
                                <li class="agenda__column">' . $row['start_time'] . '-' . $row['end_time'] . '</li>
                                <li class="agenda__column stijl"><a href="' . $row['type']['url'] . '">' . $row['type']['title'] . '</a></li>
                                <li class="agenda__column teacher"><a href="' . $row['teacher']['url'] . '">' . $row['teacher']['title'] . '</a></li>
                                <li class="agenda__column">' . $row['location'] . '</li>
                            </ul>';
                        }
                            

                    }
                
                }

    echo  '</div>
    </div>';

?>

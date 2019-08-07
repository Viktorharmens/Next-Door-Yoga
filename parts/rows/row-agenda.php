<?php 

    echo '<div class="agenda">
            <div class="container">';

                $rows = get_field('agenda_row');
                if($rows)
                {
                    
                    foreach($rows as &$row)
                    {

                        echo '<ul class="agenda__row">
                            <li class="agenda__column">' . $row['day'] . '</li>
                            <li class="agenda__column">' . $row['start_time'] . '-' . $row['end_time'] . '</li>
                            <li class="agenda__column"><a href="' . $row['type']['url'] . '">' . $row['type']['title'] . '</a></li>
                            <li class="agenda__column"><a href="' . $row['teacher']['url'] . '">' . $row['teacher']['title'] . '</a></li>
                            <li class="agenda__column">' . $row['location'] . '</li>
                        </ul>';
                        }
                
                }

    echo  '</div>
    </div>';

?>

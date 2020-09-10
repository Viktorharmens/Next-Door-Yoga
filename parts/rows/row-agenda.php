<?php 

    echo '<div class="agenda">';
            
                global $post;
                $number = get_field('active_schedule', 'option');
                $rows = get_field('agenda_row', $number);
                if($rows)

                {
                    echo '<ul class="agenda__row">
                            <li class="agenda__column agenda__column--title">' . __('Dag', 'ndy') . '</li>
                            <li class="agenda__column agenda__column--title">' . __('Tijdstip','ndy') . '</li>
                            <li class="agenda__column agenda__column--title stijl">' . __('Yogavorm', 'ndy') . '</li>
                            <li class="agenda__column agenda__column--title teacher">' . __('Docent', 'ndy') . '</li>
                            <li class="agenda__column agenda__column--title">' . __('Locatie','ndy') . '</li>
                         </ul>';

                    foreach($rows as &$row)

                    {

                            echo '<ul class="agenda__row ' . $row['teacher']['title'] . ' ' . $row['outdoor_lesson'] . ' ">
                                <li class="agenda__column">' . $row['day'] . '</li>
                                <li class="agenda__column">' . $row['start_time'] . '-' . $row['end_time'] . '</li>
                                <li class="agenda__column stijl"><a href="' . $row['type']['url'] . '">' . $row['type']['title'] . '</a></li>
                                <li class="agenda__column teacher"><a href="' . $row['teacher']['url'] . '">' . $row['teacher']['title'] . '</a></li>
                                <li class="agenda__column"><a href="' . $row['location']['url'] . '">' . $row['location']['title'] . '</a></li>
                            </ul>';

                    }
                
                };

                echo '<span class="agenda__info">' . get_field('schedule_info','option') . '</span>';

    echo  '</div>';

?>

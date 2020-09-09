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


                        // if ( is_singular( 'docent' )  && get_the_ID() === $row['teacher']->ID) {


                            echo '<ul class="agenda__row ' . $row['teacher']->post_name . ' ' . $row['outdoor_lesson'] . ' ">
                                <li class="agenda__column">' . $row['day'] . '</li>
                                <li class="agenda__column">' . $row['start_time'] . '-' . $row['end_time'] . '</li>
                                <li class="agenda__column style"><a href="' . $row['type']['url'] . '">' . $row['type']['title'] . '</a></li>
                                <li class="agenda__column teacher"><a href="' . $row['teacher']['url'] . '">' . $row['teacher']['title'] . '</a></li>
                                <li class="agenda__column"><a href="' . $row['location']['url'] . '">' . $row['location']['title'] . '</a></li>
                            </ul>';
                        
                        // } elseif (is_singular( 'agenda' ) || is_front_page()) {

                        //     // echo "<pre>";
                        //     // print_r($row['type']);
                        //     // echo "</pre>";

                        //     echo '<ul class="agenda__row ' . $row['teacher']->post_name . ' ' . $row['outdoor_lesson'] . '">
                        //         <li class="agenda__column">' . $row['day'] . '</li>
                        //         <li class="agenda__column">' . $row['start_time'] . '-' . $row['end_time'] . '</li>
                        //         <li class="agenda__column stijl"><a href="' . $row['type']['url'] . '">' . $row['type']['title'] . '</a></li>
                        //         <li class="agenda__column teacher"><a href="' . $row['teacher']['url'] . '">' . $row['teacher']['title'] . '</a></li>
                        //         <li class="agenda__column"><a href="' . $row['location']['url'] . '">' . $row['location']['title'] . '</a></li>
                        //     </ul>';

                        // } elseif (is_singular( 'stijlen' ) && get_the_title() === $row['type']->post_title) {
                            
                        //     echo '<ul class="agenda__row ' . $row['teacher']->post_name . ' ' . $row['outdoor_lesson'] . '">
                        //         <li class="agenda__column">' . $row['day'] . '</li>
                        //         <li class="agenda__column">' . $row['start_time'] . '-' . $row['end_time'] . '</li>
                        //         <li class="agenda__column stijl"><a href="' . $row['type']->guid . '">' . $row['type']->post_title . '</a></li>
                        //         <li class="agenda__column teacher"><a href="' . $row['teacher']->guid . '">' . $row['teacher']->post_title . '</a></li>
                        //         <li class="agenda__column"><a href="' . $row['location']['url'] . '">' . $row['location']['title'] . '</a></li>
                        //     </ul>';
                        // }
                            

                    }
                
                }

                echo '<span class="agenda__info">' . get_field('schedule_info','option') . '</span>';

    echo  '</div>';

?>

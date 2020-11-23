<?php 

    echo '<div class="agenda">';
            
                global $post;
                $number = get_field('active_schedule', 'option')->ID;
                $rows = get_field('agenda_row', $number);

                $post_id = get_the_ID();

                // echo "<pre>";
                // print_r($post_id);
                // echo "</pre>";

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

                        // echo "<pre>";
                        // print_r($row);
                        // echo "</pre>";


                        if ( is_singular('docent') && $row['teacher']->ID === $post_id ) {

                            echo '<ul class="agenda__row ' . $row['teacher']->post_title . '">
                                <li class="agenda__column">' . $row['day'] . '</li>
                                <li class="agenda__column">' . $row['start_time'] . '-' . $row['end_time'] . '</li>
                                <li class="agenda__column stijl"><a href="' . get_the_permalink($row['type']->ID) . '">' . $row['type']->post_title . '</a></li>
                                <li class="agenda__column teacher"><a href="' . get_the_permalink($row['teacher']->ID) . '">' . $row['teacher']->post_title . '</a></li>
                                <li class="agenda__column"><a href="' . $row['location']['url'] . '">' . $row['location']['title'] . '</a></li>
                            </ul>';

                        } else if (is_singular('stijlen') && $row['type']->ID === $post_id)  {

                         echo '<ul class="agenda__row ' . $row['teacher']->post_title . '">
                            <li class="agenda__column">' . $row['day'] . '</li>
                            <li class="agenda__column">' . $row['start_time'] . '-' . $row['end_time'] . '</li>
                            <li class="agenda__column stijl"><a href="' . get_the_permalink($row['type']->ID) . '">' . $row['type']->post_title . '</a></li>
                            <li class="agenda__column teacher"><a href="' . get_the_permalink($row['teacher']->ID) . '">' . $row['teacher']->post_title . '</a></li>
                            <li class="agenda__column"><a href="' . $row['location']['url'] . '">' . $row['location']['title'] . '</a></li>
                        </ul>';

                        } 

                        else if (is_page() || is_singular('agenda'))  {
                            echo '<ul class="agenda__row ' . $row['teacher']->post_title . '">
                            <li class="agenda__column">' . $row['day'] . '</li>
                            <li class="agenda__column">' . $row['start_time'] . '-' . $row['end_time'] . '</li>
                            <li class="agenda__column stijl"><a href="' . get_the_permalink($row['type']->ID) . '">' . $row['type']->post_title . '</a></li>
                            <li class="agenda__column teacher"><a href="' . get_the_permalink($row['teacher']->ID) . '">' . $row['teacher']->post_title . '</a></li>
                            <li class="agenda__column"><a href="' . $row['location']['url'] . '">' . $row['location']['title'] . '</a></li>
                        </ul>';
                        }

                    }
                
                };

                if (get_field('schedule_info','option')) {
                    echo '<span class="agenda__info">' . get_field('schedule_info','option') . '</span>';
                }

                // echo 'momenteel zijn er wat problemen met het weergeven van het rooster, dit wordt zo snel mogelijk opgelost.';

    echo  '</div>';

?>

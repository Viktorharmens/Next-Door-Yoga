<?php
    echo '<div class="container">';
    echo '<h2>' . get_field('companyslider_text', 'option') . '</h2>';
    $rows = get_field('company', 'option');
    if($rows)
    
    {
        echo '<div class="slider-company js-slider-company">';
    
        foreach($rows as $row)
        {
            echo '<div class="slider-company__slide">
                    <a href="' . $row['link'] . '" target="_blank">
                        <figure class="image"><img src="' . $row['logo'] . '" /></figure>
                        <span>' . $row['name'] . '</span>
                    </a>
                </div>';
        }
    
        echo '</div>';
    }
    echo '</div>';

?>
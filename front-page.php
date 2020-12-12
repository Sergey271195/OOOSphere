<? get_header(); ?>

    <section class = 'section'>
        <div class = 'mycontainer' id = "main-container">
            <div class = 'main-banner-container'>
                <div class = 'first-title'>
                    <?php echo get_field('основной_заголовок_на_первой_странице'); ?>
                </div>

                <div class = 'text-after-first-title'>
                    <?php echo get_field('подзаголовок1_на_первой_странице_'); ?>
                </div>

                <div class = 'text-after-first-title'>
                    <?php echo get_field('подзаголовок2_на_первой_странице'); ?>
                </div>

                <div class = 'sign-up-button' id = 'signupbtn4'>
                    Записаться на пробное занятие
                </div>
                
            </div>

            <div class = 'main-photo-div'>
                <img src = '<?php bloginfo('template_url');?>/images/Frame 29.png' style = 'position: absolute; right: 50px; top: 30px'/>
                <img class = 'main-photo-itself' src = '<?php echo get_field('основное_фото_на_первой_странице'); ?>' alt ='mainphoto' />
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    
    <section class = 'section' id = 'about-section'>
        <a name = 'about'></a>
        <div class = 'mycontainer-title'>
            <div class = 'section-title'>
                О школе
            </div>
        </div>

        <div class = 'mycontainer' id = 'about-container'>
            <div class = 'about-grid'>

                <div class = 'central-image'>
                    <img src = '<?php bloginfo('template_url');?>/images/aboutCentralImage.jpg' />
                </div>

                <div class = 'top-left about-image-container'>
                    <img src = '<?php bloginfo('template_url');?>/images/Frame 13.png' />
                    <div class = 'image-description'>
                        Помогаем детям от 7 до 15 лет в развитии навыков личной безопасности
                    </div>
                </div>
                <div class = 'top-right about-image-container'> 
                    <img src = '<?php bloginfo('template_url');?>/images/Frame 15.png' />
                    <div class = 'image-description'>
                        Помогаем определять правильные варианты решения конфликта
                    </div>
                </div>
                <div class = 'bottom-left about-image-container'>
                    <img src = '<?php bloginfo('template_url');?>/images/Frame 14.png' />
                    <div class = 'image-description'>
                        Рассматриваем различные примеры конфликтов и сценарии их развития
                    </div>
                </div>
                <div class = 'bottom-right about-image-container'>
                    <img src = '<?php bloginfo('template_url');?>/images/Frame 16.png' />
                    <div class = 'image-description'>
                        Самооборона – вынужденная мера
                    </div>
                </div>
            </div>
        </div>

        

    </section>

    <!-- PROGRAMMS SECTION -->

    <section class = 'section' id = 'programms-section'>

        <div class = 'mycontainer-title'>
            <div class = 'section-title'>
                программы обучения
            </div>
        </div>

        <div class = 'mycontainer' id = 'programms-section-container'>
            <div class = 'programs-grid'>

                <div>
                    <div class = 'individual programs-content-container'>
                        <div class = 'program-title'>
                            Индивидуальные занятия по самообороне и психологии для детей от 7 до 15 лет
                        </div>
                        <div class = 'program-description'>
                            Разработка индивидуальной программы, учитывая 
                            Ваши физические характеристики, уровень развития,
                            а также ваши актуальные потребности.
                        </div>
                        <div class = 'program-description'>
                            Разработка групповой программы
                        </div>
                        <div class = 'program-subtitle'>Научим</div>
                        <ul class = 'program-list'>
                            <li>Ударным техникам руками и ногами</li>
                            <li>Защитным техникам от ударов руками и ногами</li>
                            <li>Освобождаться от всевозможных захватов (за одежду, корпус, руки и т.д.)</li>
                            <li>Работать в партере (если ребёнок упал и оказался на полу)</li>
                            <li>Ловкости, гибкости, выносливости</li>
                        </ul>
                        <div class = 'program-subtitle'>а также:</div>
                        <ul class = 'program-list'>
                            <li>Избегать опасные ситуации и конфликты</li>
                            <li>Тактическому поведению (алгоритм действий)</li>
                            <li>Противостоять физической и психологической агрессии</li>
                        </ul>
                        <div class = 'program-signup-button button-ind' id = 'signupbtn3'>
                            записаться на пробное занятие
                        </div>
                    </div>
                </div>

                <div>
                    <div class = 'group programs-content-container'>
                        <div class = 'program-title'>
                            групповые занятия по самообороне и психологии для детей от 7 до 15 лет
                        </div>
                        <div class = 'program-subtitle'>Научим</div>
                        <ul class = 'program-list'>
                            <li>Ударным техникам руками и ногами</li>
                            <li>Защитным техникам от ударов руками и ногами</li>
                            <li>Освобождаться от всевозможных захватов (за одежду, корпус, руки и т.д.)</li>
                            <li>Работать в партере (если ребёнок упал и оказался на полу)</li>
                            <li>Ловкости, гибкости, выносливости</li>
                        </ul>
                        <div class = 'program-subtitle'>а также:</div>
                        <ul class = 'program-list'>
                            <li>Избегать опасные ситуации и конфликты</li>
                            <li>Тактическому поведению (алгоритм действий)</li>
                            <li>Противостоять физической и психологической агрессии</li>
                        </ul>
                        <div class = 'program-signup-button button-group' id = 'signupbtn2'>
                            записаться на пробное занятие
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </section>

    <!-- SCHEDULE SECTION -->

    <section class = 'section' id = 'schedule-section'>
        <a name = 'schedule'></a>
        <div class = 'mycontainer-title'>
            <div class = 'section-title'>
                Расписание занятий
            </div>
        </div>

        <div class = 'mycontainer' id = 'table-container'>
            <table class = 'schedule-table'>
                <tbody>
                    <?php 
                        $table_row = explode(PHP_EOL, get_field('расписание'));
                        foreach($table_row as $element): ?>
                            <tr><?php echo $element; ?></tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class = 'table-comment'>
                *Индивидуальные занятия проводятся по записи в удобное для вас время
            </div>

        </div>
    </section>

    <!-- COACHES SECTION -->

    <section class = 'section' style = 'flex-direction: column;'>
        <a name = 'coaches'></a>
        <div class = 'mycontainer-title'>
            <div class = 'section-title'>
                Наши тренеры
            </div>
        </div>

        <div class = 'mycontainer' id = 'coaches-grid-container'>
            
            <div class = 'coaches-grid'>

            <?php 
                
                $posts = get_posts(array('category'=> 2, 'numberposts' => -1, 'order' => 'DESC'));
                if ($posts) {
                    foreach( $posts as $post ) {
                        setup_postdata($post); ?>

                        <div class = 'coach-container'>
                            <div class = 'coach-photo-container'>
                                <img src = '<?php the_field('фото_тренера');?>' class = 'coach-photo'/>
                            </div>
                            <div class = 'coach-name'>
                                <?php the_field('фи_тренера');?>
                            </div>
                            <div class = 'coach-position'>
                                <?php the_field('должность_тренера');?>
                            </div>
                            <ul class = 'coach-about'>
                                <?php 
                                    $description = explode(PHP_EOL, get_field('информация_о_тренере'));
                                    foreach($description as $element): ?>
                                    <li><?php echo $element; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    <?php    
                    }
                }
            wp_reset_postdata();?>

            </div>
        </div>

    </section>

    <!-- REVIEWS SECTION -->

    <section class = 'section' id = 'reviews-section'>
        <a name = 'reviews'></a>
        <div class = 'mycontainer-title'>
            <div class = 'section-title'>
                Отзывы
            </div>
        </div>
    </section>

    <div style = 'display: flex; justify-content: center;'>
        <div class = 'slider'>

            <?php 
                
                $posts = get_posts(array('category'=> 3, 'numberposts' => -1, 'order' => 'ASC'));
                if ($posts) {
                    foreach( $posts as $post ) {
                        setup_postdata($post); ?>

                        <div class = 'slider-content'>
                            <div class = 'review-image'>
                                <img src = '<?php the_field('фото_в_отзыве');?>' style = 'border-radius: 20px; margin-bottom: 40px; max-height: 190px'/>
                                <img src = '<?php bloginfo('template_url');?>/images/Rectangle 38.png' class = 'review-image-frame' alt = 'frame' />
                            </div>
                            <div class = 'review-content'>
                                <div class = 'review-quotes'>
                                    <img src = '<?php bloginfo('template_url');?>/images/quotes.png' alt = 'quotes'/>
                                </div>

                                <?php 
                                    $description = explode(PHP_EOL, get_field('содержание_отзыва'));
                                    foreach($description as $element): ?>
                                    <p><?php echo $element; ?></p><br>
                                <?php endforeach; ?>

                                <div class = 'review-author'>
                                    <?php 
                                        $description = explode(PHP_EOL, get_field('автор_отзыва'));
                                        foreach($description as $element): ?>
                                        <p><?php echo $element; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                    <?php    
                    }
                }
            wp_reset_postdata();?>

        </div>
    </div>

    

    <!-- MAP SECTION -->

    <section class = 'section' id = 'map-section'>
        <a name = 'contacts'></a>

        <?php 
            $number = get_field('телефон_организации_в_контактах');
            $replaced = preg_replace( '/[^0-9]/', '',  $number );
            if (substr($replaced, 0, 1) === '8') {
                $formatted_number = '+7'.substr($replaced, 0, 1);
            } else {
                $formatted_number = '+'.$replaced;
            }
        ?>

        <div class = 'mycontainer' id = 'main-map-container'>
            <div class = 'contacts-container'>
                <div class = 'company-name company-contacts'>
                    <b><?php echo get_field('название_организации_в_контактах'); ?></b>
                </div>
                <div class = 'company-address company-contacts'>
                    <?php echo get_field('адрес_организации_в_контактах'); ?>
                </div>
                <div class = 'company-contacts' style = 'display: flex; align-items: center'>
                    <p style = 'margin-right: 5px'>Телефон:</p>
                    <a href = 'tel:<?php echo $formatted_number ?>' class = 'company-telephone company-contacts'>
                        <?php echo get_field('телефон_организации_в_контактах'); ?>
                    </a>
                </div>
                <div class = 'company-contacts' style = 'display: flex; align-items: center'>
                    <p style = 'margin-right: 5px'>Email:</p>
                <a href = 'mailto:<?php echo get_field('email_организации_в_контак'); ?>' class = 'company-email company-contacts'>
                    <?php echo get_field('email_организации_в_контак'); ?>
                </a>
                </div>
                <div class = 'sign-up-button' id = 'signupbtn1'>
                    Записаться на пробное занятие
                </div>
            </div>
            <div class = 'mycontainer' id = 'map-container'>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9e99b546c01f4d3b708c7bf47764d3f808f2d4bb70ae84f344155480048c5170&amp;width=789&amp;height=294&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>

    </section>


<?php get_footer(); ?>

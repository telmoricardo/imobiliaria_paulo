<section class="container">
    <div class="content">
        <header class="sectiontitle sectiontitle-nomargin">
            <h1>Para agendar sua visita, escolha um dia e um horário</h1>            
        </header>
        <div class="clear"></div>
    </div>

    <article class="content">
        <div class="semana">            
            <?php
            $dia = array(
                'segunda' => 'Segunda-Feira',
                'terca' => 'Terça-Feira',
                'quarta' => 'Quarta-Feira',
                'quinta' => 'Quinta-Feira',
                'sexta' => 'Sexta-Feira'
            );
            foreach ($dia as $key => $valor):
                ?>
                <div class="dias">
                    <p><?= $valor?></p> 
                    <div class="horario">
                         <?php
                            $h = array(
                                '1' => '08:00h às 10:00h',
                                '2' => '10:00h às 12:00h',
                                '3' => '12:00h às 14:00h',
                                '4' => '14:00h às 16:00h',
                                '5' => '16:00h às 18:00h'
                            );
                            foreach ($h as $k => $v):
                        ?>                            
                        <a href="agenda/<?=$key?>/<?=$k?>" class="btn btn-agendar"><?= $v?></a> 
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="clear"></div>
    </article>
</section>




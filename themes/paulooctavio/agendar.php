<section class="container">
    <div class="content">
        <header class="sectiontitle sectiontitle-nomargin">
            <h1>Para agendar sua visita, escolha um dia e um horário!</h1>
            <p class="tagline">

            </p>
        </header>
        <div class="clear"></div>
    </div>

    <article class="">
        <div class="content">
            <table class="table table-responsive">
                <thead> 
                    <tr>
                        <th>Segunda-Feira</th>
                        <th>Terça-Feira</th>
                        <th>Quarta-Feira</th>
                        <th>Quinta-Feira</th>
                        <th>Sexta-Feira</th>                       	
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <?php for ($i = 0; $i <= 4; $i++): ?>
                            <th>
                                <button class="btn-agendar btn-red">08:00h às 10:00h</button>
                                <button class="btn-agendar btn-red">10:00h às 12:00h</button>
                                <button class="btn-agendar btn-red">12:00h às 14:00h</button>
                                <button class="btn-agendar btn-red">16:00h às 18:00h</button>
                            </th>  
                        <?php endfor; ?>
                    </tr>

                </tbody>
            </table>

            <div class="clear"></div>
        </div>
    </article>

    <section>        
        <div class="content">
            <header class="articletitle">
                <h1>Agende a sua visita</h1>
                <p class="tagline">Algumas informações importantes. Sua visita será acompanhada por um corretor e até 4 outros interessados.</p>
            </header>

            <form name="sendcontent" action="" method="post">
                <div class="column column-3">
                    <input type="text" title="Informe Seu Nome" name="nome" placeholder="Informe Seu Nome:"/>
                </div>
                <div class="column column-3">
                    <input type="email" title="Informe Seu E-mail" name="email" placeholder="Informe Seu E-mail:"/>
                </div>
                <div class="column column-3">
                    <input type="text" title="Informe Seu Telefone" name="telefone" placeholder="Informe Seu Telefone:"/>
                </div>
                <div class="column column-3">
                    <input type="submit" class="btn btn-red" style="height: 48px;" value="Enviar">
                </div>               
            </form>

            <div class="clear"></div>
        </div>     
    </section>

</section>
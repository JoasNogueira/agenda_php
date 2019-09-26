<div class="mdl-layout__tab-panel is-active" id="contatos">
    <?php foreach ($contatos as $contato): ?>
        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <i class="material-icons">play_circle_filled</i>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card__supporting-text">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="Nome">
                        <label class="mdl-textfield__label" for="Nome">Nome</label>
                    </div>
                    Sexo: <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                        <span class="mdl-radio__label">Masculino</span>
                    </label>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                        <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                        <span class="mdl-radio__label">Feminino</span>
                    </label>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="e-mail" id="email">
                        <label class="mdl-textfield__label" for="email">Email</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="number" id="Numero">
                        <label class="mdl-textfield__label" for="Numero">Numero</label>

                        <lab class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                            <span class="mdl-radio__label">Whatsapp</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                                <span classel class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                    <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                    <span class="mdl-radio__label">Whatsapp</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                                <span class="mdl-radio__label">Fixo</span>
                            </label>
                    </div>
                </div>
                <div class="mdl-card__actions">
                    <a href="/detalhes" class="mdl-button">Ver Contato</a>
                </div>
            </div>
            <!--            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn1">
                            <li class="mdl-menu__item">Lorem</li>
                            <li class="mdl-menu__item" disabled>Ipsum</li>
                            <li class="mdl-menu__item">Dolor</li>
                        </ul>-->
        </section>
    <?php endforeach; ?>
</div>

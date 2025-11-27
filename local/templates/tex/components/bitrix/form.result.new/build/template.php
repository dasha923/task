<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */

$this->setFrameMode(true);
$this->addExternalCss($templateFolder. '/css/common.css');
?>

<div class="contact-form">
    <div class="contact-form__head">
        <div class="contact-form__head-title">Связаться</div>
        <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом ваших требований</div>
    </div>

<?if($arResult['isFormNote'] === 'Y'): ?>
    <div class="form-success-message">
        <?=$arResult['FORM_NOTE']?>
    </div>
<?else: ?>

    <?if ($arResult['isFormErrors'] === 'Y'):?>
        <div class="form-errors">
            <?=$arResult['FORM_ERRORS_TEXT']?>
        </div>
    <?endif;?>

    <form class="contact-form__form" name="<?=$arResult['WEB_FORM_NAME']?>" action="<?=POST_FORM_ACTION_URI?>" method="POST">
        <?=bitrix_sessid_post()?>
        <input type="hidden" name="WEB_FORM_ID" value="<?=$arResult['WEB_FORM_ID']?>" />

        <div class="contact-form__form-inputs">
            <div class="input contact-form__input">
                <label class="input__label" for="form_name_1">
                    <div class="input__label-text">Ваше имя*</div>
                    <input class="input__input" type="text" id="form_name_1" name="NAME" value="<?=htmlspecialchars($arResult['arrVALUES']['NAME'] ?? '')?>" required minlength="3">
                    <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="form_company_2">
                    <div class="input__label-text">Компания/Должность*</div>
                    <input class="input__input" type="text" id="form_company_2" name="COMPANY" value="<?=htmlspecialchars($arResult['arrVALUES']['COMPANY'] ?? '')?>" required minlength="3">
                    <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="form_email_3">
                    <div class="input__label-text">Email*</div>
                    <input class="input__input" type="email" id="form_email_3" name="EMAIL" value="<?=htmlspecialchars($arResult['arrVALUES']['EMAIL'] ?? '')?>" required>
                    <div class="input__notification">Неверный формат почты</div>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="form_phone_4">
                    <div class="input__label-text">Номер телефона*</div>
                    <input class="input__input" type="tel" id="form_phone_4" name="PHONE" value="<?=htmlspecialchars($arResult['arrVALUES']['PHONE'] ?? '')?>" required>
                </label>
            </div>
        </div>
        <div class="contact-form__form-message">
            <div class="input">
                <label class="input__label" for="form_message_5">
                    <div class="input__label-text">Сообщение</div>
                    <textarea class="input__input" id="form_message_5" name="MESSAGE" rows="5"><?=htmlspecialchars($arResult['arrVALUES']['MESSAGE'] ?? '')?></textarea>
                    <div class="input__notification"></div>
                </label>
            </div>
        </div>
         <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                данных&raquo;.
            </div>
          <button class="form-button contact-form__bottom-button" type="submit" name="web_form_submit" value="Y" data-success="Отправлено" data-error="Ошибка отправки">
                <div class="form-button__title">Оставить заявку</div>
            </button>
        </div>
    </form>
<?endif;?>
</div>

<!-- Стили остаются без изменений -->
<style>
.contact-form__bottom {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    width: 100%;
    text-align: left;
    margin-top: 20px;
    gap: 20px;
    margin-left: 0;
    padding-left: 0;
}

.contact-form__bottom-policy {
    width: 100%;
    font-size: 1.4rem;
    color: #172c5f;
    line-height: 1.7;
    margin: 0;
    text-align: left;
    padding-left: 0;
    margin-left: 0;
}

.contact-form__bottom-button {
    width: auto;
    min-width: 220px;
    height: 60px;
    background-color: #fff;
    border: 1px solid #172c5f;
    color: #172c5f;
    font-size: 1.4rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    padding: 0 30px;
    margin-left: 0;
}

.contact-form__bottom-button:hover {
    background-color: #172c5f;
    color: #fff;
}

.form-button__title {
    font-size: inherit;
    color: inherit;
}

@media (max-width: 767.98px) {
    .contact-form__bottom {
        gap: 15px;
        margin-left: 0;
        padding-left: 0;
    }

    .contact-form__bottom-policy {
        font-size: 1.2rem;
        line-height: 1.5;
        padding-left: 0;
        margin-left: 0;
    }

    .contact-form__bottom-button {
        width: 100%;
        max-width: none;
        height: 50px;
        margin-left: 0;
    }
}

@media (min-width: 1200px) {
    .contact-form__bottom-policy {
        font-size: 1.6rem;
        line-height: 1.7;
        padding-left: 0;
        margin-left: 0;
    }

    .contact-form__bottom-button {
        font-size: 1.6rem;
        min-width: 250px;
        height: 70px;
        margin-left: 0;
    }
}
</style>
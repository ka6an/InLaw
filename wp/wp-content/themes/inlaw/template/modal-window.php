<div class="modal-window">
  <div class="modal-wrap" aria-hidden="true" role="dialog">
    <div class="modal__overlay" onclick="toggleModal();"></div>
    <div class="modal-dialog">
      <div class="modal-body">
        <p class="modal__title">Обратная связь</p>
        <p class="modal__text">Если у Вас возникли вопросы, оставьте свои контакты с кратким описанием проблемы и мы обязательно с Вами свяжемся</p>
        <p class="feedback-msg">
        <b class="feedback-msg_title">Сообщение отправлено</b>
        <br /> Мы свяжемся с Вами в ближайшее время</p>
        <button class="modal-body__btn_close" onclick="toggleModal();"></button>
        <form id="form-modal" class="form" method="POST" action="javascript:void(null);">
          <input type="text" name="name" class="form__input" placeholder="Имя" pattern="[А-Яа-яЁё]{2,}" title="Русские буквы" required />
          <input type="tel" name="phone" class="form__input form__phone" placeholder="Телефон" required pattern="\+?7[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}">
          <input type="text" name="email" class="form__input" placeholder="Email" required pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}">
          <textarea name="text" class="form__textarea" placeholder="Ваше сообщение"></textarea>
          <fieldset class="form__checkbox">
            <input type="checkbox" id="modal-checkbox-agree" required>
            <label class="checkbox__label" for="modal-checkbox-agree">Согласие на&nbsp;обработку персональных данных</label>
          </fieldset>
          <button class="form__button">Отправить</button>
        </form>
      </div>
    </div>
  </div>
</div>
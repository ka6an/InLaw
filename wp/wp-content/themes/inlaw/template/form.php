<div class="block feedback">
  <div class="title_wrap animation-element">
    <h2 class="title__h2">Обратная связь</h2>
  </div>
  <h4 class="title__h4">Для&nbsp;получения более подробной информации обратитесь в&nbsp;Юридическое&nbsp;бюро IN&nbsp;LAW любым удобным для Вас способом, мы&nbsp;согласуем нашу встречу и&nbsp;обсудим возможные варианты нашего сотрудничества.</h4>
  <p class="feedback-msg">
    <b class="feedback-msg_title">Сообщение отправлено</b>
    <br /> Мы свяжемся с Вами в ближайшее время</p>
  <form id="form" class="form" method="POST" action="javascript:void(null);">
    <input type="text" name="name" class="form__input" placeholder="Имя" required pattern="[А-Яа-яЁё]{2,}" title="Русские буквы">
    <input type="tel" name="phone" class="form__input form__phone" placeholder="Телефон" required pattern="\+?7[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}">
    <input type="text" name="email" class="form__input" placeholder="Email" required pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}">
    <textarea name="text" class="form__textarea" placeholder="Ваше сообщение"></textarea>
    <fieldset name="text" class="form__checkbox">
      <input type="checkbox" id="checkbox-agree" required>
      <label class="checkbox__label" for="checkbox-agree">Согласие на&nbsp;обработку персональных данных</label>
    </fieldset>
    <button class="form__button">Отправить</button>
  </form>
</div>
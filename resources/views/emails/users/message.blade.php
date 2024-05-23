@component('mail::message')
# Ваше письмо отправлено менеджеру.

Вскором времени ваш вопрос будет решен и с вами свяжутся.

**Тема сообщения** {{ $message->subject }}

**Email:** {{ $message->email }}

**Имя:** {{ $message->username }}

**Phone:** {{ $message->phone}}

**Сообщение:** {{ $message->message }}

Спасибо.

С наилучшими пожеланиями,<br>
Национальная академия наук
Высшей школы Казахстана
@endcomponent

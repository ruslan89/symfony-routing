# Symfony Routing

### Второе практическое задание по symfony. Routing

## Цели

1. Понять принципы построения роутинга в проектах с использованием Symfony
2. Понять принципы устройства контроллеров
  * Инициализация контроллера
  * Сопоставление аргументов
  * Двойная диспетчиризация

## Задачи

1. Форкнуть и склонировать проект
2. Выполнить задания не внося изменения в файлы, кроме указанных
3. Создавать дополнительные файлы разрешено
4. Отправить пулл-реквест с решением задачи
5. Участвовать в обсуждении своего и чужих пулл-реквестов

## Задания

### Общие правила

Запрещено использование следующих компонентов и бандлов (в целях обучения):
* `FrameworkBundle`
* `Symfony/Routing`

Файлы, которые всегда можно изменять:

1. `composer.json` - возможно управление автолоадингом
2. `DepdendencyInjection/ServiceCompilerPass.php` - можно изменять имплементацию методов

Файлы, которые нельзя изменять:

1. `MiniKernel.php`
2. `web/web.php`
3. `Common/*`

Для размещения кода используйте namespace `BankiruSchool\Routing\Tasks`

Сервер должен запускаться командой `php -S 0.0.0.0:8000 web/web/php`

#### Общая часть

Добейтесь чтобы контроллеры отвечали на `GET` запросы 
(только на них, ответ контроллера на другие методы будет считаться ошибкой), 
по путям вида `taskN/task.check?term=some-param-value`

В ответ контроллер должен выдать ответ 200 с телом `some-param-value`

Имплементация большей части контроллеров уже подготовлена, в ходе 
выполнения задания вам нужно лишь корректно их сконфигурировать

#### 1. Статический контроллер 1

Подключите глобальную функцию `action` из файла `Common/functionController.php` в качестве контроллера

#### 2. Статический контроллер 2

Подключите статический метод `action` класса `StaticController` в качестве контроллера

#### 3. Контроллер с зависимостями

Подключете метод `action` класса `BasicController` в качестве контроллера

#### 4. Объект-контроллер

Расширьте и доопределите контроллер `AbstractController` таким образом, чтобы
можно было использовать его в качестве контроллера используя только инстанс класса-наследника

#### 5. Сопоставление аргументов

Подключите метод `action` класса `DispatchedController` в качестве контроллера

## Материалы для изучения 

<p align=center>
  <img src=https://cdn.jump.finance/openapi.png />
</p>

# Jump Finance API PHP Client

- Релизация API на PHP [Jump.Finance OpenApi (2.0)](https://api.jump.finance/openapi/services/contractors/).
- Вход в систему [Войти](https://my.jump.finance).

## Установка

```sh
composer require jumpfinance/jumpfinance
```
## Начало работы

```php
use JumpFinance\Builder\Performer;
use JumpFinance\Client;

// ClientKey вашего личного кабинета, можно получить в разделе Интеграции
$client = new Client('df7d75a3-d989-43e3-a697-89a2f4e350kq');

// например работа с Исполнителями
$performers = $client->performers();

$performer = (new Performer)
    ->setPhone("+79407853314")
    ->setEmail('konstantin@internet.ru')
    ->setLastName("Константинопольский")
    ->setFirstName("Константин")
    ->setMiddleName("Константинович")
    ->setLegalFormId(2)
    ->setINN("723404785380")
    ->setAgentId(14680)
    ->setGroupId(43724)
    ->setCompanyAgreesPayTaxes(true);

echo $performers->setPerformer($performer);
```


## Реализованные API
### Банковские счета
- [Получить все банковские счета](docs/Банковские_счета.md)
- [Получить информацию по банковскому счёту](docs/Банковские_счета.md)
- [Запросить обновление балансов всех банковских счетов](docs/Банковские_счета.md)
- [Получить информацию по запросу обновления банковских счетов](docs/Банковские_счета.md)
### Внутренние балансы
- [Получить все внутренние балансы компании](docs/Внутренние_балансы.md)
### Выплаты
- в разработке
### Группы
- в разработке
### Интеграции
- в разработке
### Исполнители
- [Создать/изменить исполнителя](docs/Исполнители.md)
- [Получить всех исполнителей](docs/Исполнители.md)
- [Получить карточку исполнителя](docs/Исполнители.md)
- [Удалить исполнителя](docs/Исполнители.md)
- [Обновление исполнителя](docs/Исполнители.md)
- [Получить реквизиты исполнителя](docs/Исполнители.md)
- [Получить балансы исполнителя](docs/Исполнители.md)
- [Получить баланс исполнителя](docs/Исполнители.md)
- [Получить информацию о самозанятом](docs/Исполнители.md)
- [Проверить статус самозанятого](docs/Исполнители.md)
- [Принудительно идентифицировать исполнителя](docs/Исполнители.md)
- [Получить информацию о последнем одобренном запросе на идентификацию](docs/Исполнители.md)
### Самозанятые
- в разработке
### Словари
- в разработке
### Юрлица
- в разработке
### Филиалы
- в разработке
### Отделы юрлиц
- в разработке
### Должности
- в разработке
### Штатные сотрудники
- в разработке
### Типы документов
- в разработке
### Документы
- в разработке
### Акты
- в разработке
### Подписи документов
- в разработке
### Отпуска
- в разработке
### Виды отпусков
- в разработке
### Кандидаты
- в разработке
### Анкеты кандидатов
- в разработке
### Расчетные листы
- в разработке
### Шаблоны заявлений
- в разработке
### Заявления
- в разработке
### Провайдеры подписей
- в разработке
### Производственные календари
- в разработке




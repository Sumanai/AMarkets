# Тестовое задание на Laravel с использованием возможностей PostgreSQL

Установка стандартная, конфиг нужно скопировать из `.env.example` в `.env`, поправив доступы к БД.

## Принцип работы

API работает полностью на JSON и с соблюдением стандартных соглашений о путях и REST.
Запросы идут на `/api/poster` для списка, `POST` туда же для создания и `DELETE` по пути `/api/poster/1` для удаления.

Для запуска локального сервера нужно накатить миграции `php artisan migrate` и запустить сервер `php artisan serve`

Для проверки можно использовать следующий конфиг Thunder Client (должен подойти и для Postman)

```json
{"client":"Thunder Client","collectionName":"AMarkets","dateExported":"2022-03-03T21:35:02.307Z","version":"1.1","folders":[],"requests":[{"containerId":"","sortNum":10000,"headers":[{"name":"Accept","value":"*/*"},{"name":"User-Agent","value":"Thunder Client (https://www.thunderclient.com)"}],"colId":"fc82902f-ead0-40e9-b323-0da26cc7e72d","name":"Create","url":"http://127.0.0.1:8000/api/poster/","method":"POST","modified":"2022-03-03T21:33:56.068Z","created":"2022-03-03T17:35:22.703Z","_id":"46f39fff-a5a3-4cc0-9501-a00c81c4f5db","params":[],"body":{"type":"json","raw":"{\n    \"name\": \"Test name\",\n    \"start_date\": \"19-02-2019\",\n    \"end_date\": \"21-03-2019\"\n}","form":[]},"tests":[]},{"containerId":"","sortNum":20000,"headers":[{"name":"Accept","value":"*/*"},{"name":"User-Agent","value":"Thunder Client (https://www.thunderclient.com)"}],"colId":"fc82902f-ead0-40e9-b323-0da26cc7e72d","name":"List","url":"http://127.0.0.1:8000/api/poster/","method":"GET","modified":"2022-03-03T21:34:20.571Z","created":"2022-03-03T17:35:22.703Z","_id":"6235f1ca-05c0-440e-8692-b2a4d0a92d5b","params":[],"body":{"type":"json","raw":"{\n    \"name\": \"lolkek\",\n    \"start_date\": \"19-02-2018\",\n    \"end_date\": \"21-03-2018\"\n}","form":[]},"tests":[]},{"containerId":"","sortNum":30000,"headers":[{"name":"Accept","value":"*/*"},{"name":"User-Agent","value":"Thunder Client (https://www.thunderclient.com)"}],"colId":"fc82902f-ead0-40e9-b323-0da26cc7e72d","name":"Delete","url":"http://127.0.0.1:8000/api/poster/15","method":"DELETE","modified":"2022-03-03T21:34:27.445Z","created":"2022-03-03T17:35:22.703Z","_id":"22a267d4-915e-4fb8-b1dc-719335fd92bc","params":[],"tests":[]}]}
```

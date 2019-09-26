/*
 Copyright 2011 Martin Hawksey
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at
 http://www.apache.org/licenses/LICENSE-2.0
 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
 */


// Как использовать?
//
// 1. Привязываем данный скрипт к вашему документу (Инструменты -> Редактор скриптов)
// 2. Добавляем данный код
// 3. Ниже указываем название вашей таблицы в которую будут записываться данные
var SHEET_NAME = "Название_таблицы";
// 4. Нажимаем Выполнить -> Запустить функцию -> setup
// 5. Нажимаем Опубликовать -> Развернуть как веб приложение
//    - Как запускать приложение = от моего имени
//    - Кто имеет доступ к приложению = все, включая анонимных пользователей
// 6. Даем разрешение веб-приложению (подтверждаем)
// 7. Копируем Текущий URL веб-приложения (на него будем отправлять запросы с формы)
// 9. В вашей Google таблице указываем названия столбцов ровно такими, каким вы их передаете с формы
// Ниже код не трогаем.
var SCRIPT_PROP = PropertiesService.getScriptProperties();
function doGet(e){
    return handleResponse(e);
}
function doPost(e){
    return handleResponse(e);
}
function handleResponse(e) {
    var lock = LockService.getPublicLock();
    lock.waitLock(30000);
    try {
        var doc = SpreadsheetApp.openById(SCRIPT_PROP.getProperty("key"));
        var sheet = doc.getSheetByName(SHEET_NAME);
        var headRow = e.parameter.header_row || 1;
        var headers = sheet.getRange(1, 1, 1, sheet.getLastColumn()).getValues()[0];
        var nextRow = sheet.getLastRow()+1;
        var row = [];
        for (i in headers){
            if (headers[i] == "Дата создания"){// название столбца в таблице. в нем отображается дата создания записи
                row.push(new Date());
            } else {
                row.push(e.parameter[headers[i]]);
            }
        }
        sheet.getRange(nextRow, 1, 1, row.length).setValues([row]);
        return ContentService
            .createTextOutput(JSON.stringify({"result":"success", "row": nextRow}))
            .setMimeType(ContentService.MimeType.JSON);
    } catch(e){
        return ContentService
            .createTextOutput(JSON.stringify({"result":"error", "error": e}))
            .setMimeType(ContentService.MimeType.JSON);
    } finally {
        lock.releaseLock();
    }
}
function setup() {
    var doc = SpreadsheetApp.getActiveSpreadsheet();
    SCRIPT_PROP.setProperty("key", doc.getId());
}
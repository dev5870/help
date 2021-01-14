// смена title при клике на определенную вкладку (tab)
  function changeTitle1(){
    newPageTitle1 = 'Работы на дорогах и земляные работы.';
    document.title = newPageTitle1;
    var desc1 = "Прямые строительные заказы в Риге на дорожные и земляные работы.";
    document.querySelector('meta[name="description"]').setAttribute("content", desc1);
    console.info('Меняем Title');
  }
  function changeTitle2(){
    newPageTitle2 = 'Аренда спецтехники в Риге и в рижском районе.';
    document.title = newPageTitle2;
    var desc2 = "Мы предоставляем в аренду землеройную, погрузочную, а также дорожно-ремонтную технику по доступным ценам.";
    document.querySelector('meta[name="description"]').setAttribute("content", desc2);
    console.info('Меняем Title');
  }
  function changeTitle3(){
    newPageTitle3 = 'Полный демонтаж зданий и построек в Риге и в рижском районе.';
    document.title = newPageTitle3;
    var desc3 = "Демонтажные работы по договору и в сроки. Гарантия на чистоту. Расчёт стоимости демонтажных работ по ликвидации зданий и сооружений.";
    document.querySelector('meta[name="description"]').setAttribute("content", desc3);
    console.info('Меняем Title');
  }
  function changeTitle4(){
    newPageTitle4 = 'Перевозка и продажа сыпучих грузов в Риге и в рижском районе.';
    document.title = newPageTitle4;
    var desc4 = "Перевозка навалочных и насыпных грузов. Купить сыпучие строительные материалы. Заказать доставку.";
    document.querySelector('meta[name="description"]').setAttribute("content", desc4);
    console.info('Меняем Title');
  }
  function changeTitle5(){
    newPageTitle5 = 'Переработка и сортировка строительного мусора в Риге и в рижском районе.';
    document.title = newPageTitle5;
    var desc5 = "Контейнеры для строительного мусора. Заказать вывоз строительного мусора. Утилизация, сортировка, переработка.";
    document.querySelector('meta[name="description"]').setAttribute("content", desc5);
    console.info('Меняем Title');
  }
  function changeTitle6(){
    newPageTitle6 = 'Переработка железобетона и бетона в Риге и в рижском районе.';
    document.title = newPageTitle6;
    var desc6 = "Утилизация железобетона, его переработка, применение вторичных материалов. Рециклинг бетона — технология переработки строительных отходов.";
    document.querySelector('meta[name="description"]').setAttribute("content", desc6);
    console.info('Меняем Title');
  }
  function changeTitle7(){
    newPageTitle7 = 'Просеивание чернозёма и сыпучих материалов в Риге и в рижском районе.';
    document.title = newPageTitle7;
    var desc7 = "Оборудование для просеивания сыпучих материалов. Грохот для просеивания песка, гравия, чернозема. Заказать просеивающие машины.";
    document.querySelector('meta[name="description"]').setAttribute("content", desc7);
    console.info('Меняем Title');
  }

// изменение title при переходе к определенному #tabs
// в идеале использовать серверное решение
// но так как php не видит все что после # получить полный url не получилось 
  if (/tabs-1/.test(location.href)) {
    console.info('Ссылка содержит слово tabs-1');
    changeTitle1();
  } else {
    console.info('Ссылка не содержит слово tabs-1');
  }

  if (/tabs-2/.test(location.href)) {
    console.info('Ссылка содержит слово tabs-2');
    changeTitle2();
  } else {
    console.info('Ссылка не содержит слово tabs-2');
  }

  if (/tabs-3/.test(location.href)) {
    console.info('Ссылка содержит слово tabs-3');
    changeTitle3();
  } else {
    console.info('Ссылка не содержит слово tabs-3');
  }

  if (/tabs-4/.test(location.href)) {
    console.info('Ссылка содержит слово tabs-4');
    changeTitle4();
  } else {
    console.info('Ссылка не содержит слово tabs-4');
  }

  if (/tabs-5/.test(location.href)) {
    console.info('Ссылка содержит слово tabs-5');
    changeTitle5();
  } else {
    console.info('Ссылка не содержит слово tabs-5');
  }

  if (/tabs-6/.test(location.href)) {
    console.info('Ссылка содержит слово tabs-6');
    changeTitle6();
  } else {
    console.info('Ссылка не содержит слово tabs-6');
  }

  if (/tabs-7/.test(location.href)) {
    console.info('Ссылка содержит слово tabs-7');
    changeTitle7();
  } else {
    console.info('Ссылка не содержит слово tabs-7');
  }

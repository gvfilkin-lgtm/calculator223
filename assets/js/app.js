document.addEventListener('DOMContentLoaded', () => {

    const procurement = document.getElementById('procurement');
    const publishDate = document.getElementById('publishDate');
    const calculate = document.getElementById('calculate');
    const result = document.getElementById('result');

    // Сегодняшняя дата по умолчанию
    publishDate.value = new Date().toISOString().split('T')[0];

    // Пока временный список способов закупки
    const methods = [
        'Конкурс',
        'Аукцион',
        'Запрос котировок',
        'Запрос предложений',
        'Конкурентные переговоры',
        'Запрос оферт',
        'Маркетинговое исследование',
        'Другой'
    ];

    procurement.innerHTML = '';

    methods.forEach(item => {

        const option = document.createElement('option');

        option.value = item;
        option.textContent = item;

        procurement.appendChild(option);

    });

    calculate.addEventListener('click', () => {

        result.style.display = 'block';

        result.innerHTML = `
            <div class="result-card">

                <div class="result-title">
                    Способ закупки
                </div>

                <div class="result-date">
                    ${procurement.value}
                </div>

            </div>

            <div class="result-card">

                <div class="result-title">
                    Дата публикации
                </div>

                <div class="result-date">
                    ${publishDate.value}
                </div>

            </div>

            <div class="alert alert-info mt-3">
                Следующим этапом здесь появится полный расчет сроков по 223-ФЗ.
            </div>
        `;

        result.scrollIntoView({
            behavior: 'smooth'
        });

    });

});

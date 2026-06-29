document.addEventListener('DOMContentLoaded', () => {

    const procurement = document.getElementById('procurement');
    const publishDate = document.getElementById('publishDate');
    const calculate = document.getElementById('calculate');
    const result = document.getElementById('result');

    publishDate.value = new Date().toISOString().split('T')[0];

    loadProcurements();

    async function loadProcurements() {

        procurement.innerHTML =
            '<option>Загрузка...</option>';

        try {

            const response = await fetch(
                'api.php?action=procurements'
            );

            const json = await response.json();

            procurement.innerHTML = '';

            json.data.forEach(item => {

                const option =
                    document.createElement('option');

                option.value = item.id;

                option.textContent = item.name;

                procurement.appendChild(option);

            });

        } catch (e) {

            procurement.innerHTML =
                '<option>Ошибка загрузки</option>';

            console.error(e);

        }

    }

    calculate.addEventListener('click', () => {

        result.style.display = 'block';

        result.innerHTML = `

            <div class="result-card">

                <div class="result-title">

                    Выбранный способ закупки

                </div>

                <div class="result-date">

                    ${
                        procurement.options[
                            procurement.selectedIndex
                        ].text
                    }

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

            <div class="alert alert-success mt-4">

                ✔ PHP API работает.

                Следующий этап — настоящий расчет.

            </div>

        `;

    });

});

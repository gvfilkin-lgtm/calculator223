<?php
declare(strict_types=1);
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Калькулятор сроков по 223-ФЗ</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Наши стили -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="calculator-card">

                <div class="text-center mb-4">

                    <img
                        src="assets/img/logo.svg"
                        class="logo"
                        alt="223-ФЗ">

                    <h1 class="mt-3">
                        Калькулятор сроков закупок
                    </h1>

                    <p class="text-muted">
                        Федеральный закон №223-ФЗ
                    </p>

                </div>

                <div class="row g-3">

                    <div class="col-md-6">

                        <label class="form-label">

                            Способ закупки

                        </label>

                        <select
                                class="form-select"
                                id="procurement">

                            <option>
                                Загрузка...
                            </option>

                        </select>

                    </div>

                    <div class="col-md-6">

                        <label class="form-label">

                            Дата публикации

                        </label>

                        <input
                                type="date"
                                class="form-control"
                                id="publishDate">

                    </div>

                </div>

                <div class="d-grid mt-4">

                    <button
                            class="btn btn-primary btn-lg"
                            id="calculate">

                        Рассчитать сроки

                    </button>

                </div>

                <div
                        id="result"
                        class="mt-5">

                </div>

            </div>

        </div>

    </div>

</div>

<script src="assets/js/app.js"></script>

</body>
</html>
